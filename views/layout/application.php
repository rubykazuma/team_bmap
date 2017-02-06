<?php
    $adjust_string = '';

    if (($action == 'profilechg') || ($action == 'gourmet') || ($action == 'spot') || ($action == 'edit') || ($action == 'delete') || ($action == 'mypage')){
      $adjust_string = '../';
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>B-MAP</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../<?php echo $adjust_string; ?>webroot/assets/css/bootstrap.css">
  <link rel="stylesheet" href="../<?php echo $adjust_string; ?>webroot/assets/js/bootstrap.js">
  <link rel="stylesheet" href="../<?php echo $adjust_string; ?>webroot/assets/css/base.css">
  <!-- fabcon set -->
  <link rel="icon" type="image/png" href="../<?php echo $adjust_string; ?>webroot/assets/images/favi.png" sizes="32x32">
</head>

<body>
  <!-- <div id="wrap"> -->
    <!-- ヘッダー -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><span class="strong-title">B-MAP</span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" class="new"><spn class="glyphicon glyphicon-edit"></spn></a></li>
            <li><a href="" class="user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            <li><a href="" class="logn"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="contents"><!-- コンテンツはこのタグ内に記入 -->
      <div class="container" style="margin-top:50px">
          <!-- ここに各アクション名に沿ったphpファイルを出力する -->
           <?php
              include('views/'.$resource.'/'. $action .'.php');
          ?>
      </div>
    </div>

    <!-- フッター -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
        <footer id="footer">copyright © B-MAP All Rights Reserved.</footer>
      </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../<?php echo $adjust_string; ?>webroot/assets/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../<?php echo $adjust_string; ?>/webroot/assets/js/bootstrap.min.js"></script>
  </body>
</html>