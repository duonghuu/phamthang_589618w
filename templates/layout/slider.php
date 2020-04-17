      <?php 
      if($source == "index"){
        $slider = get_result("select ten$lang as ten,mota$lang as mota,link,photo,thumb from #_slider 
          where hienthi=1 and type='slider' order by stt");
         ?>
         <div id="slideshow">
           <div class="slideshow-slider-main">
             <?php 
             foreach ($slider as $key => $v) {
              ?>
              <div class="slideshow-slider-item">
               <section>
                <a href="<?= $v["link"] ?>" class="slider-link"><picture>
                  <source media="(min-width: 1024px)" srcset="thumb/1366x660/1/<?= _upload_hinhanh_l.$v["thumb"] ?>" />
                    <source media="(min-width: 550px)" srcset="thumb/768x270/1/<?= _upload_hinhanh_l.$v["photo"] ?>" />
                      <img src="thumb/425x150/1/<?= _upload_hinhanh_l.$v["photo"] ?>" 
                      alt="<?= $v["ten"] ?>" />
                    </picture></a>
                    <div class="slider-text-bg" data-animation="fadeInUp" data-delay="0.5s">
                      <div class="slider-text" >
                        <div class="slider-text__ten"><?= $v["ten"] ?></div>
                        <div class="slider-text__mota"><?= $v["mota"] ?></div>
                        <div class="slider-text__button slider-button">
                          <a href="<?= $v["link"] ?>"><img src="images/chitiet.png" alt="Chi tiết"> Chi Tiết</a>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              <?php } ?>
            </div>
          </div>
          <?php }else{ 
  // $bntype = $type;
  // if($type=="about") $bntype = 'gioi-thieu';
  // if($type=="thong-tin") $bntype = 'tin-tuc';
  // $bntrong=get_fetch("select ten$lang as ten,tenkhongdau,photo,thumb from #_news where type='bntrong' and ten='".$bntype."'");
  // <div class="inner-banner" style="background-image: url(images/banner.jpg)">
  // </div>
          }
          ?>
