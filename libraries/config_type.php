<?php
$type = (string)(isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
$act = (string)(isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$act = explode('_',$act);
if(count($act>1)){
	$act = $act[1];
} else {
	$act = $act[0];
}

$config['type'] = array();
$config['title'] = array();
$config['ck'] = array();
switch($type){
//-------------san pham------------------
	case 'can-ho':
	case 'nha-pho':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten','ten2','seo','noibat','hinhanh','noidung','mota');
		$config['title'] = array('noibat'=>"Nổi bật",'tieubieu'=>"Hiện menu",'hinhanh2'=>"Icon");
		@define ( _width_thumb , 340 );
		@define ( _height_thumb , 560 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 340 );
		@define ( _height_thumb2 , 560 );
		@define ( _widthhinhanh_thumb , 40 );
		@define ( _heighthinhanh_thumb , 40 );
		@define ( _stylehinhanh_thumb , 2 );
		@define ( _widthhinhanh_thumb2 , 40 );
		@define ( _heighthinhanh_thumb2 , 40 );
		break;

		case 'list':
		$config['type'] = array('seo','ten');
		$config['title'] = array('noibat'=>"Nổi bật");
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 300 );
		@define ( _height_thumb2 , 300 );
		break;

		case 'cat':
		$config['type'] = array('seo','ten');
		@define ( _width_thumb , 250 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		break;

		default:
		$config['type'] = array('seo','ten','mota','noibat','danhmuc','list','cat','hinhanh','hinhthem',
			'noidung','dientich','diachi','mattien','phaply','toado','vitri','matbang','link');
		$config['ck'] = array('mota2');
		$config['title'] = array('tieubieu'=>"Sản phẩm hot",'noibat'=>"Nổi bật",
			'spmoi'=>"Mới",'spbanchay'=>"Bán chạy","mota"=>"Mô tả","toado"=>"Iframe google map",
			"mota2"=>"Mô tả",'mattien'=>"Phòng ngủ","dientich"=>"Diện tích","thuonghieu"=>"Thương hiệu",
			"vitri"=>"Tình trạng","phaply"=>"Phòng tắm","matbang"=>"Giá","link"=>"Link youtube");
		@define ( _width_thumb , 768 );
		@define ( _height_thumb , 605 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 800 );
		@define ( _height_thumb2 , 630 );
		break;
	}
	break;

	case 'dat-nen':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten','seo');
		$config['title'] = array('noibat'=>"Nổi bật",'tieubieu'=>"Hiện menu",'hinhanh2'=>"Icon");
		@define ( _width_thumb , 340 );
		@define ( _height_thumb , 560 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 340 );
		@define ( _height_thumb2 , 560 );
		@define ( _widthhinhanh_thumb , 40 );
		@define ( _heighthinhanh_thumb , 40 );
		@define ( _stylehinhanh_thumb , 2 );
		@define ( _widthhinhanh_thumb2 , 40 );
		@define ( _heighthinhanh_thumb2 , 40 );
		break;

		case 'list':
		$config['type'] = array('seo','ten');
		$config['title'] = array('noibat'=>"Nổi bật");
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 300 );
		@define ( _height_thumb2 , 300 );
		break;

		case 'cat':
		$config['type'] = array('seo','ten');
		@define ( _width_thumb , 250 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		break;

		default:
		$config['type'] = array('seo','ten','mota','noibat','danhmuc','hinhanh','hinhthem','noidung',
			'dientich','diachi','toado','vitri','matbang');
		$config['ck'] = array('mota2');
		$config['title'] = array('tieubieu'=>"Sản phẩm hot",'noibat'=>"Nổi bật",
			'spmoi'=>"Mới",'spbanchay'=>"Bán chạy","mota"=>"Mô tả","toado"=>"Iframe google map",
			"mota2"=>"Mô tả",'mattien'=>"Phòng ngủ","dientich"=>"Diện tích","thuonghieu"=>"Thương hiệu",
			"vitri"=>"Tình trạng","phaply"=>"Phòng tắm","matbang"=>"Giá");
		@define ( _width_thumb , 700 );
		@define ( _height_thumb , 430 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 800 );
		@define ( _height_thumb2 , 490 );
		break;
	}
	break;
//-------------san pham------------------
	case 'mausac':
	switch($act){
		default:
		$config['type'] = array('ten', 'color','noibat','hinhanh');
		$config['title']["noibat"] = "Dùng hình ảnh";
		@define ( _width_thumb , 200 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 200 );
		@define ( _height_thumb2 , 200 );
		break;
	}
	break;
	case 'size':
	switch($act){
		default:
		$config['type'] = array('ten');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'coupon':
	switch($act){
		default:
		$config['type'] = array('ten','gia');
		break;
	}
	break;
	case 'id_hientrang':
	case 'id_huong':
	switch($act){
		default:
		$config['type'] = array('ten');
		break;
	}
	break;
	case 'tailieu':
	switch($act){
		default:
		$config['type'] = array('seo','taptin','ten','mota');
		break;
	}
	break;
	case 'bntrong':
	switch($act){
		default:
		$config['type'] = array('hinhanh','ten');
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'thuonghieu':
	switch($act){
		default:
		$config['type'] = array('hinhanh2', 'hinhanh','ten','seo');
		$config['title'] = array('hinhanh2'=>'Icon', 'hinhanh'=>'Hình ảnh');
		@define ( _width_thumb , 590 );
		@define ( _height_thumb , 480 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 590 );
		@define ( _height_thumb2 , 480 );
		@define ( _width_thumb4 , 145 );
		@define ( _height_thumb4 , 110 );
		break;
	}
	break;
	case 'the-manh':
	switch($act){
		default:
		$config['type'] = array('ten','mota','hinhanh');
		@define ( _width_thumb , 70 );
		@define ( _height_thumb , 70 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 70);
		@define ( _height_thumb2 , 70 );
		break;
	}
	break;
	case 'slider-ma':
	switch($act){
		default:
		$config['type'] = array('ten');
		break;
	}
	break;
	case 'dich-vu':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten','mota','hinhanh');
		@define ( _width_thumb , 340 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 340);
		@define ( _height_thumb2 , 300 );
		break;
		case 'list':
		$config['type'] = array('seo','ten','hinhanh');
		@define ( _width_thumb , 145 );
		@define ( _height_thumb , 105 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 425);
		@define ( _height_thumb2 , 310 );
		break;
		default:
		$config['type'] = array('seo','ten','noidung','hinhanh');
		@define ( _width_thumb , 40 );
		@define ( _height_thumb , 40 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 40);
		@define ( _height_thumb2 , 40 );
		break;
	}
	break;
	case 'cong-trinh':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','hinhanh','noibat','mota');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'tin-tuc':
	case 'chinh-sach':
	case 've-chung-toi':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh');
		if($type == "tin-tuc"){
			$config['type'][] = "noibat";	
			$config['type'][] = "danhmuc";	
		}
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'loc-san-pham':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten');
		break;
		default:
		$config['type'] = array('ten','danhmuc');
		break;
	}
	break;
	case 'khuyen-mai':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'hotline':
	case 'zalo':
	switch($act){
		default:
		$config['type'] = array('ten','link');
		$config['title'] = array('link'=>"SĐT",'chucvu'=>"Bộ phận");
		break;
	}
	break;
	case 'diachi':
	switch($act){
		default:
		$config['type'] = array('ten','mota');
		$config['title'] = array('mota'=>"Địa chỉ");
		break;
	}
	break;
	case 'tags':
	switch($act){
		default:
		$config['type'] = array('ten', 'link');
		break;
	}
	break;
//-------------tin tuc------------------
	case 'y-kien':
	switch($act){
		default:
		$config['type'] = array('ten','chucvu','hinhanh','mota');
		@define ( _width_thumb , 100 );
		@define ( _height_thumb , 100 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 100 );
		@define ( _height_thumb2 , 100 );
		break;
	}
	break;
	case 'thu-vien':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten','hinhanh','noibat');
		@define ( _width_thumb , 280 );
		@define ( _height_thumb , 280 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600);
		@define ( _height_thumb2 , 600 );
		break;
		default:
		$config['type'] = array('ten','hinhthem');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 400 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600);
		@define ( _height_thumb2 , 600 );
		break;
	}
	break;
