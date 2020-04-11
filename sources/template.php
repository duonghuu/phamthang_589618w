<?php 
if($source=="index"){
    $gioithieu=get_fetch("select ten$lang as ten,mota2$lang as mota2,thumb,photo from #_about 
        where type='gioi-thieu' ");
    $spnoibat=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,type,thumb,photo,diachi,
      vitri as tinhtrang,phaply as phongtam,mattien as phongngu,dientich,matbang as giabds from
     #_product where type='can-ho' and noibat>0 and hienthi>0 order by stt asc");    
      $datnen=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,type,thumb,photo,diachi,
        vitri as tinhtrang,phaply as phongtam,mattien as phongngu,dientich,matbang as giabds from
       #_product where type='dat-nen' and noibat>0 and hienthi>0 order by stt asc");
    $ykien=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,thumb,photo
        ,type,ngaytao,chucvu from #_news where type='y-kien' and hienthi>0 order by stt asc");    
    $product_danhmucnb=get_result("select ten$lang as ten,ten2$lang as ten2,mota$lang as mota,tenkhongdau,id,
        thumb,photo,type from #_product_danhmuc where type in ('can-ho','nha-pho') and noibat>0 and hienthi>0 
        order by stt asc");
}
$tinnb=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,thumb,photo
    ,type,ngaytao,luotxem from #_news where type='tin-tuc' and noibat>0 and hienthi>0 order by stt asc");
$c_tinnb=count($tinnb);
$logolang = get_fetch("select photo as photo from #_background where type='logo'");
// $bannerlang = get_fetch("select photo as photo from #_background where type='banner'");
$ftlogo=get_fetch("select photo from #_about where type='footer' ");
// $bgbnlang = get_fetch("select photo as photo from #_background where type='bgbn'");
// $tutags = get_result("select id,ten$lang as ten,link from #_news where type='tags'
 // and hienthi=1 order by stt asc");
// $hotline = get_result("select id,ten$lang as ten,chucvu,link from #_news where
//  type='hotline' and hienthi=1 order by stt asc");
// $diachi = get_result("select id,ten$lang as ten,mota$lang as mota from #_news 
// where type='diachi' and hienthi=1 order by stt asc");
// $yahoo = get_result("select * from #_yahoo where type='yahoo' and hienthi=1 order by stt asc");
// $lkweb = get_result("select link,ten from #_lkweb where type='lkweb' and hienthi=1 order by stt asc");


