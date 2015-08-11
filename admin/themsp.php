<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm sản phẩm</title>
</head>
	
<body>
	<?php
		$dsn = 'mysql:host=localhost;dbname=liptonshop';
		$username= 'root';
		$password = '';
		$db = new PDO($dsn, $username, $password);
		
		$productID = $_POST['Masp'];
		$categoryID = $_POST['Maloaisp'];
		$name = $_POST['Tensp'];
		$price = $_POST['Dongia'];
		$infomation = $_POST['Thongtin'];
		$images = $_POST['images'];
		$discountPercent = $_POST['Soluong'];
        $query= "INSERT INTO san_pham values('$productID','$categoryID','$name','$price','$infomation','$images','$discountPercent')";
        $result = $db->query($query);
		header ("Location:quantriadmin.php?ql=ksp");
?>
</body>
</html>