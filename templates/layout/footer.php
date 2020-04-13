<footer id="footer">
  <div class="ft-left">
    <div class="ft-info">
      <div class="ft-logo"><a href="" ><img src="<?= _upload_hinhanh_l.
      $ftlogo["photo"] ?>" alt="logo"></a></div>
      <div class="content"> <?php echo lay_text('footer'); ?> </div>
      <div class="mxh"><?= lay_mxh("mxh") ?></div>
    </div>
  </div>
  <div class="ft-right">
    <div class="ft-flex">
      <div class="ft-baiviet">
        <p class="ft-tit text-uppercase"><span>Về chúng tôi</span></p>
        <ul>
            <li><a href="gioi-thieu.html"><?= _gioithieu ?></a></li>
            <li class="<?php if($com=='can-ho') echo 'active'; ?>"><a href="can-ho.html">Căn hộ</a>
            </li>
            <li class="<?php if($com=='nha-pho') echo 'active'; ?>"><a href="nha-pho.html">Nhà phố</a>
            </li>
            <li class="<?php if($com=='dat-nen') echo 'active'; ?>"><a href="dat-nen.html">Đất nền</a>
            </li>
            <li class="<?php if($com=='tin-tuc') echo 'active'; ?>"><a href="tin-tuc.html">
              Bảng tin</a>
            <li class="<?php if($source == 'contact') echo 'active'; ?>"><a href="lien-he.html"><?= _lienhe ?>
              </a></li>
          </ul>
      </div>
      <div class="ft-baiviet">
        <p class="ft-tit text-uppercase"><span>Chính sách</span></p>
        <?= for1("news","chinh-sach","chinh-sach",".html") ?>
      </div>
      <div class="ft-baiviet">
        <p class="ft-tit text-uppercase"><span>Bảng tin bđs</span></p>
        <ul>
          <?php foreach ($tinnb as $key => $value) { ?>
            <li><a href="<?= get_url($value,"tin-tuc") ?>"><?= $value["ten"] ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <ul class="ft-thongke">
      <li>Đang Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></li>
      <li><?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></li>
    </ul>
    <p class="text">Copyright © 2020 <?= $company["ten"] ?>. Design by Nina</p>
  </div>
   <?php /*<div class="ft-top ">
    <div class="container">
      <div class="ft-flex">
        
        <div class="ft-info">
          <p class="ft-info-title text-uppercase"><?= _thongtinlienhe ?></p>
          <h4 class="ft-company"><a href=""><?= $company["ten"] ?></a></h4>
          <div class="content"> <?php echo lay_text('footer'); ?> </div>
          <div class="mxh"><?= lay_mxh("mxh") ?></div>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit text-uppercase"><span>Chính sách</span></p>
          <?= for1("news","chinh-sach","chinh-sach",".html") ?>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit text-uppercase"><span>Dịch vụ giao hàng</span></p>

          <?php foreach ($dichvu as $key => $value) { ?>
            <div class="dichvu-item text-uppercase"><a href="<?= get_url($value, "dich-vu") ?>">
                <figure><img src="<?= _upload_tintuc_l.$value["photo"] ?>" alt="<?= $value["ten"] ?>"></figure>
                <?= $value["ten"] ?>
              </a></div>
          <?php } ?>
        </div>
        <?php  if($deviceType != "phone"){ ?>
                <div class="ft-fanpage">
                  <p class="ft-tit text-uppercase"><span>Fanpage facebook</span></p>
                  <div class="fanpageplace">
                    <div class="fb-page" data-href="<?=$company['fanpage']?>" data-width="470" data-height="380" 
                      data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" 
                      data-show-posts="false">
                      <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="<?=$company['fanpage']?>">
                          <a href="<?=$company['fanpage']?>">Facebook</a>
                        </blockquote>
                      </div>
                    </div>      <!-- end fb-page  -->
                  </div>
                </div>
                
                <?php } ?> 
    </div>
  </div>
</div>*/?>
             <?php /*  
<div class="copyright">
  <div class="container">
    <div class="ft-wrap">
      <p class="text">Copyright © 2020 <?= $company["ten"] ?>. Design by Nina</p>
      <ul class="ft-thongke">
        <li>Đang Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></li>
        <li><?=_thongketuan?>: <span><?=$trongtuan;?></span></li>   
        <li><?=_thongkethang?>: <span><?=$trongthang;?></span></li> 
        <li><?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></li>
      </ul>
        <li><?=_ngayhomqua?>: <span><?=$homqua;?></span></li> 
    </div>
  </div>
</div>
*/?>
</footer>
<?php /* <div class="codebando"><?= $company["bando"] ?></div> 
 include _template."layout/dangkynhantin.php";<img src="http://placehold.it/600x520" alt="" 
 style="   -webkit-clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);
 clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);   "> 
 https://bennettfeely.com/clippy/ */?>