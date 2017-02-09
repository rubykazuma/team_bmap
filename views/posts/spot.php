    <!-- title -->
      <div class="form-group">
        <div class="col-md-12">
          <h3>
            <?php foreach ($viewOptions as $key): ?>
              <?php echo $key['title']; ?>
              <?php break; ?>
            <?php endforeach ?>
          </h3>
        </div>
      </div>
      <br>
      <br>
      <div class="container">
        <div id="main_area">
        <!-- Slider -->
          <div class="row">
            <div class="col-xs-12">
              <!-- Top part of the slider -->
              <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <div class="carousel slide" id="Carousel">
                <!-- Carousel items -->
                  <div class="carousel-inner">
                  <?php $i = 0;
                    foreach ($viewOptions as $key): ?>
                      <?php if ($key['subPictureAddress'] != NULL): ?>
                        <?php if ($i == 0): ?>
                          <div class="active item" data-slide-number="<?php echo($i); ?>">
                            <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>">
                          </div>
                          <?php $i++; ?>
                          <div class="item" data-slide-number="<?php echo($i); ?>">
                            <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>">
                          </div>
                        <?php else: ?>
                          <div class="item" data-slide-number="<?php echo($i); ?>">
                            <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>">
                          </div>
                        <?php endif ?>
                        <?php $i++; ?>
                      <?php else: ?>
                        <div class="active item" data-slide-number="<?php echo($i); ?>">
                          <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>">
                        </div>
                      <?php endif ?>
                  <?php endforeach ?>
                  </div><!-- Carousel nav -->
                </div>
                </div>
                <br>
                <br>
              </div>
            </div>
            <div class="row">
            <!-- Textarea -->
              <div class="form-group">
                <!-- <label class="col-md-4 control-label"></label> -->
                <div class="col-md-offset-3">
                  <h4>
                    <?php foreach ($viewOptions as $key): ?>
                      <!-- nl2br関数で改行を有効化 -->
                      <?php echo nl2br($key['contents']); ?>
                      <?php break; ?>
                    <?php endforeach ?>
                  </h4>
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Slider-->
        <div class="row" id="slider-thumbs">
          <ul class="hide-bullets"></ul>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div id="Carousel" class="carousel slide">
                  <!-- indicator Off -->
                    <!--  <ol class="carousel-indicators">
                      <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#Carousel" data-slide-to="1"></li>
                      <li data-target="#Carousel" data-slide-to="2"></li>
                    </ol> -->
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="row">
                          <?php $i = 0;
                            foreach ($viewOptions as $key): ?>
                              <?php if(count($viewOptions) == 5): ?>
                                <?php if ($i == 0): ?>
                                  <div class="col-md-2">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                  <?php $i++; ?>
                                  <div class="col-md-2">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php else: ?>
                                  <div class="col-md-2">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php endif ?>
                                <?php $i++; ?>
                            <?php elseif(count($viewOptions) == 4): ?>
                                <?php if ($i == 0): ?>
                                  <div class="col-md-2">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                  <?php $i++; ?>
                                  <div class="col-md-2">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php else: ?>
                                  <div class="col-md-2">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php endif ?>
                                <?php $i++; ?>
                            <?php elseif(count($viewOptions) == 3): ?>
                                <?php if ($i == 0): ?>
                                  <div class="col-md-3">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                  <?php $i++; ?>
                                  <div class="col-md-3">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php else: ?>
                                  <div class="col-md-3">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php endif ?>
                                <?php $i++; ?>
                            <?php elseif(count($viewOptions) == 2): ?>
                                <?php if ($i == 0): ?>
                                  <div class="col-md-3">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                  <?php $i++; ?>
                                  <div class="col-md-3">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php else: ?>
                                  <div class="col-md-3">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php endif ?>
                                <?php $i++; ?>
                            <?php elseif(count($viewOptions) == 1): ?>
                                <?php if ($key['subPictureAddress'] != NULL): ?>
                                  <div class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                  <?php $i++; ?>
                                  <div class="col-md-6">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['subPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                <?php else: ?>
                                <!-- メイン画像のみの場合は表示させない -->
                                <!--
                                   <div class="col-md-12">
                                    <a class="thumbnail" id="carousel-selector-<?php echo($i); ?>">
                                    <img src="../../webroot/pictures/<?php echo $key['mainPictureAddress']; ?>" alt="Image" style="max-width:100%;"></a>
                                  </div>
                                -->
                                <?php endif ?>
                            <?php endif ?>
                          <?php endforeach ?>
                        </div><!--.row-->
                      </div><!--.item-->
                      <!--  <a data-slide="prev" href="#Carousel" class="left carousel-control">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- カルーセル -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/boostrap-combined.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $('#Carousel').carousel({
          interval: 5000
        });
        $('#carousel-text').html($('#slide-content-0').html());
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
          var id = this.id.substr(this.id.lastIndexOf("-") + 1);
          var id = parseInt(id);
          $('#Carousel').carousel(id);
        });
        // // When the carousel slides, auto update the text
        // $('#Carousel').on('slid.bs.carousel', function (e) {
        //          var id = $('.item.active').data('slide-number');
        //         $('#carousel-text').html($('#slide-content-'+id).html());
        // });
    });
    </script>