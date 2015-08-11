  <div id='col0'>
  	<div id='col3'>
	  <h1>THÔNG TIN SẢN PHẨM </h1>
	  <hr/>
	  <div class='daily'>
		<table>


		<tr><td width=120>Tên sản phẩm</td><td width=100>Số lượng</td><td width=100>Đơn giá </td width=100><td>Tổng </td></tr>
		 <?php 
  $products= products();
  $sum=0;
foreach ($products as $product){
$a="d".$product['productID'];
if (isset($_SESSION[$a])){
echo "<tr><td>".$product['name']."</td>";
echo "<td>".$_SESSION[$a]."</td>";
echo "<td>".$product['price']."</td>";
$tong =$product['price']*$_SESSION[$a];
echo "<td>".$tong."</td></tr>";
$sum=$sum+$tong;
}

} 
?>

	
		</table>

	 </div>
	 <hr/>
	 <h4> Thành tiền: </h4>		<?php echo	$sum;?> VNĐ
	 <br/>
	 <br/>
	 <br/>
	
	 </div>
	  <div id='col3'>
	 	  <h1>THÔNG TIN KHÁCH HÀNG </h1>
	  <hr/>
	  <div class='daily'>
		<table>
		<form action='hoanthanh.php' method='post'>
			<tr>	<td> Tên đầy đủ  </td>	<td> <input name="txtName" type="text" required/>
 </td>	</tr>
			<tr>	<td> Địa chỉ  </td>	<td> <input name="txtDiaChi" type="text" required/> </td>	</tr>
			<tr>	<td> Điện thoại, Fax  </td>	<td> <input name="txtDienThoai" type="number" required/> </td>	</tr>

 </td>	</tr>
			<tr>	<td>  </td>	<td>   <input type="submit" value="Thanh toán"> </td>	</tr>

				</form>
		</table>
	
	 </div>
	 

	  
	  </div>

	 
  </div>
  
  
  
 
	
	

	
	
	
	
	
  </div>
  
  
  
</div>
