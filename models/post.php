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
			// 画像アップロード(メイン)
			$image = date('YmdHis') . $image_data['image']['name'][0];
      move_uploaded_file($image_data['image']['tmp_name'][0], $_SERVER['DOCUMENT_ROOT'].'/b_map/webroot/pictures/'.$image);

			$sql = sprintf("INSERT INTO `posts`(`title`, `contents`, `mainPictureAddress`, `area`, `genre`, `userid`, `createdate`)
											VALUES ('%s', '%s', '%s', '%d', '%d', '%d', now());",
											$add_data['title'], $add_data['contents'], $image, $add_data['area'], $add_data['genre'], $_SESSION['userid']);
			mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      $post_id = mysqli_insert_id($this->dbconnect);

			// 画像アップロード(サブ)
			if (isset($image_data['image']['name'][1]) && !empty($image_data['image']['name'][1])) {
				$imagesub1 = date('YmdHis') . $image_data['image']['name'][1];
      	move_uploaded_file($image_data['image']['tmp_name'][1], $_SERVER['DOCUMENT_ROOT'].'/b_map/webroot/pictures/'.$imagesub1);
      	$sql = "INSERT INTO `subPicture`(`postsid`, `subPictureAddress`, `createdate`) VALUES ($post_id, '$imagesub1', now())";
      	// var_dump($sql);
      	mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      }
      if (isset($image_data['image']['name'][2]) && !empty($image_data['image']['name'][2])) {
				$imagesub2 = date('YmdHis') . $image_data['image']['name'][2];
      	move_uploaded_file($image_data['image']['tmp_name'][2], $_SERVER['DOCUMENT_ROOT'].'/b_map/webroot/pictures/'.$imagesub2);
      	$sql = "INSERT INTO `subPicture`(`postsid`, `subPictureAddress`, `createdate`) VALUES ($post_id, '$imagesub2', now())";
      	mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      }
      if (isset($image_data['image']['name'][3]) && !empty($image_data['image']['name'][3])) {
				$imagesub3 = date('YmdHis') . $image_data['image']['name'][3];
      	move_uploaded_file($image_data['image']['tmp_name'][3], $_SERVER['DOCUMENT_ROOT'].'/b_map/webroot/pictures/'.$imagesub3);
      	$sql = "INSERT INTO `subPicture`(`postsid`, `subPictureAddress`, `createdate`) VALUES ($post_id, '$imagesub3', now())";
      	mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      }
      if (isset($image_data['image']['name'][4]) && !empty($image_data['image']['name'][4])) {
				$imagesbu4 = date('YmdHis') . $image_data['image']['name'][4];
      	move_uploaded_file($image_data['image']['tmp_name'][4], $_SERVER['DOCUMENT_ROOT'].'/b_map/webroot/pictures/'.$imagesub4);
      	$sql = "INSERT INTO `subPicture`(`postsid`, `subPictureAddress`, `createdate`) VALUES ($post_id, '$imagesub4', now())";
      	mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      }
      if (isset($image_data['image']['name'][5]) && !empty($image_data['image']['name'][5])) {
				$imagesub5 = date('YmdHis') . $image_data['image']['name'][5];
      	move_uploaded_file($image_data['image']['tmp_name'][5], $_SERVER['DOCUMENT_ROOT'].'/b_map/webroot/pictures/'.$imagesub5);
      	$sql = "INSERT INTO `subPicture`(`postsid`, `subPictureAddress`, `createdate`) VALUES ($post_id, '$imagesub5', now())";
      	mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      }
			return ;
		}
}
?>