//-------------chinh sach / ho tro / cham soc khach hang------------------
	case 'chinh-sach1':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung');
		break;
	}
	break;

//-------------tin tuc------------------
//-------------Dạng photo------------------
	case 'logo':
	switch($act){
		default:
		@define ( _width_thumb2 , 160 );
		@define ( _height_thumb2 , 120 );
		break;
	}
	break;
	case 'dong':
	switch($act){
		default:
		@define ( _width_thumb , 100 );
		@define ( _height_thumb , 100 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 250 );
		@define ( _height_thumb2 , 250 );
		break;
	}
	break;
	case 'banner':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 610);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 610 );
		break;
	}
	break;
	case 'bgbn':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 366 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 366 );
		break;
	}
	break;
	case 'bgft':
	switch($act){
		default:
		@define ( _width_thumb , 700 );
		@define ( _height_thumb , 500 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 700 );
		@define ( _height_thumb2 , 500 );
		break;
	}
	break;
	case 'banner_mobi':
	switch($act){
		default:
		@define ( _width_thumb , 600 );
		@define ( _height_thumb , 150 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 150 );
		break;
	}
	break;
	case 'pupop':
	switch($act){
		default:
		@define ( _width_thumb2 , 550 );
		@define ( _height_thumb2 , 480 );
		@define ( _style_thumb2 , 1 );
		break;
	}
	break;
	case 'slider':
	case 'slider2':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 660);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 660);
		break;
	}
	break;
	case 'slidermb':
	switch($act){
		default:
		@define ( _width_thumb , 768 );
		@define ( _height_thumb , 300);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 768 );
		@define ( _height_thumb2 , 300);
		break;
	}
	break;
	case 'letruot':
	switch($act){
		default:
		@define ( _width_thumb , 150 );
		@define ( _height_thumb , 390 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 150 );
		@define ( _height_thumb2 , 390 );
		break;
	}
	break;
	case 'doi-tac':
	switch($act){
		default:
		@define ( _width_thumb2 , 160 );
		@define ( _height_thumb2 , 100 );
		break;
	}
	break;
	case 'quang-cao':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 570 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 570 );
		break;
	}
	break;
	case 'quang-cao2':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 410 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 410 );
		break;
	}
	break;
//-------------Dạng 1 bài viết------------------
	case 'gioi-thieu':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung','mota2','hinhanh','link','chucvu');
		$config['title'] = array('link'=>"Tên ảnh",'chucvu'=>"Chức vụ");
		// $config['ck'] = array('mota2');
		@define ( _width_thumb , 410 );
		@define ( _height_thumb , 520 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 410 );
		@define ( _height_thumb2 , 520 );
		break;
	}
	break;
	case 'first-article':
	case 'thong-tin-chinh-sach':
	case 'chinh-sach-bo-si':
	case 'so-sanh-cac-cho-si':

	switch($act){
		default:
		$config['type'] = array('noidung');
		break;
	}
	break;
	case 'dao-tao':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung','mota');
		break;
	}
	break;
	case 'lienhe':
	switch($act){
		default:
		$config['type'] = array('noidung');
		break;
	}
	break;
	case 'footer':
	switch($act){
		default:
		$config['type'] = array('noidung','hinhanh');
		@define ( _width_thumb , 160 );
		@define ( _height_thumb , 120 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 160 );
		@define ( _height_thumb2 , 120 );
		break;
	}
	break;
//-------------tin tuc------------------

//--------------defaut main---------------
	default:
	$source = "";
	$template = "index";
	break;
}