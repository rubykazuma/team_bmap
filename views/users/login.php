    <div id="contents"><!-- コンテンツはこのタグ内に記入 -->
    <br>
    <br>
    <br>
    <br>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <?php if ($errorMessage != null): ?>
          <?php echo $errorMessage;?>
        <?php endif ?>
          <form method="post" action="" class="form-horizontal">

          <!-- メールアドレス -->
          <div class="form-group">
           <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
            <input type="email" name="email" class="form-control" placeholder="xxxxx@xxx.com">
            </div>
          </div>
          <!-- パスワード -->
          <div class="form-group">
            <label class="col-sm-4 control-label">Password</label>
            <div class="col-sm-8">
              <input type="password" name="password" class="form-control" placeholder="xxxxxx">
            </div>
          </div>
          <!-- 自動ログインのチェックボックス -->
          <div class="form-group">
            <label class="col-sm-4 control-label">Auto Login</label>
            <div class="col-sm-8">
              <input type="checkbox" id="save" name="save" value="on">
            </div>
          </div> 
          <!-- ログインボタン -->
            <div class="form-group">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                <button type="submit" class="btn form-btn">Login</button>
              </div>
            </div> 
          </form>
        </div>
      </div>
    </div>
    </div>