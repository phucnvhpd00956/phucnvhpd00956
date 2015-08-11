<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sản phẩm 2</title>
<link rel="stylesheet" type="text/css" href="comon.css"/>

<!--thu vien menu cua jquery UI -->
<link rel="stylesheet" href="js/jquery-ui/themes/base/jquery.ui.all.css" />
<script src="js/jquery-ui/jquery-1.10.2.js"></script>
<script src="js/jquery-ui/ui/jquery.ui.core.js"></script>
<script src="js/jquery-ui/ui/jquery.ui.widget.js"></script>
<script src="js/jquery-ui/ui/jquery.ui.position.js"></script>
<script src="js/jquery-ui/ui/jquery.ui.menu.js"></script>
<!--thu vien menu cua jquery UI -->
<!-- THU VIEN CUA SLIDE-->
<link rel="stylesheet" type="text/css" href="js/slider/style.css" />
<script type="text/javascript" src="js/slider/wowslider.js"></script>
<script type="text/javascript" src="js/slider/script.js"></script>
<!-- KET THUC THU VIEN CUA SLIDE-->
 <script>
  //áp dụng cho form ngày sinh

	jQuery("#wowslider-container1").wowSlider({effect:"basic_linear",prev:"",next:"",duration:31*100,delay:5*100,width:600,height:300,autoPlay:true,playPause:true,stopOnHover:false,loop:false,bullets:true,caption:true,captionEffect:"slide",controls:true,onBeforeStep:0,images:0});
	</script>
    <script>

	//Bien the ul co id = menu thanh menu 
	$(function() {

		$( "#menu" ).menu();
	});

</script>	
</head>

<body>
	<div id="wrapper">
    	
        <div id="menu_top">
        	<ul>
            	<li class="has-sub"><a href="index.php" title="Trang chủ">
                <span>TRANG CHỦ</span> </a></li>
                <li class="has-sub"><a href="sanpham.php" title="Trang sản phẩm"><span>SẢN PHẨM</span></a></li>
                <li class="has-sub"><a  href="daily.php" title="Trang đại lý"><span>ĐẠI LÝ</span></a></li>
        </div>
        
        <div id="header">
        	<div class="benphai">
            	<img alt="logo" name="logo" title="Logo"  src="images/logo.jpg" />
            </div>
        	<div class="bentrai">
        	 <p style="color:red;">Chào mừng bạn đến với LIPTON</p>
                        <a href="dangnhap.php">Đăng nhập</a>
                        <a href="dangky.php">Đăng ký tài khoản</a>
                        <form name="formtimkiem" method="post" action="#">
                            <input id="search" name="search" type="search" placeholder="Tìm kiếm">
                            <input type="submit" id="search-sumit" value="Tìm kiếm">
                        </form>
            </div>
        
        </div>
        <div id="main_container">
        	<div id="content_left">
            	<div id="content_left1">
            		<p>Các sản phẩm của Lipton</p>
        		<ul id="menu" >
					<li>
						<a href="#">Lipton&reg; ited tea</a>
						

					</li>
					<li>
						<a href="#">Lipton&reg; black teas</a>
						
					</li>
					<li>
						<a href="#">Lipton&reg; natural energy</a>
						
                    </li>
                    <li>
						<a href="#">Lipton&reg; k-cup&reg; pack</a>
						
                    </li>
                    <li>
						<a href="#">Lipton&reg; tea & honey</a>
						
                    </li>
                    <li>
						<a href="#">Lipton&reg; green tea</a>
						
                    </li>
                    <li>
						<a href="#">Lipton&reg; iced tea liquids</a>
						
                    </li>
                    <li>
						<a href="#">Lipton&reg; while & red</a>
						
                    </li>
                   
                    </ul>
                    	 </div>	
                   <div id="content_left2">
                        	<img alt="quangcao" name="quangcao" title="quangcao" src="images/10.png" />
                          
                    </div>
                    </div>
                    <div id="content_right2">
                    <div id="content_right1">
                        	<h3 align="center">Trà Lipton ice tea chanh</h3>
                            <img alt="hinh 13" name="hinh13" title="hình 13" src="images/13.png" />
                            <p>Trà Ice Tea hòa tan trực tiếp trong nước, sảng khoái hơn khi uống lạnh. Chất Theanine - một hoạt chất có sẵn trong lá trà - giúp cho tinh thần bạn được thư giãn nhưng vẫn rất tỉnh táo. Khi não bộ tỉnh táo, hoạt động tối ưu nhất đó cũng chính là thời điểm mang lại cảm hứng sáng tạo cho mọi người. </p>
                            <p>Thành phần sản phẩm: <br/>Đường, chất chỉnh độ axit, muối, tinh chhát trà đen(0,5%),
phẩm màu, hương đào tự nhiên.</p>
                    </div>
                    	
                    </div>
                    <div class="sanpham2">
                            
                            <p>Giá: <b>33.000 VNĐ</b>
                            <p>Trọng lượng: 201g~300g</b>
                            <p>Tình trạng: <b>Còn hàng</b>
                          	<ul>
                            <li>
                            	<a title="mua ngay" href="#">Mua ngay</a>
                            </li>
                            <li>
                                <a title="mua ngay" href="#">Thêm vào giỏ hàng</a>
                            </li>
                            </ul>
                        </div>
                    <div id="content_right">
                    	
                        
                        <div class="sanpham">
                    		<img alt="sp" name="sp" title="sanpham1" src="images/3.png" />
                            <p><i>Trà Lipton Nhãn Vàng 25 túi</i></p>
                            <p>Giá: <b>34.000 VNĐ</b></p>
                            <li>
                            	<a title="mua ngay" href="sanpham2.php">Mua ngay</a>
                                
                            </li>
                        </div>
                        
                        <div class="sanpham">
                    		<img alt="sp" name="sp" title="sanpham1" src="images/3.png" />
                            <p><i>Trà Lipton Nhãn Vàng 25 túi</i></p>
                            <p>Giá: <b>34.000 VNĐ</b></p>
                            <li>
                            	<a title="mua ngay" href="sanpham2.php">Mua ngay</a>
                            </li>
                        </div>
                        
                        <div class="sanpham">
                    		<img alt="sp" name="sp" title="sanpham1" src="images/3.png" />
                            <p><i>Trà Lipton Nhãn Vàng 25 túi</i></p>
                            <p>Giá: <b>34.000 VNĐ</b></p>
                            <li>
                            	<a title="mua ngay" href="sanpham2.php">Mua ngay</a>
                            </li>
                        </div>
                        
                        <div class="sanpham">
                    		<img alt="sp" name="sp" title="sanpham1" src="images/3.png" />
                            <p><i>Trà Lipton Nhãn Vàng 25 túi</i></p>
                            <p>Giá: <b>34.000 VNĐ</b></p>
                            <li>
                            	<a title="mua ngay" href="sanpham2.php">Mua ngay</a>
                            </li>
                        </div>
                    </div>	
                    
      	</div>
        <div id="footer">
        		<p >&copy; 2015 Nguyễn Văn Hoàng Phúc - PD00956-Web</p>
        </div>
    </div>
</body>
</html>
