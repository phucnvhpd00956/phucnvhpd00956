<?php
	if  (isset($_GET['id'])) {
	if ($_GET['id']=='add') {
	include '../lib/DatabaseConnect.php';
	$ma=$_POST['ma'];
	$ten=$_POST['ten'];
	
	$t=$_POST['t'];
	$gt=$_POST['gt'];
	$qg=$_POST['qg'];
	
	$query="insert into sinhvien values('$ma','$ten','','$t','$gt','$qg')";
	$result=$db->exec($query);
	echo "thanh cong";

	}
	}


?>

