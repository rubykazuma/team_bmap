<?php
class post{
		//プロパティ（db接続オブジェクト)
		private $dbconnect = '';
		//コンストラクタ
		function __construct(){

      // DB接続ファイルを読み込む
			require('dbconnect.php');

		  // DB接続設定の値をプロパティに代入
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

		// 一覧表示に必要なデータを取得
		function home(){
			// SQLの記述(SELECT文)
			$sql = 'SELECT *
							FROM `posts`';
			// SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			// 実行結果を取得し、配列に格納
			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
						 $rtn[] = $result;
			}
			// 取得結果を返す
			return $rtn;
		}

		function add($add_data){
			// insert文の記述
			$sql = sprintf("INSERT INTO `blogs` (`id`, `title`, `body`, `delete_flag`, `created`, `modified`)
											VALUES (NULL, '%s', '%s', '0', now(), CURRENT_TIMESTAMP);", $blog_data['title'], $blog_data['body']);

			$sql = sprintf("INSERT INTO `posts`(`id`, `title`, `contents`, `mainPictureAddress`, `area`, `genre`, `userid`, `createdate`, `modified`)
											VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');", $add_data['title'], $add_data['contents'], $add_data['mainImage'], $add_data['area'], $add_data['genre'], $id, now(), now());

			// SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			// 実行結果を返す
			return $results;
		}
}
?>