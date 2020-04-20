<?php 
$thumbphoto = '';
$thumbhinhcon = '';
$img_row_detail = _upload_sanpham_l.$row_detail["thumb"];
?>
<h3 class="tencanho"><?= $row_detail["ten"] ?></h3>
<div id="bs-carousel" class="mybs-carousel carousel slide" data-ride="carousel">

  
  <div style="position: relative;">
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a data-fancybox="gallery27" data-caption="<?= $row_detail["ten"] ?>" href="
        <?= _upload_sanpham_l.$row_detail["photo"] ?>">
        <img src="<?= $img_row_detail ?>" alt="<?= $row_detail["ten"] ?>"></a>
    </div>
    <?php foreach ($hinhthem as $k_hinh => $v_hinh) { 
      $img_hinhthem = _upload_hinhthem_l.$v_hinh["thumb"];
      ?>
    <div class="carousel-item">
      <a data-fancybox="gallery27" data-caption="<?= $row_detail["ten"] ?>" href="
        <?= _upload_hinhthem_l.$v_hinh["photo"] ?>">
      <img src="<?= $img_hinhthem ?>" alt="<?= $row_detail["ten"] ?>"></a>
    </div>
    <?php } ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#bs-carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#bs-carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  
    
  </div>

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active">
      <figure><img src="<?= $img_row_detail ?>" alt="<?= $row_detail["ten"] ?>"></figure>
    </li>
    <?php foreach ($hinhthem as $k_hinh => $v_hinh) { 
      $img_hinhthem = _upload_hinhthem_l.$v_hinh["thumb"];
      ?>
    <li data-target="#bs-carousel" data-slide-to="<?= $k_hinh+1 ?>">
      <figure><img src="<?= $img_hinhthem ?>" alt="<?= $row_detail["ten"] ?>"></figure>
    </li>
    <?php } ?>
  </ul>
</div>
<div class="canho-thongtin">
  <div class="d-flex">
    <p><strong>Tiêu đề: </strong><?= $row_detail["ten"] ?></p>
    <p><strong>Địa chỉ: </strong><?= $row_detail["diachi"] ?></p>
  </div>
  <?php if($row_detail["type"] != "dat-nen"){ ?>
  <div class="d-flex">
    <p><strong>Phòng ngủ: </strong><?= $row_detail["phongngu"] ?></p>
    <p><strong>Toilet: </strong><?= $row_detail["phongtam"] ?></p>
  </div>
  <?php } ?>
  <div class="d-flex">
    <p><strong>Diện tích: </strong><?= $row_detail["dientich"] ?></p>
    <p><strong>Giá: </strong><?= $row_detail["giabds"] ?></p>
  </div>
  <div class="d-flex">
    <p><strong>Tình trạng: </strong><?= $row_detail["tinhtrang"] ?></p>
  </div>
</div>
<div class="content">
  <?= $row_detail["noidung"] ?>
</div>
<div class="row canho-map-video">
  <?php if(!empty($row_detail["toado"])){ ?>
  <div class="col-md-6">
    <div class="bando-x">
      <?= $row_detail["toado"] ?>
    </div>
  </div>
  <?php } ?>
  <?php if(!empty($row_detail["link"])){ ?>
  <div class="col-md-6">
    <div id="video-idx"></div>
  </div>
  <?php } ?>
</div>
<div class="li"><?php include _template."layout/share.php";?></div>
<?php if(count($product)>0) { ?>
  <div class="tieude_giua"><div><?=$title_other?></div></div>
  <div class="product-grid">
    <?php foreach ($product as $k => $v) { 
      showProduct($v);
    } ?>

  </div><!---END .wap_item-->
  <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
<?php } ?>