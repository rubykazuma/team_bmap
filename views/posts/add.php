		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
	  			<form method="post" action="/b_map/posts/create" class="form-horizontal" enctype="multipart/form-data">

						<!-- タイトル -->
						<div class="form-group">
						  <label class="col-sm-3 control-label">Title</label>
						  <div class="col-sm-7">
						  <input id="title" name="title" type="text" placeholder="Title" class="form-control post-form" maxlength="20" required>
						  </div>
						</div>

						<!-- エリア -->
						<div class="form-group">
						  <label class="col-sm-3 control-label">Area</label>
						  <div class="col-sm-7">
						    <select id="post-area" name="area" class="form-control">
						      <option value="0">Asia</option>
						      <option value="1">Europe</option>
						      <option value="2">North America</option>
						      <option value="3">South America</option>
						      <option value="4">Africa</option>
						      <option value="5">Oceania</option>
						    </select>
						  </div>
						</div>

						<!-- ジャンル -->
						<div class="form-group">
						  <label class="col-sm-3 control-label">Genre</label>
						  <div class="col-sm-7">
						    <select id="post-genre" name="genre" class="form-control">
						      <option value="0">Spot</option>
						      <option value="1">Gourmet</option>
						    </select>
						  </div>
						</div>

						<!-- コンテンツ -->
						<div class="form-group">
						  <label class="col-sm-3 control-label" for="contents">Contents</label>
						  <div class="col-sm-7">
						    <textarea class="form-control post-form" id="contents" name="contents" placeholder="detail about post"></textarea>
						  </div>
						</div>

						<!-- メイン画像 -->
						<div class="form-group">
						  <label class="col-sm-3 control-label">Main Image</label>
						  <div class="col-sm-7">
						    <!-- <label class="select-image" for="file_photo">
									Select
									<input type="file" id="file_photo" name="image[]" class="main-image" style="display:none;" required>
								</label> -->
								<input type="file" name="image[]" class="" style="" required/>
						  </div>
						</div>

						<!-- サブ画像 -->
						<div class="form-group">
						  <label class="col-sm-3 control-label">Sub Image</label>
						  <div class="col-sm-7">
						    <!-- <label class="select-image" for="file_photo">
									Select
									<input type="file" name="image[]" class="sub-image" style="display:none;">
								</label>
						    <label class="select-image" for="file_photo">
									Select
									<input type="file" name="image[]" class="sub-image" style="display:none;">
								</label>
						    <label class="select-image" for="file_photo">
									Select
									<input type="file" name="image[]" class="sub-image" style="display:none;">
								</label>
						    <label class="select-image" for="file_photo">
									Select
									<input type="file" name="image[]" class="sub-image" style="display:none;">
								</label>
						    <label class="select-image" for="file_photo">
									Select
									<input type="file" name="image[]" class="sub-image" style="display:none;">
								</label> -->
								<input type="file" name="image[]" class="" style="" /><br>
								<input type="file" name="image[]" class="" style="" /><br>
								<input type="file" name="image[]" class="" style="" /><br>
								<input type="file" name="image[]" class="" style="" /><br>
								<input type="file" name="image[]" class="" style="" /><br>
						  </div>
						</div>

						<!-- 投稿ボタン -->
						<div class="form-group">
						  <label class="col-sm-3 control-label"></label>
						  <div class="col-sm-7">
						    <button id="create" name="create" class="btn form-btn">Submit</button>
						  </div>
						</div>

					</form>
				</div>
			</div>
		</div>