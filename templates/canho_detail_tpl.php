<?php 
$thumbphoto = '';
$thumbhinhcon = '';
$img_row_detail = _upload_sanpham_l.$row_detail["thumb"];
?>
<div id="bs-carousel" class="mybs-carousel carousel slide" data-ride="carousel">

  
  <div style="position: relative;">
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= $img_row_detail ?>" alt="<?= $row_detail["ten"] ?>">
    </div>
    <?php foreach ($hinhthem as $k_hinh => $v_hinh) { 
      $img_hinhthem = _upload_hinhthem_l.$v_hinh["thumb"];
      ?>
    <div class="carousel-item">
      <img src="<?= $img_hinhthem ?>" alt="<?= $row_detail["ten"] ?>">
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
<div class="canho-other-info mb-3">
  <div class="canho-other-info-line">
    <p><i class="fas fa-map-marker-alt"></i> <?= $row_detail["diachi"] ?></p>
  </div>
  <div class="canho-other-info-line">
    <p><i class="fas fa-building"></i> <?= $row_detail["dientich"] ?></p>
    <p><i class="fas fa-bed"></i> <?= $row_detail["phongngu"] ?></p>
    <p><i class="fas fa-bath"></i> <?= $row_detail["phongtam"] ?></p>
  </div>
  <div class="canho-other-info-line">
    <p><i class="fas fa-tag"></i> Giá: <span><?= $row_detail["giabds"] ?></span></p>
  </div>
</div>
<div class="content">
  <?= $row_detail["noidung"] ?>
</div>
<?php if(count($product)>0) { ?>
  <div class="tieude_giua"><div><?=$title_other?></div></div>
  <div class="product-grid">
    <?php foreach ($product as $k => $v) { 
      showProduct($v);
    } ?>

  </div><!---END .wap_item-->
  <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
<?php } ?>