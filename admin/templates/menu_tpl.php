<div class="logo"><a href="index.php" style="display:block;">
    <img src="images/logo.png" /></a></div>
    <div class="sidebarSep mt0"></div>
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="dash" id="menu1"><a class=" active" title="" href="index.php">
            <span>Trang chủ</span></a></li>
            
            <li class="categories_li <?php if($_GET['com']=='httt' || $_GET['com']=='order'
            || $_GET['type']=='thuonghieu' || $_GET['type']=='mausac' || $_GET['type']=='size'
            || $_GET['type']=='txtsp' || $_GET['type']=='can-ho' || $_GET['type']=='coupon' || $_GET['com']=='excel' )
            echo ' activemenu' ?>" id="menu_"><a href="" title="" class="exp">
                <span>Căn hộ</span><strong></strong></a>
                <ul class="sub">
                    <?php phanquyen_menu('Danh mục 1','product','man_danhmuc','can-ho'); ?>
                    <?php phanquyen_menu('Danh mục 2','product','man_list','can-ho'); ?>
                    <?php phanquyen_menu('Danh mục 3','product','man_cat','can-ho'); ?>
                    <?php phanquyen_menu('Bài viết','product','man','can-ho'); ?>

                    <?php //phanquyen_menu('Danh mục cấp 1','product','man_danhmuc','san-pham'); ?>
                    <?php //phanquyen_menu('Danh mục cấp 2','product','man_list','san-pham'); ?>
                    <?php //phanquyen_menu('Danh mục cấp 3','product','man_cat','san-pham'); ?>
                    <?php //phanquyen_menu('Sản phẩm','product','man','san-pham'); ?>
                    <?php //phanquyen_menu('Quản lý hình thức thanh toán','httt','man',''); ?>
                    <?php //phanquyen_menu('Quản lý thương hiệu','news','man','thuonghieu'); ?>
                    <?php //phanquyen_menu('Quản lý màu sắc','news','man','mausac'); ?>
                    <?php //phanquyen_menu('Quản lý size','news','man','size'); ?>
                    <?php //phanquyen_menu('Quản lý mã giảm giá','news','man','coupon'); ?>
                </ul>
            </li>
            <li class="categories_li <?php if($_GET['type']=='nha-pho')
            echo ' activemenu' ?>" id="menu_np"><a href="" title="" class="exp">
                <span>Nhà phố</span><strong></strong></a>
                <ul class="sub">
                    <?php phanquyen_menu('Danh mục 1','product','man_danhmuc','nha-pho'); ?>
                    <?php phanquyen_menu('Danh mục 2','product','man_list','nha-pho'); ?>
                    <?php phanquyen_menu('Danh mục 3','product','man_cat','nha-pho'); ?>
                    <?php phanquyen_menu('Bài viết','product','man','nha-pho'); ?>
                </ul>
            </li>
            <li class="categories_li <?php if($_GET['type']=='dat-nen')
            echo ' activemenu' ?>" id="menu_dn"><a href="" title="" class="exp">
                <span>Đất nền</span><strong></strong></a>
                <ul class="sub">
                    <?php phanquyen_menu('Danh mục Đất nền','product','man_danhmuc','dat-nen'); ?>
                    <?php phanquyen_menu('Bài viết','product','man','dat-nen'); ?>
                </ul>
            </li>

            <li class="categories_li <?php if($_GET['type']=='tin-tuc')
            echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp">
                <span>Bảng tin</span><strong></strong></a>
                <ul class="sub">
                    <?php phanquyen_menu('Danh mục Bảng tin','news','man_danhmuc','tin-tuc'); ?>
                    <?php phanquyen_menu('Bảng tin','news','man','tin-tuc'); ?>
                </ul>
            </li>
            <li class="categories_li <?php if(in_array($_GET['type'], array('khuyen-mai','y-kien','thu-vien','chinh-sach'
            ,'tai-sao','the-manh','ve-chung-toi','ho-tro','dich-vu','y-kien')) or $_GET['com']=='vnexpress') 
            echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>
            Bài viết</span><strong></strong></a>
            <ul class="sub">
                <?php phanquyen_menu('Cảm nhận khách hàng','news','man','y-kien'); ?>
                <?php //phanquyen_menu('Về chúng tôi','news','man','ve-chung-toi'); ?>
                <?php phanquyen_menu('Chính sách','news','man','chinh-sach'); ?>
                <?php //phanquyen_menu('Thư viện','news','man','thu-vien'); ?>
                <?php //phanquyen_menu('Lấy tin từ Vnexpress','vnexpress','man',''); ?>
            </ul>
        </li>
        <li class="categories_li <?php if(in_array($type, array('gioi-thieu','lienhe','footer')))
        echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp">
            <span>Trang tĩnh</span><strong></strong></a>
            <ul class="sub">
                <?php phanquyen_menu('Giới thiệu','about','capnhat','gioi-thieu'); ?>
                <?php phanquyen_menu('Cập nhật liên hệ','about','capnhat','lienhe'); ?>
                <?php phanquyen_menu('Cập nhật footer','about','capnhat','footer'); ?>
            </ul>
        </li>
        <li class="categories_li <?php if($_GET['com']=='newsletter' || $_GET['com']=='lkweb'
        || $_GET['com']=='yahoo') echo ' activemenu' ?>" id="menu_nt"><a href="" title="" 
        class="exp"><span>Marketing Online</span><strong></strong></a>
        <ul class="sub">
          <?php phanquyen_menu('Mạng xã hội','lkweb','man','mxh'); ?>
          <?php //phanquyen_menu('Mạng xã hội footer','lkweb','man','mxhft'); ?>
          <?php //phanquyen_menu('Hình thanh toán','lkweb','man','mxhle'); ?>
          <?php //phanquyen_menu('Quản lý liên kết web','lkweb','man','lkweb'); ?>
          <?php //phanquyen_menu('Quản lý hỗ trợ','yahoo','man','yahoo'); ?>
          <?php //phanquyen_menu('Quản lý Đăng ký nhận tin','newsletter','man',''); ?>
      </ul>
  </li>
    <li class="categories_li gallery_li <?php if(in_array($type, array('logo','banner',
  'bgbn','bgft','slider','slidermb','doi-tac','quang-cao','quang-cao2','slider-ma')) || $_GET['com']=='anhnen')
  echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>
  Banner - Quảng cáo</span><strong></strong></a>
  <ul class="sub">
    <?php //phanquyen_menu('Cập nhật background','anhnen','capnhat','background'); ?>
    <?php phanquyen_menu('Logo','background','capnhat','logo'); ?>
    <?php //phanquyen_menu('Banner','background','capnhat','banner'); ?>
    <?php //phanquyen_menu('Background banner','background','capnhat','bgbn'); ?>
    <?php //phanquyen_menu('Cập nhật logo đóng dấu','background','capnhat','dong'); ?>
    <?php //phanquyen_menu('Background liên hệ','background','capnhat','bgft'); ?>
    <?php //phanquyen_menu('Cập nhật banner mobile','background','capnhat','banner_mobi'); ?>
    <?php phanquyen_menu('Quản lý slider','slider','man_photo','slider'); ?>
    <?php //phanquyen_menu('Banner trang trong','news','man','bntrong'); ?>
    <?php //phanquyen_menu('Text Đối tác','about','capnhat','txtdoitac'); ?>
    <?php //phanquyen_menu('Đối tác','slider','man_photo','doi-tac'); ?>
    <?php //phanquyen_menu('Banner quảng cáo','slider','man_photo','quang-cao'); ?>
    <?php //phanquyen_menu('Banner quảng cáo dưới album','slider','man_photo','quang-cao2'); ?>
    <?php //phanquyen_menu('Quản lý quảng cáo 2 bên','slider','man_photo','letruot'); ?>
    <?php //phanquyen_menu('Cập nhật pupop quảng cáo','background','capnhat','pupop'); ?>
