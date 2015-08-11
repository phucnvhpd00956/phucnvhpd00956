<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
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
</head>

<body>
	<div id="wrapper">
    	
        <div id="menu_top">
        	<ul>
            	<li class="has-sub"><a href="index.php" title="Trang chủ">
                <span>TRANG CHỦ</span> </a></li>
                <li class="has-sub"><a  href="sanpham.php" title="Trang sản phẩm"><span>SẢN PHẨM</span></a></li>
                <li class="has-sub"><a  href="daily.php" title="Trang đại lý"><span>ĐẠI LÝ</span></a></li>
        </div>
        
        <div id="header">
        	<div class="benphai">
            	<img alt="logo" name="logo" title="Logo"  src="images/logo.jpg" />
            </div>
        	<div class="bentrai">
        	 <p>Chào mừng bạn đến với LIPTON</p>
                        <a  href="dangnhap.php">Đăng nhập</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="dangky.php">Đăng ký tài khoản</a>
                        <form name="formtimkiem" method="post" action="#">
                            <input id="search" name="search" type="search" placeholder="Tìm kiếm">
                            <input type="submit" id="search-sumit" value="Tìm kiếm">
                        </form>
            </div>
        
        </div>
        <div id="main_container">
        	<!-- NOI DUNG SLIDE -->
						<div id="wowslider-container1">
							<div class="ws_images" style="z-index:9;">
								<ul>
									<li><img src="images/slide/images/6.jpeg" alt="hinh1 " title="hinh 1" id="wows1_0"/></li>
									<li><img src="images/slide/images/6.jpeg" alt="iphone5s" title="iphone5s" id="wows1_1"/></li>
									<li><img src="images/slide/images/6.jpeg" alt="NokiaX" title="NokiaX" id="wows1_2"/></li>
									<li><img src="images/slide/images/7.png" alt="Samsung" width="800" height="350" title="Samsung" id="wows1_3"/></li>
									
                                    
								</ul>
							</div>
							<div class="ws_bullets"><div>
								<a href="#" title="Lg "><img src="images/slide/images/6.jpeg" width="80px" height="35px" alt="Lg "/>1</a>
								<a href="#" title="iphone5s"><img src="images/slide/images/6.jpeg" width="80px" height="35px" alt="iphone5s"/>2</a>
								<a href="#" title="NokiaX"><img src="images/slide/images/6.jpeg" width="80px" height="35px" alt="NokiaX"/>3</a>
								<a href="#" title="Samsung"><img src="images/slide/images/7.png" width="80px" height="35px" alt="Samsung"/>4</a>
								
	
							</div>
						</div>
                        </div>
					<!-- KET THUC NOI DUNG SLIDE-->	
        	
            <div id="content_center">
            
            	<h3>Các tin tức nỗi bật</h3>
                <div class="tintuc">
                		<div class="tintuc1">
                        	<img alt="tintuc" name="tintuc" title="tintuc" src="images/7.png" />
                            <p>Nghiên cứu cho biết những người uống ít nhất hai tách trà mỗi ngày có vòng eo nhỏ và lượng mỡ thừa ít hơn những người không uống trà.
Tết là thời điểm dễ tăng cân nhất với biết bao món ngon khó chối từ. Liptonese đừng quên 2 tách Lipton mỗi ngày để có dáng chuẩn ăn Tết nhé!</p>
                                <div class="a">
                                        <a href="#">Chi tiết &gt;&gt;</a></p>
                                </div>
                        </div>
                        
                        <div class="tintuc1">
                        	<img alt="tintuc" name="tintuc" title="tintuc" src="images/8.jpg" />
                            <p>Như một lời cảm ơn đến Liptonese đã luôn ủng hộ Lipton trong năm vừa qua, Tết 2015 này Lipton dành tặng bạn 1 món quà cực hoành tráng: 2000 bộ quà Tết sang trọng và 3000 bộ lịch tự thiết kế.
Làm thế nào để nhận quà tươi sáng từ Lipton? 

</p>
                                <div class="a2">
                                        <a href="#">Chi tiết &gt;&gt;</a></p>
                                </div>
                        </div>	
                        
                        <div class="tintuc1">
                        	<img alt="tintuc" name="tintuc" title="tintuc" src="images/9.jpg" />
                            <p>Còn gì quyến rũ hơn hình ảnh một tách Lipton thơm ngon toả khói nghi ngút dưới nắng sớm. Để xua tan cái lạnh của những ngày cận Tết, thưởng thức Lipton là một cách thật tuyệt phải không Liptonese?</p>
                                <div class="a3">
                                        <a href="#">Chi tiết &gt;&gt;</a></p>
                                </div>
                        </div>
                        
                          <div class="tintuc1">
                        	<img alt="tintuc" name="tintuc" title="tintuc" src="images/100.png" />
                            <p>Comment 3 từ Liptonese nhìn thấy đầu tiên , đó cũng chính là lời chúc mừng năm mới Lipton dành tặng bạn  Để xua tan cái lạnh của những ngày cận Tết, thưởng thức Lipton là một cách thật tuyệt phải không Liptonese?</p>
                                <div class="a3">
                                        <a href="#">Chi tiết &gt;&gt;</a></p>
                                </div>
                        </div>
                        
                        
                        
                      
                </div>
                    <div id="sanpham">
                    <h3>Sản phẩm mới</h3>
                    	<div id="sanphama">
                    	
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
                    </div>
              
            </div>
        	
        </div>
        
        <div id="footer">
        		<p >&copy; 2015 Nguyễn Văn Hoàng Phúc - PD00956-Web</p>
        </div>
    </div>
</body>
</html>
