<?php /* <div class="tieude_giua"><div><?=$title_cat?></div></div> */?>
<div class="box_container">
  <?php if(!empty($title_bar["noidung"])){ ?>
  <div class="content">
    <?= $title_bar["noidung"] ?>
  </div>
  <?php } ?>
<div class="product-grid" id="content_sp_return">
    <?php foreach ($product as $k => $v) { 
            showProduct($v);
    } ?>
</div>
<?php /* <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div> */?>
</div>

