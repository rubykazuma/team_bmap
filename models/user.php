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