<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sản phẩm</title>
<link rel="stylesheet" type="text/css" href="../comon.css"/>

<!--thu vien menu cua jquery UI -->
<link rel="stylesheet" href="../js/jquery-ui/themes/base/jquery.ui.all.css" />
<script src="../js/jquery-ui/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui/ui/jquery.ui.core.js"></script>
<script src="../js/jquery-ui/ui/jquery.ui.widget.js"></script>
<script src="../js/jquery-ui/ui/jquery.ui.position.js"></script>
<script src="../js/jquery-ui/ui/jquery.ui.menu.js"></script>
<!--thu vien menu cua jquery UI -->
<!-- THU VIEN CUA SLIDE-->
<link rel="stylesheet" type="text/css" href="../js/slider/style.css" />
<script type="text/javascript" src="../js/slider/wowslider.js"></script>
<script type="text/javascript" src="../js/slider/script.js"></script>
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
<?php
// Start the session
session_start();
?>
	<div id="wrapper">
    	
        <div id="menu_top">
        	<ul>
            	<li class="has-sub"><a href="../index.php" title="Trang chủ">
                <span>TRANG CHỦ</span> </a></li>
                <li class="has-sub"><a href="../sanpham.php" title="Trang sản phẩm"><span>SẢN PHẨM</span></a></li>
                <li class="has-sub"><a  href="../daily.php" title="Trang đại lý"><span>ĐẠI LÝ</span></a></li>
        </div>
        
        <div id="header">
        	<div class="benphai">
            	<img alt="logo" name="logo" title="Logo"  src="../images/logo.jpg" />
            </div>
        	<div class="bentrai">
        	 <p style="color:red;">Chào mừng bạn đến với LIPTON</p>
                        <a href="../dangnhap.php">Đăng nhập</a>
                        <a href="../dangky.php">Đăng ký tài khoản</a>
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
                   		
                        	<img alt="quangcao" name="quangcao" title="quangcao" src="../	images/10.png" />
                          
                    </div>
					</div> 	

<?php include '../model/database.php'; ?>
<?php include '../model/productdb.php'; ?>
<div id="content_right">



<?php include '../Controller/productCT.php'; ?>



  <div id='col0'>
   <?php if (!isset ($_GET['order'])):?>
	 
	  
	
	 
  	<div id='sanpham5'>
	  <h3>THÔNG TIN SẢN PHẨM </h3>
	  <hr/>
		
		<table>
		<tr><td width=120>Tên sản phẩm</td><td width=100>Số lượng</td><td width=100>Đơn giá</td width=100><td>Tổng </td></tr>
				
		
		<?php 
		$dbtype		= "sqlite";
$dbhost 	= "localhost";
$dbname		= "pesi_shop";
$dbuser		= "root";
$dbpass		= "";
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);


  $products= products();
  $sum=0;
foreach ($products as $product){
$a="d".$product['productID'];
if (isset($_SESSION[$a])){
if (isset ($_GET['order']) and $_GET['order']=='mua') {
$customer_name=$product['productID'].'2';
$customer_address=$product['productID'].'1';
$customer_phone=$product['productID'];
$customer_phoned=$product['name'];
$customer_da=$product['price'];
$sql = "INSERT INTO orderitem (itemID, orderID, productID, price, number) 
VALUES ('$customer_name', '$customer_address', '$customer_phone', '$customer_phoned', '$customer_da');";
$q = $conn->prepare($sql);
$q->execute();

}

echo "<tr><td>".$product['name']."</td>";
echo "<td>".$_SESSION[$a]."</td>";
echo "<td>".$product['price']."</td>";
$tong =$product['price']*$_SESSION[$a];
echo "<td>".$tong."</td></tr>";
$sum=$sum+$tong;
}

} 
if (isset ($_GET['order']) and $_GET['order']=='mua') {
echo "Đã lưu thành công";
}
?>	
</td>	</tr>
				
				
		</table>
	 
	 <hr/>
	 <h4> Thành tiền: </h4>		<?php echo	$sum;?> VNĐ
	  <br/> <br/>
	 
	 <tr><td width='150px'></td><td><a href='?txtSL=<?php echo $sl;?>&txtID=<?php echo $a;?>&order=mua'><input type="submit" value="Mua"></a> </td></tr>
	 </form>
	 <br/>
	 <br/><a href='../sanpham.php'>Quay lại trang sản phẩm</a> <br/> <br/>
	 <br/>
	 </div>
	 <?php endif; ?>
	 <?php if (isset ($_GET['order']) and $_GET['order']=='mua'):?>
	  <div id='col3'>
	 	  <h3>ĐIỀN ĐẦY ĐỦ VÀ CHÍNH XÁC THÔNG TIN CỦA BẠN ĐỂ HOÀN TẤT THANH TOÁN  </h3>
	  <hr/>
	  <div class='daily'>
		<table><form action='check.php?orders=thanhtoan' method='post'>

			<tr>	<td> Tên đầy đủ:  </td>	<td> <input name="txtName" type="text" required/>
 </td>	</tr>
			<tr>	<td> Email : </td>	<td> <input name="txtDiaChi" type="text" required/> </td>	</tr>
			<tr>	<td>Điện thoại, Fax :  </td>	<td> <input name="txtDienThoai" type="number" required/> </td>	</tr>

 </td>	</tr>
			<tr>	<td>  </td>	<td>   <input type="submit" value="Thanh toán"> </td>	</tr>
				</form>
		</table>
	 </div>
	  </div>
	 <?php endif; ?>
	 
	
	 
  </div>	
  </div>
</div>
