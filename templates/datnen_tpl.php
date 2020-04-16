<section class="datnen">
  <?php foreach ($product as $key => $value) { 
      $link = get_url($value, "dat-nen");
      $cls = ($key % 2 == 0)?'even':'odd';
      $img = _upload_sanpham_l.$value["thumb"];
    ?>
    
    <div class="datnen-item <?= $cls ?>">
      <a href="<?= $link ?>" class="imgsp"><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></a>
      <div class="info">
        <h3><a href="<?= $link ?>"><?= $value["ten"] ?></a></h3>
        <p><strong><?= _diachi ?>: </strong><?= $value["diachi"] ?></p>
        <p><strong><?= _gia ?>: </strong><?= $value["giabds"] ?></p>
        <div class="content"><?= $value["mota"] ?></div>
        <a href="<?= $link ?>" class="xemthem mt-3"><?= _xemthem ?></a>
      </div>
    </div>
  <?php } ?>
</section>