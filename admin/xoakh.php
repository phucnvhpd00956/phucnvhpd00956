<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa khách hàng</title>
</head>

<body>

<?php
	$Makh = $_GET['xoakh'];
	$connec = mysqli_connect('localhost', 'root', '', 'liptonshop');
	$Delete = 'DELETE FROM khach_hang WHERE Makh = "'.$Makh.'"';
	mysqli_query($connec,$Delete);
	header ("Location:quantriadmin.php?ql=tk");
	mysqli_close($connec);	
	
?>
</body>
</html>