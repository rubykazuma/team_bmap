<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-3">
							<h3 class="userName">
								<!-- ログイン時にニックネームをセッション変数に格納する(未完成) -->
								<?php echo $_SESSION['nickname']; ?>
							</h3>
							<div class="editProfile">
								<a href="/b_map/users/profilechg/<?php echo $id; ?>" class="btn btn-default">Edit Profile</a>
							</div>
						</div>
						<div class="col-sm-9">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#spot" data-toggle="tab">Spot</a>
								</li>
								<li>
									<a href="#gourmet" data-toggle="tab">Gourmet</a>
								</li>
							</ul>
							　<br>
							<div class="tab-content">
								<div class="tab-pane active" id="spot">
									<?php foreach ($posts_data as $post_data) { ?>
										<?php if ($post_data['genre'] == '0') { ?>
											<div class="col-sm-4">
												<a href="/b_map/posts/edit/<?php echo $post_data['id'] ?>" title="<?php echo $post_data['title'] ?>" class="thumbnail"><img src="../../webroot/pictures/<?php echo $post_data['mainPictureAddress'] ?>" /></a>
											</div>
										<?php } ?>
									<?php } ?>
								</div>
								<div class="tab-pane" id="gourmet">
									<?php foreach ($posts_data as $post_data) { ?>
										<?php if ($post_data['genre'] == '1') { ?>
											<div class="col-sm-4">
												<a href="/b_map/posts/edit/<?php echo $post_data['id'] ?>" title="<?php echo $post_data['title'] ?>" class="thumbnail"><img src="../../webroot/pictures/<?php echo $post_data['mainPictureAddress'] ?>" /></a>
											</div>
										<?php } ?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
		</div>
	</div>
</div>
