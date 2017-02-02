<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <form method="post" action="/b_map/users/profileud/<?php echo $viewOptinons['userid']; ?>" class="form-horizontal" role="form">
        <!-- ユーザーネーム -->
        <div class="form-group">
          <label class="col-sm-4 control-label">User Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control edit-form" name="nickname" value="<?php echo $viewOptinons['nickname']; ?>" maxlength="20" required/>
          </div>
        </div>
        <!-- メールアドレス -->
        <div class="form-group">
          <label class="col-sm-4 control-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control edit-form" name="email" value="<?php echo $viewOptinons['email']; ?>" required/>
          </div>
        </div>
        <!-- パスワード -->
        <div class="form-group">
          <label class="col-sm-4 control-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control edit-form" name="password" value="<?php echo $viewOptinons['password']; ?>" required/>
          </div>
        </div>
        <!-- 編集、削除ボタン -->
        <div class="form-group">
          <div class="col-sm-4"></div>
          <div class="col-sm-8">
            <button type="submit" class="btn form-btn">Edit</button>
            <a href="" class="btn form-btn">Delete</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>