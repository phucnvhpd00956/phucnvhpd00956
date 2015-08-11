<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sủa Sản Phẩm</title>
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
		$discountPercent = $_POST['Soluong'];
        $query= "
					UPDATE san_pham SET Maloaisp='$categoryID', Tensp='$name',  Dongia='$price', Thongtin='$infomation', Soluong='$discountPercent'
					WHERE Masp='$productID'
				";
        $result = $db->query($query);
		echo 'Đã thay đổi thành công <a href="quantriadmin.php?ql=ksp">Quay về</a> ';
		
		
?>
</body>
</html>