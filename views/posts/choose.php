<!-- コンテンツはこのタグ内に記入 -->
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="well">
              <div id="spotCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <?php $cnt = count($spot); ?>
                  <?php $cnt = ceil($cnt/4); ?>
                  <?php for ($i=0; $i < $cnt; $i++) :?>
                    <!-- 1番目のインジケータは● -->
                    <?php if ($i == 0): ?>
                      <li data-target="#spotCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
                    <?php else: ?>
                    <!-- 2番目以降のインジケータは〇 -->
                      <li data-target="#spotCarousel" data-slide-to="<?php echo $i; ?>" ></li>
                    <?php endif ?>
                  <?php endfor ?>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                      <?php
                    $i = 0;
                    foreach ($spot as $key): ?>
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
                        <div class="span3"><a href="/b_map/posts/spot/<?php echo $key['id']; ?>" class="thumbnail"><img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;" /></a></div>
                      <?php $i++; ?>
                    <?php endforeach ?>
                    </div>
                    </div>
                </div><!--/carousel-inner-->
                <a class="left carousel-control" href="#spotCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#spotCarousel" data-slide="next">›</a>
              </div><!--/spotCarousel-->
            </div><!--/well-->
          </div>
        </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
          <div class="span12">
            <div class="well">
              <div id="gourmetCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <?php $cnt = count($gourmet); ?>
                  <?php $cnt = ceil($cnt/4); ?>
                  <?php for ($i=0; $i < $cnt; $i++) :?>
                    <!-- 1番目のインジケータは● -->
                    <?php if ($i == 0): ?>
                      <li data-target="#spotCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
                    <?php else: ?>
                    <!-- 2番目以降のインジケータは〇 -->
                      <li data-target="#spotCarousel" data-slide-to="<?php echo $i; ?>" ></li>
                    <?php endif ?>
                  <?php endfor ?>
               </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                      <?php
                    $i = 0;
                    foreach ($gourmet as $key): ?>
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
                        <div class="span3"><a href="/b_map/posts/gourmet/<?php echo $key['id']; ?>" class="thumbnail"><img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;" /></a></div>
                      <?php $i++; ?>
                    <?php endforeach ?>
                    </div>
                    </div>
                </div><!--/carousel-inner-->
                <a class="left carousel-control" href="#gourmetCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#gourmetCarousel" data-slide="next">›</a>
              </div><!--/gourmetCarousel-->
            </div><!--/well-->
          </div>
        </div>
      </div>
