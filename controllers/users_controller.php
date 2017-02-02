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

      function delete($id){
        $user = new User();
        $viewOptinons = $user->profilechg($id);
        $return = $blog->delete($id);
        header('Location: /b_map/posts/home');
      }

   }
?>