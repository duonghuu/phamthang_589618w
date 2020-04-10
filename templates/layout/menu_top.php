<div class="nav-bg">
    <div class="container">
    <div class="main-nav">
      <a href="" class="logo" ><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
      <ul class="main-nav-left">
        <?php //include _template."layout/menu_content.php";?>
        <li class="<?php if($source=='index') echo 'active'; ?>"><a href="">
          <img src="images/homeicon.png" alt="home">
        </a></li>
        <li><a href="gioi-thieu.html"><?= _gioithieu ?></a></li>
        <li class="<?php if($com=='can-ho') echo 'active'; ?>"><a href="can-ho.html">Căn hộ</a>
          <?= for2cap('product_danhmuc','product_list','can-ho','can-ho','','/')?>
        </li>
        <li class="<?php if($com=='nha-pho') echo 'active'; ?>"><a href="nha-pho.html">Nhà phố</a>
          <?= for2cap('product_danhmuc','product_list','nha-pho','nha-pho','','/')?>
        </li>
      </ul>
      <ul class="main-nav-right">
        <li class="<?php if($com=='dat-nen') echo 'active'; ?>"><a href="dat-nen.html">Đất nền</a>
          <?= for1('product_danhmuc','dat-nen','dat-nen','')?>
        </li>
        <li class="<?php if($com=='tin-tuc') echo 'active'; ?>"><a href="tin-tuc.html">
          Bảng tin</a></li> 
        <li class="<?php if($source == 'contact') echo 'active'; ?>"><a href="lien-he.html"><?= _lienhe ?>
          </a></li>
      </ul>
      <button class="openBtn timkiem_icon" ><i class="fas fa-search"></i></button>
      <div id="search">
        <div class="my-search">
          <input type="text" class="form-control keyword" required="true" 
          onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." 
          onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
          onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
          <span onclick="onSearch($(this));return false;" class="btn_search">
            <i class="fas fa-search"></i></span>
          </div>      <!-- end my-search  -->
          </div><!-- end search  -->
    <?php /* <button class="openBtn timkiem_icon" ><i class="fas fa-search"></i></button> <div id="search" > <div class="my-search"> <input type="text" class="form-control keyword" required="true" onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> <span onclick="onSearch($(this));return false;" class="btn_search"><i class="fas fa-search"></i></span> </div> </div> <div id="myOverlay" class="overlay" style="display: none;"> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span> <div class="overlay-content"> <input type="text" autocomplete="off" placeholder="Nhập từ khóa cần tìm" class="keyword" required="true" placeholder="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> <button type="button" onclick="onSearch($(this));return false;"><i class="fas fa-search"></i></button> </div> </div> */?>
  </div>
  </div>
  </div>
<?php /* 
<script> function openSearch() {document.getElementById("myOverlay").style.display = "block"; } function closeSearch() {document.getElementById("myOverlay").style.display = "none"; } </script> 
<script type="text/javascript">
  $(document).ready(function() {
    $('.timkiem_icon').click(function(event) {
      if($('#search').hasClass('hien')){
        $('#search').removeClass('hien');
      }else{
        $('#search').addClass('hien');
      }
    });
  });
</script>
*/?>