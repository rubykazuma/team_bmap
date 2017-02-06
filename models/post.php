<?php
	class Post{

		//プロパティ（db接続オブジェクト)
		private $dbconnect = '';

		//コンストラクタ
		function __construct(){
		// 	// DB接続ファイルを読み込む
			require('dbconnect.php');

		// 	// DB接続設定の値をプロパティに代入
			$this->dbconnect = $db;
		}

		function mypage($id){
			$sql = sprintf('SELECT * FROM `posts` WHERE `userid` = %d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
				$rtn[] = $result;
			}
			return $rtn;
		}
	}

?>