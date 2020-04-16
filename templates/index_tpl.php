<div class="about-bg">
  <div class="container">
    <div class="about-flex">
      
      <div class="special-title text-uppercase"><?= $company["ten"] ?></div>
      <figure>
        <img src="<?= _upload_hinhanh_l.$gioithieu["thumb"] ?>" alt="<?= _gioithieu ?>" />
        <figcaption>
          <p><strong><?= $gioithieu["link"] ?></strong></p>
          <p><?= $gioithieu["chucvu"] ?></p>
        </figcaption>
      </figure>
      <div class="about-info">
        <div class="about-info__title"><?= $gioithieu["ten"] ?></div>
        <div class="about-info__text content"><?= nl2br(catchuoi($gioithieu["mota2"],850)) ?></div>
        <div class="about-info__footer">
          <a href="gioi-thieu.html" class="chitiet text-capitalize"><img src="images/chitiet.png" alt="Chi tiết">Chi tiết</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="dm-cap-bg">
  <div class="dm-cap-main">
    <?php foreach ($product_danhmucnb as $key => $value) {
      $link1 = $value["type"]."/".$value["tenkhongdau"]."-".$value["id"];
      $img = _upload_sanpham_l.$value["thumb"];
     ?>
    <div class="dm-cap-item text-center">
      <a href="<?= $link1 ?>">
        <figure><img data-lazy="<?= $img ?>" src="images/1x1.png" alt="<?= $value["ten"] ?>"></figure>
        <div class="info">
          <div class="info-head">
            <h2 class="info-head__title info-head__title--big text-uppercase"><?= $value["ten"] ?></h2>
            <p class="info-head__title info-head__title--small text-capitalize"><?= $value["ten2"] ?></p>
            <div class="info-body">
              <?= catchuoi($value["mota"],300) ?>
            </div>
          </div>
          <div class="info-foot">
            <span class="chitiet text-capitalize"><img src="images/chitiet.png" alt="Chi tiết">Chi tiết</span>
          </div>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
</div>
<div class="canho-noibat">
  <div class="container">
    <div class="idx-tit text-center text-uppercase">
      <h4><span>DỰ ÁN CĂN HỘ &amp; NHÀ PHỐ</span></h4>
    </div>
    <div class="product-grid">
      <?php foreach($spnoibat as $key=>$value) { 
          showProduct($value);
       } ?>
    </div>
  </div>
</div>

<div class="duan-datnen lazy" data-bg="url(<?= _upload_hinhanh_l.$bgdatnen["photo"] ?>)">
  <div class="container">
    <div class="special-title text-uppercase"><?= $company["ten"] ?></div>
    <div class="idx-tit text-center text-uppercase">
      <h4><span>Dự án đất nền</span></h4>
    </div>
    <div class="duan-datnen-main">
      <?php foreach ($datnen as $key=>$value) { 
        $link = get_url($value, "dat-nen");
      ?>
      <div class="duan-datnen-item">
        <article>
          <figure><img data-lazy="<?= _upload_sanpham_l.$value["thumb"] ?>" src="images/1x1.png"
           alt="<?= $value["ten"] ?>"></figure>
          <section>
            <h3><a href="<?= $link ?>"><?= $value["ten"] ?></a></h3>
            <div class="duan-datnen-line">
              <p><i class="fas fa-map-marker-alt"></i> <?= $value["diachi"] ?></p>
            </div>
            <div class="duan-datnen-line">
              <p><i class="fas fa-building"></i> <?= $value["dientich"] ?></p>
              <p><i class="fas fa-tag"></i> Giá: <span><?= $value["giabds"] ?></span></p>
            </div>
            <div class="duan-datnen-text">
              <?= $value["mota"] ?>
            </div>
            <div class="duan-datnen__foot">
              <a href="<?= $link ?>" class="chitiet text-capitalize"><img src="images/chitiet.png" alt="Chi tiết">Chi tiết</a>
            </div>
          </section>
        </article>
      </div>
    <?php } ?>
    </div>
  </div>
</div>

<div class="camnhan-khachhang">
  <div class="container">
    <div class="idx-tit text-center text-uppercase">
      <h4><span>Cảm nhận khách hàng</span></h4>
    </div>
    <div class="camnhan-main">
      <?php foreach($ykien as $key => $value){ ?>
      <div class="camnhan-item">
        <article>
          <div class="camnhan-body">
            <p>
              <?= $value["mota"] ?>
            </p>
          </div>
          <div class="camnhan-head">
            <figure><img data-lazy="<?= _upload_tintuc_l.$value["thumb"] ?>" src="images/1x1.png" alt="<?= $value["ten"] ?>"></figure>
            <div class="camnhan-head-box">
              <p><strong><?= $value["ten"] ?></strong></p>
              <p><?= $value["chucvu"] ?></p>
            </div>
          </div>
        </article>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
