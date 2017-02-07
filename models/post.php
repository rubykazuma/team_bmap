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

		function create($add_data,$image_data){
			// 画像UD
			$image = date('YmdHis') . $image_data['mainImage']['name'];
      move_uploaded_file($image_data['mainImage']['tmp_name'], '/b_map/webroot/pictures/' . $image);

			// DB登録
			$sql = sprintf("INSERT INTO `posts`(`title`, `contents`, `mainPictureAddress`, `area`, `genre`, `userid`, `createdate`)
											VALUES ('%s', '%s', '%s', '%d', '%d', '%d', now());",
											$add_data['title'], $add_data['contents'], $image, $add_data['area'], $add_data['genre'], $id);
			$result = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			return $result;
		}
}
?>