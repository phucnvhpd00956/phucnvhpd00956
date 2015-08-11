<!DOCTYPE HTML>
<head>
<title>PEPSI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style1.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
</head>
<div class="header">
 
  <ol>
	<li> 
 <li>

 <?php
        // Check if user is logged in and
        // display appropriate account links
        $account_url = $app_path . 'admin/account';
        $logout_url = $account_url . '?action=logout';
        if (isset($_SESSION['admin'])) :
        ?>
            <a href="<?php echo $logout_url; ?>">Thoát</a>
        <?php else: ?>
        <a href="<?php echo $account_url; ?>">Đăng nhập</a>
        <?php endif; ?>
</li>
    <li><a href="<?php echo $app_path; ?>admin">Admin</a></li>
	<li>  <a href="<?php echo $app_path; ?>">Trang chủ</a></li>
	<li style='width:250px'><input type='text' name='seach' id='seach'></li>
	<li><input type='submit' style='background:#014d70;border:1px solid #015476;color:#fff;margin-top:4px;' value='Tim'></li>
	
  </ol>

  <div class="clr"></div>
</div>


<h1 class="logo" style='line-height:38px;font-family:basic title font;color:#B0C4DE;font-size:40pt;word-spacing: -12px;'>

PEPSI SHOP

<p style='line-height:25px;margin-top:12px;word-spacing: 3px;font-family:arial;color:#B0C4DE;font-size:9pt;letter-spacing: 7px; border-top:1px solid 	#778899;width:350px;margin-left:37%;'>

Nước uống giải khát pepsi</p>
</a></h1>
<body>
<br/>
<br/>
<br/>




