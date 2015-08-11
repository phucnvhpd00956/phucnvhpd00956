<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sủa Khách Hàng</title>
</head>
<body>
<?php
		$dsn = 'mysql:host=localhost;dbname=liptonshop';
		$username= 'root';
		$password = '';
		$db = new PDO($dsn, $username, $password);
		$Makh = $_POST['Makh'];
		$name = $_POST['Tenkh'];
		$adminID = $_POST['User'];
		$password = $_POST['Password'];
		$Gioitinh = $_POST['Gioitinh'];
		$Ngaysinh = $_POST['Ngaysinh'];
		$email = $_POST['Email'];
		$address = $_POST['Diachi'];
		$discountPercent = $_POST['Sdt'];
        $query= "
					UPDATE khach_hang SET Tenkh='$name', User='$adminID', Password='$password', Gioitinh='$Gioitinh', Ngaysinh='$Ngaysinh', Email='$email', Diachi='$address', Sdt='$discountPercent'
					WHERE  Makh='$Makh' 
				";
        $result = $db->query($query);
		echo 'Đã thay đổi thành công <a href="quantriadmin.php?ql=tk">Quay về</a> ';
		
		
?>
</body>
</html>