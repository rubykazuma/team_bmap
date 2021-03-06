<?php

	class User{

		//プロパティ（db接続オブジェクト)
		private $dbconnect = '';

		//コンストラクタ
		function __construct(){
		// 	// DB接続ファイルを読み込む
		require('dbconnect.php');

		// 	// DB接続設定の値をプロパティに代入
		$this->dbconnect = $db;
		}

		function logout($user_id){
			// セッション情報に上書きして空にする
			$_SESSION = array();
			if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$prams["path"], $prams["domain"],
				$prams["secure"], $params["httponly"]
				);
			}
			session_destroy();

			// cookie情報も削除
			// setcookie('email', '', time() -3600);
			// setcookie('password', '', time() -3600);

			return ;
		}

		function create($user_data){
			// ニックネームの重複チェック
			$sql = sprintf('SELECT COUNT(*) AS cnt FROM user WHERE nickname = "%s"', $user_data['nickname']);
		    $nicknameRecord = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
		    $nicknameTable = mysqli_fetch_assoc($nicknameRecord);
					// メールアドレスの重複チェック
			$sql = sprintf('SELECT COUNT(*) AS cnt FROM user WHERE email = "%s"', $user_data['email']);
		    $emailRecord = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
		    $emailTable = mysqli_fetch_assoc($emailRecord);
		    
		    // 重複チェックをクリアした場合にのみDBに登録
		    if ($nicknameTable['cnt'] == 0 && $emailTable['cnt'] == 0) {
						$sql = sprintf("INSERT INTO `user` (`nickname`, `email`, `birthday`, `password`, `createdate`)
														VALUES ('%s', '%s', '20170101', '%s', NOW());", $user_data['nickname'], $user_data['email'], sha1($user_data['password']));
						$result = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			} elseif ($nicknameTable['cnt'] > 0 && $emailTable['cnt'] > 0) {
				$_SESSION['error'] = 'both';
				$result = $_SESSION['error'];
			}	elseif ($nicknameTable['cnt'] > 0) {
				$_SESSION['error'] = 'nickname';
				$result = $_SESSION['error'];
			} elseif ($emailTable['cnt'] > 0) {
				$_SESSION['error'] = 'email';
				$result = $_SESSION['error'];
			} return $result;
		}

		function profilechg($id){
			$sql = sprintf('SELECT * FROM `user` WHERE `userid` = %d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			$result = mysqli_fetch_assoc($results);
			return $result;
		}

		function profileud($id,$user_data){
			// update文の記述
			$sql = sprintf("UPDATE `user` SET `nickname` = '%s', `email` = '%s', `password` = '%s' WHERE `userid` = %d", $user_data['nickname'], $user_data['email'], $user_data['password'], $id);
			// SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			// 実行結果を返す
			return $results;
		}

		function userdel($id){
			$sql = sprintf("DELETE FROM `user` WHERE `userid` = %d", $id);
			// SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			// 実行結果を返す
			return $results;
		}


		function login($user_data){
			$sql=sprintf('SELECT * FROM user WHERE email = "%s" AND password = "%s"',
						mysqli_real_escape_string($this->dbconnect, $user_data['email']),
            mysqli_real_escape_string($this->dbconnect, sha1($user_data['password']))
      );
      $record = mysqli_query($this->dbconnect, $sql) or die (mysqli_error($this->dbconnect));
      $result = mysqli_fetch_assoc($record);
			return $result;
		}

	}
?>