</ul>
</li>
<?php /*<li class="categories_li <?php if($_GET['com']=='database' || $_GET['com']=='backup')
 echo ' activemenu' ?>" id="menu_ntt"><a href="" title="" class="exp"><span>
 Database</span><strong></strong></a>
        <ul class="sub">
            <?php phanquyen_menu('Quản lý database','database','man',''); ?>
            <?php phanquyen_menu('Backup database','backup','backup_database',''); ?>
            <?php phanquyen_menu('Backup file','backup','backup_file',''); ?>
        </ul>
        </li>  */?>
        <li class="categories_li <?php if($_GET['com']=='phanquyen' || $_GET['com']=='com') 
        echo ' activemenu' ?>" id="menu_pq"><a href="" title="" class="exp"><span>Thành viên
        </span><strong></strong></a>
        <ul class="sub">
            <?php //phanquyen_menu('Quản lý nhóm thành viên','phanquyen','man',''); ?>
            <?php //phanquyen_menu('Quản lý thành viên','user','man',''); ?>
            <?php //phanquyen_menu('Quản lý com','com','man',''); ?>
        </ul>
    </li>
<li class="categories_li <?php if($_GET['com']=='place') echo ' activemenu' ?>"
 id="menu_pl"><a href="" title="" class="exp"><span>Địa điểm</span><strong></strong></a>
    <ul class="sub">
        <?php //phanquyen_menu('Quản lý Tỉnh thành','place','man_city',''); ?>
        <?php //phanquyen_menu('Quản lý Quận huyện','place','man_dist',''); ?>
        <?php //phanquyen_menu('Quản lý Phường xã','place','man_ward',''); ?>
        <?php //phanquyen_menu('Quản lý Đường','place','man_street',''); ?>
    </ul>
</li>
<li class="categories_li setting_li <?php if(in_array($type, array('txtvideo','video',
'hotline','zalo','tags','diachi')) || $_GET['com']=='company' || $_GET['com']=='meta' ||
$_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp">
    <span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Cấu hình thông tin Website','company','capnhat',''); ?>
        <?php //phanquyen_menu('Quản lý hotline','news','man','hotline'); ?>
        <?php //phanquyen_menu('Quản lý zalo','news','man','zalo'); ?>
        <?php //phanquyen_menu('Quản lý chi nhánh','news','man','diachi'); ?>
        <?php //phanquyen_menu('Quản lý video','video','man','video'); ?>
        <?php // phanquyen_menu('Tags','news','man','tags'); ?>
        <li <?php if($_GET['act']=='admin_edit') echo ' class="this"' ?> >
            <a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
        </ul>
    </li>
    <li class="marketing_li<?php if(in_array($_GET['com'], array('title') ) ) 
    echo ' activemenu' ?>" id="menuseo"><a href="#" title="" class="exp"><span>Hổ Trợ SEO
    </span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Bảng tin','title','capnhat','tin-tuc'); ?>
        <?php phanquyen_menu('Căn hộ','title','capnhat','can-ho'); ?>
        <?php phanquyen_menu('Nhà phố','title','capnhat','nha-pho'); ?>
        <?php phanquyen_menu('Đất nền','title','capnhat','dat-nen'); ?>
    </ul>
</li>
</ul>