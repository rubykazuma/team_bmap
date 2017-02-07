	  <div class="container-fluid">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<div class="register-error">
						<?php
							if(isset($_SESSION['error']) && ($_SESSION['error'] == 'nickname' || $_SESSION['error'] == 'both')){
								echo 'Please enter other Use Name.'.'<br>';
							}
							if(isset($_SESSION['error']) && ($_SESSION['error'] == 'email' || $_SESSION['error'] == 'both')){
								echo 'Please enter other Email.';
							}
							$_SESSION['error'] = null;
						?>
					</div>
				</div>
					<form method="post" action="/b_map/users/create" class="form-horizontal">
					<!-- ユーザーネーム -->
						<div class="form-group">
							<label class="col-sm-4 control-label">User Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control register-form" name="nickname" placeholder="User Name" maxlength="20" required/>
							</div>
						</div>
						<!-- メールアドレス -->
						<div class="form-group">
							<label class="col-sm-4 control-label">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control register-form" name="email" placeholder="xxxxx@xxx.com" required/>
							</div>
						</div>
						<!-- パスワード -->
						<div class="form-group">
							<label class="col-sm-4 control-label">Password</label>
							<div class="col-sm-8">
								<input type="password" class="form-control register-form" name="password" placeholder="xxxxxx" required/>
							</div>
						</div>
						<!-- 登録ボタン -->
						<div class="form-group">
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<button type="submit" class="btn form-btn">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>