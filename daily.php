<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đại lý</title>
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
            	<img alt="logo" name="logo" title="Logo" src="images/logo.jpg" />
            </div>
        	<div class="bentrai">
        	 	<p style="color:red;">Chào mừng bạn đến với LIPTON</p>
                        <a href="#">Đăng nhập</a>	
                        <a href="#">Đăng ký tài khoản</a>
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
                    	<h3>Các đại lý phân phối của Lipton</h3>
                    <div id="content_right">
                    	
                    	<div class="daily">
                        		<h4>Đại lý 1 :</h4>
                                <p>Giám đốc : Nguyễn Văn Quang<br/>
                                Địa chỉ : 73 Hoàng Đạo Thành - SĐT: 0913.477.186<br/>
  								Giờ làm việc : 8h30 sáng đến 21h tất cả các ngày trong tuần.</p>
                                <img alt="73" name="73" width="1010px" src="images/73.png" />

                    	</div>	
                        
                        <div class="daily">
                        		<h4>Đại lý 2 :</h4>
                                <p>Giám đốc : Nguyễn Văn Hoàng Phúc<br/>
                               	Địa chỉ : 83 Núi Thành - SĐT: 0935.536.547<br/>
  								 Giờ làm việc : 8h30 sáng đến 21h tất cả các ngày trong tuần.</p>
                                 <img alt="83" name="83" width="1010px" src="images/83.png" />

                    	</div>	
                        
                        <div class="daily">
                        		<h4>Đại lý 3 :</h4>
                                <p>Giám đốc : Nguyễn Thị Hồng Linh<br/>
                                Địa chỉ : 107 Hoàng Thúc Trâm - SĐT: 0935.859.806<br/>
  								Giờ làm việc : 8h30 sáng đến 21h tất cả các ngày trong tuần.</p>
                                <img alt="107" name="107" width="1010px" src="images/107.png" />

                    	</div>	
               
                        <div class="daily">
                        		<h4>Đại lý 4 :</h4>
                                <p>Giám đốc : Nguyễn Thị Quỳnh Linh<br/>
                              	 Địa chỉ : 35 Tiên sơn 4 - SĐT: 0906.553.361<br/>
  								Giờ làm việc : 8h30 sáng đến 21h tất cả các ngày trong tuần.</p>
                                <img alt="35" name="35" width="1010px" src="images/35.png" />

                    	</div>	
      				</div>
        <div id="footer">
        		<p >&copy; 2015 Nguyễn Văn Hoàng Phúc - PD00956-Web</p>
        </div>
    </div>
</body>
</html>
