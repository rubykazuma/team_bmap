      <div class="container">
        <!-- world map -->
        <div class="row">
          <div class="visible-lg visible-md">
            <ul id="imagemap">
              <li id="north_amerika"><a href="/b_map/posts/choose"></a></li>
              <li id="south_america"><a href="kanto/tokyo.html"></a></li>
              <li id="eurasia"><a href="kansai/osaka.html"></a></li>
              <li id="asia"><a href="tohoku/miyagi</l"></a></li>
              <li id="africa"><a href="toukai/shizuoka.html"></a></li>
              <li id="oceania"><a href="hokuriku/nagano.html"></a></li>
            </ul>
          </div>
          <!-- ●地図下のリスト -->
          <ul id="area">
            <li><a href="hokkaido/hokkaido.html">北アメリカ</a></li>
            <li><a href="kanto/tokyo.html">南アメリカ</a></li>
            <li><a href="kansai/osaka.html">ユーラシア</a></li>
            <li><a href="tohoku/miyagi.html">アジア</a></li>
            <li><a href="toukai/shizuoka.html">アフリカ</a></li>
            <li><a href="hokuriku/nagano.html">オセアニア</a></li>
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
