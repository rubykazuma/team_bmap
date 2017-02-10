      <div class="container">
        <!-- world map -->
        <div class="row">
          <div class="visible-lg visible-md">
            <ul id="imagemap">
              <li id="north_amerika"><a href="/b_map/posts/choose/0"></a></li>
              <li id="south_america"><a href="/b_map/posts/choose/1"></a></li>
              <li id="eurasia"><a href="/b_map/posts/choose/2"></a></li>
              <li id="asia"><a href="/b_map/posts/choose/3"></a></li>
              <li id="africa"><a href="/b_map/posts/choose/4"></a></li>
              <li id="oceania"><a href="/b_map/posts/choose/5"></a></li>
            </ul>
          </div>
          <!-- ●地図下のリスト -->
          <ul id="area">
            <li><h5><a href="/b_map/posts/choose/0">North Amerika</h5></a></li>
            <li><h5><a href="/b_map/posts/choose/1">South America</a></h5></li>
            <li><h5><a href="/b_map/posts/choose/2">Eurasia</a></h5></li>
            <li><h5><a href="/b_map/posts/choose/3">Asia</a></h5></li>
            <li><h5><a href="/b_map/posts/choose/4">Africa</a></h5></li>
            <li><h5><a href="/b_map/posts/choose/5">Oceania</a></h5></li>
          </ul>
        </div><!-- world map -->
        <br>
        <div class="row">
          <div class="span12">
            <div class="well">
              <div id="spotCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <!-- 配列の数をカウントして、4で割って小数点第一位を繰り上げ -->
                  <!-- 繰り上げ数分 繰り返し処理 -->
                  <?php $cnt = count($viewOptions); ?>
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
                <!-- for文の方がすっきりしているが$viewOptionsが
                     for文内で参照できなかったので、foreachで実装
                     1カルーセルで4写真表示するため、4除算処理を
                     実施している。 
                     データはinitialSetしているので0件処理は
                     考慮対象外-->
                <div class="carousel-inner">
                  <?php
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
                        <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;" /></a></div>
                      <?php $i++; ?>
                    <?php endforeach ?>
                          </div><!-- item -->
                        </div><!-- row-fluid -->
<!--                   <div class="item">
                    <div class="row-fluid">
                      <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/20170101091010sample.jpg" alt="Image" style="max-width:100%;" /></a></div>
                      <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/20170105091010sample.jpg" alt="Image" style="max-width:100%;" /></a></div>
                      <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/20170110091010sample.jpg" alt="Image" style="max-width:100%;" /></a></div>
                      <div class="span3"><a href="#x" class="thumbnail"><img src="../webroot/pictures/20170115091010sample.jpg" alt="Image" style="max-width:100%;" /></a></div>
                    </div>
                  </div>  -->
                </div><!--/carousel-inner-->
                <a class="left carousel-control" href="#spotCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#spotCarousel" data-slide="next">›</a>
              </div><!--/spotCarousel-->
            </div><!--/well-->
          </div>
        </div>
      </div>
