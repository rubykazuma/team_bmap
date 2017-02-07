<div id="contents"><!-- コンテンツはこのタグ内に記入 -->
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="well">
              <div id="spotCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#spotCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#spotCarousel" data-slide-to="1"></li>
                  <li data-target="#spotCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row-fluid">
                      ><img src="<?php
                    $i = 0;
                    foreach ($viewOptions as $key): ?>
                      <?php if ($i != 0 && $i % 4 == 0): ?>
                          </div><!-- row-fluid -->
                        </div><!-- item -->
                      <?php endif ?>
                      <?PHP if ($i % 4 == 0): ?>
                        <?PHP if ($i == 0): ?>
                          <div class="item active">
                        <?PHP else: ?>
                            <div class="item">
                        <?php endif ?>
                          <div class="row-fluid">
                      <?php endif ?>
                        <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>"
                      <?php $i++; ?>
                    <?php endforeach ?>
                    </div><!--/row-fluid-->
                  </div><!--/item-->
                  <div class="item">
                    <div class="row-fluid">
                       <?php
                    $i = 0;
                    foreach ($viewOptions as $viewOption): ?>
                      <?php if ($i != 0 && $i % 4 == 0): ?>
                          </div><!-- row-fluid -->
                        </div><!-- item -->
                      <?php endif ?>
                      <?PHP if ($i % 4 == 0): ?>
                        <?PHP if ($i == 0): ?>
                          <div class="item active">
                        <?PHP else: ?>
                            <div class="item">
                        <?php endif ?>
                          <div class="row-fluid">
                      <?php endif ?>
                        <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;" /></a></div>
                      <?php $i++; ?>
                    <?php endforeach ?>
                          </div><!-- item -->
                        </div><!-- row-fluid -->
                    </div><!--/row-fluid-->
                  </div><!--/item-->
                  <div class="item">
                    <div class="row-fluid">
                      <?php
                    $i = 0;
                    foreach ($viewOptions as $viewOption): ?>
                      <?php if ($i != 0 && $i % 4 == 0): ?>
                          </div><!-- row-fluid -->
                        </div><!-- item -->
                      <?php endif ?>
                      <?PHP if ($i % 4 == 0): ?>
                        <?PHP if ($i == 0): ?>
                          <div class="item active">
                        <?PHP else: ?>
                            <div class="item">
                        <?php endif ?>
                          <div class="row-fluid">
                      <?php endif ?>
                        <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;" /></a></div>
                      <?php $i++; ?>
                    <?php endforeach ?>
                    </div><!--/row-fluid-->
                  </div><!--/item-->
                </div><!--/carousel-inner-->
                <a class="left carousel-control" href="#spotCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#spotCarousel" data-slide="next">›</a>
              </div><!--/spotCarousel-->
            </div><!--/well-->
          </div>
        </div>
        <br>
        <div class="row">
          <div class="span12">
            <div class="well">
              <div id="gourmetCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#gourmetCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#gourmetCarousel" data-slide-to="1"></li>
                  <li data-target="#gourmetCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row-fluid">
                      <?php
                    $i = 0;
                    foreach ($viewOptions as $viewOption): ?>
                      <?php if ($i != 0 && $i % 4 == 0): ?>
                          </div><!-- row-fluid -->
                        </div><!-- item -->
                      <?php endif ?>
                      <?PHP if ($i % 4 == 0): ?>
                        <?PHP if ($i == 0): ?>
                          <div class="item active">
                        <?PHP else: ?>
                            <div class="item">
                        <?php endif ?>
                          <div class="row-fluid">
                      <?php endif ?>
                        <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;" /></a></div>
                      <?php $i++; ?>
                    <?php endforeach ?>
                    </div><!--/row-fluid-->
                  </div><!--/item-->
                  <div class="item">
                    <div class="row-fluid">
                     <?php
                    $i = 0;
                    foreach ($viewOptions as $viewOption): ?>
                      <?php if ($i != 0 && $i % 4 == 0): ?>
                          </div><!-- row-fluid -->
                        </div><!-- item -->
                      <?php endif ?>
                      <?PHP if ($i % 4 == 0): ?>
                        <?PHP if ($i == 0): ?>
                          <div class="item active">
                        <?PHP else: ?>
                            <div class="item">
                        <?php endif ?>
                          <div class="row-fluid">
                      <?php endif ?>
                        <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;" /></a></div>
                      <?php $i++; ?>
                    <?php endforeach ?>
                    </div><!--/row-fluid-->
                  </div><!--/item-->
                  <div class="item">
                    <div class="row-fluid">
                      <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                      <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                      <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                      <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                    </div><!--/row-fluid-->
                  </div><!--/item-->
                </div><!--/carousel-inner-->
                <a class="left carousel-control" href="#gourmetCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#gourmetCarousel" data-slide="next">›</a>
              </div><!--/gourmetCarousel-->
            </div><!--/well-->
          </div>
        </div>
      </div>
    </div>
