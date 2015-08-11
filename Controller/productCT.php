<?php
// Set session variables
$a="d".$_GET['txtID'];
$sl=$_GET['txtSL'];
if (isset($_SESSION[$a])){
	$_SESSION[$a] = $_SESSION[$a]+$sl;
}
else
{
$_SESSION[$a]=$_GET['txtSL'];
}

?>
