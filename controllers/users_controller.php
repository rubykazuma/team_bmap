<?php

  //モデルの呼び出し
  require('models/user.php');

  // コントローラのクラスをインスタンス化
    $controller = new UsersController();
    //$controller->index();
    //アクション名によって、呼び出すメソッドを変える
    switch ($action) {
      case 'register':
        $controller->register();
        break;
      case 'create':
        $controller->create($_POST);
        break;
      case 'login':
        $controller->login();
        break;
      case 'logout':
        $controller->logout();
        break;
      case 'profilechg':
        $controller->profilechg($id);
        break;
      case 'profileud':
        $controller->profileud($id,$_POST);
        break;
      case 'userdel':
        $controller->userdel($id);
        break;
      case 'update':
        $controller->update($_POST,$id);
        break;
      default:
        # code...
        break;
    }

  class UsersController {
      function register() {
          $resource = 'users';
          $action = 'register';
          require('views/layout/application.php');
      }

      function create($post_data){

      }

      function login() {

      // 入力チェックのプログラムを書く
      if (!empty($_POST)) {
        var_dump("po");
      // $email = htmlspecialchars($_POST['email']);
      // ログインの処理
      if (isset($_POST['email']) && $_POST['password'] != '') {
        $sql=sprintf('SELECT * FROM members WHERE email = "%s" AND password = "%s"',
          mysqli_real_escape_string($db, $_POST['email']),
          mysqli_real_escape_string($db, sha1($_POST['password']))
          );
        $record = mysqli_query($db, $sql) or die (mysqli_error($db));   

    } 
          
      }
      $resource = 'users';
      $action = 'login';
      require('views/layout/application.php');
      }
      function logout(){

      }

      function profilechg($id){
        // モデルを呼び出す
        $user = new User();
        // モデルのprofilechgメソッドを実行する
        $viewOptinons = $user->profilechg($id);
        $resource = 'users';
        $action = 'profilechg';
        require('views/layout/application.php');
      }

      function profileud($id,$user_data){
        $user = new User();
        $return = $user->profileud($id,$user_data);
        header('Location: /b_map/posts/home');
      }

      function userdel($id){
        $user = new User();
        $return = $user->userdel($id);
        header('Location: /b_map/posts/home');
      }

   
 }
?>