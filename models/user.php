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

		function create($user_data){
			// ニックネームとメールアドレスの重複チェック
			$sql = sprintf('SELECT COUNT(*) AS cnt FROM user WHERE nickname = "%s" OR email = "%s"', $user_data['nickname'], $user_data['email']);
      $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      $table = mysqli_fetch_assoc($record);

      // 重複チェックをクリアした場合にのみDBに登録
      if ($table['cnt'] == 0) {
				$sql = sprintf("INSERT INTO `user` (`nickname`, `email`, `birthday`, `password`, `createdate`)
												VALUES ('%s', '%s', '20170101', '%s', NOW());", $user_data['nickname'], $user_data['email'], sha1($user_data['password']));
				$result = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
				return $result;
			} else {
				$result ='error';
				return $result;
			}
		}

		function profilechg($id){
			$sql = sprintf('SELECT * FROM `user` WHERE `userid` = %d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			$result = mysqli_fetch_assoc($results);
			return $result;
		}

		function profileud($id,$user_data){
			$sql = sprintf("UPDATE `user` SET `nickname` = '%s', `email` = '%s', `password` = '%s' WHERE `userid` = %d", $user_data['nickname'], $user_data['email'], $user_data['password'], $id);
			$result = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			return $result;
		}

		function userdel($id){
			$sql = sprintf("DELETE FROM `user` WHERE `userid` = %d", $id);
			$result = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			return $result;
		}

	}
?>