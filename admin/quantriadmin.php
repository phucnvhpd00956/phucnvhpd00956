<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Trị Admin</title>
</head>
<style type="text/css">
.khung table tr td {
		border:solid 1px;
	}	
</style>
<body>
<div>
	
        <header class="topheader">
        
        	<?php
					session_start();
					
					if (isset($_GET['thoat']))
					{
						header ("Location:../login.php");session_destroy();
				 }
	                if (isset($_SESSION["User"]))
					{
						echo "Xin chào ".$_SESSION['User']."<a href='?thoat'> thoat</a>";
					}
					else
					{
						echo '<a href="login.php">Đăng nhập</a>|<a href="../dangky.php">Đăng ký</a>';
					}
				?>
            <nav class="topheader-inner">	
                <ul class="pull-right">
                    <li style="color:#6CC">
                        <a href="quantriadmin.php?ql=tk">
                        <img height="50" width="50" src="images/home.png" alt="trangchu" title="Trang chủ" /></a>Quản lý tài khoản khách hàng
                    </li>
                   
                    <li style="color:#6CC">
                        <a href="quantriadmin.php?ql=ksp">
                        <img height="50" width="50" src="images/them.png" alt="them" title="Khu sản phẩm" /></a>Khu sản phẩm
                    </li>
                    
                    <li style="color:#6CC">
                        <a href="quantriadmin.php?ql=them">
                        <img height="50" width="50" src="images/sua.png" alt="sanphamdaco" title="thêm sản phẩm" /></a>Thêm sản phẩm đã có
                    </li>
                   
                    <li style="color:#6CC">
                        <a href="quantriadmin.php?t">
                        <img height="50" width="50" src="images/xoa.png" alt="thoat" title="Thoát" /></a>Thoát
                    </li>
                    
                   
                </ul>
                
            </nav>
            </header>
       </div>
       <?php
	   if(isset($_GET['t']))
	   {
				session_destroy();
			
					header ("Location:login.php");
					
			}
					$dsn='mysql:host=localhost;dbname=liptonshop';
					$username='root';
					$password='';
					$db = new PDO($dsn, $username, $password);
					$query='SELECT * FROM san_pham';
					$result=$db->query($query);
					if (isset($_GET['ql'])){
					$kiemtra=$_GET['ql'];
					if ($kiemtra=='ksp'){
					$query='SELECT * FROM san_pham';
					$result=$db->query($query);
					echo
						'
							<div class="khung">
							
								<table align="center">
									<tr>
										
										<td>Mã sản phẩm</td>
										<td>Tên sản phẩm</td>
										<td>Giá sản phẩm</td>
										<td>Thông tin</td>
										<td>Hình ảnh</td>
										<td>Số lượng</td>
									</tr>
							';
								while($row =$result->fetch())
								{
						 echo '
						 <form action="suasp.php" method="post">
							<tr>
								<input name="Masp" type="hidden" value="'.$row['Masp'].'" />
								<td><input name="Maloaisp" type="text" value="'.$row['Maloaisp'].'" /></td>
								<td><input name="Tensp" type="text" value="'.$row['Tensp'].'" /></td>
								<td><input name="Dongia" type="text" value="'.$row['Dongia'].'" /></td>
								<td><input name="Thongtin" type="text" value="'.$row['Thongtin'].'" /></td>
								<td><img name="images" src="../images/'.$row['images'].'" width=80 height=80/></td>
								<td><input name="Soluong" type="text" value="'.$row['Soluong'].'" /></td>
								<td>
									<input type="submit" value="Sửa" style="width:50px;"/>
							</form>
									<a href="xoasp.php?xoasp='.$row['Masp'].'">
									<input type="submit" value="Xóa" style="width:50px;"/></a>
								</td>
								
						</tr>
						
						';	
					}
					echo '</table>';
					echo'</div>';
				}
				
				if ($kiemtra=='them')
				{
					echo
					'	
						<form action="themsp.php" method="post">
						<table align="center">
							<tr>
								<td>Mã sản phẩm</td>
								<td><input type="text" name="Masp" placeholder="Mã sản phẩm" required="required"></td>
							</tr>
							<tr>
								<td>Mã loại sản phẩm</td>
								<td><input type="text" name="Maloaisp" placeholder="Mã loại sản phẩm" required="required"></td>
							</tr>
							<tr>
								<td>Tên sản phẩm</td>
								<td><input type="text" name="Tensp" placeholder="Tên sản phẩm" required="required"></td>
							</tr>
							
							<tr>
								<td>Giá sản phẩm</td>
								<td><input type="text" name="Dongia" placeholder="Giá Sản phẩm dv: 10000" required="required"></td>
								
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td>Trạng thái</td>
								<td><input type="text" name="Thongtin" placeholder="Trạng thái của sản phẩm" required="required"></td>
								
							</tr>
								<tr>
								<td>Hình ảnh</td>
								<td><input type="file" name="images" ></td>
								
								</tr>
								<tr>
								<td>Số lượng</td>
								<td><input type="text" name="Soluong" placeholder="Số lượng của sản phẩm" required="required"></td>
								</td>
								<tr>
								<td><input type="submit" name="ok" value="Thêm sản phẩm" required="required"></td>
								
								</tr>
							
						</table>
						</form>
							
					';
					}
					
		
				
				if ($kiemtra=='tk')
				{
					$query='SELECT * FROM khach_hang';
					$result=$db->query($query);
						echo
							'
							<div class="khung">
								<table align="center">
									<tr>
										<td>Mã khách hàng</td>
										<td>Tên khách hàng</td>
										<td>Tài khoản</td>
										<td>password</td>
										<td>Giới tính</td>
										<td>Ngày sinh</td>
										<td>Email</td>
										<td>Địa chỉ</td>
										<td>Số điện thoại</td>
									</tr>
								
								';
						while($row =$result->fetch())
							{
								echo 
									'
									<form action="suakh.php" method="post">
										<tr>
											<td><input name="Makh" type="text" value="'.$row['Makh'].'"</td>
											<td><input name="Tenkh" type="text" value="'.$row['Tenkh'].'"</td>
											<td><input name="User" type="text" value="'.$row['User'].'" /></td>
											<td><input name="Password" type="text" value="'.$row['Password'].'" /></td>
											<td><input name="Gioitinh" type="text" value="'.$row['Gioitinh'].'"</td>
											<td><input name="Ngaysinh" type="text" value="'.$row['Ngaysinh'].'"</td>
											<td><input name="Email" type="text" value="'.$row['Email'].'"/></td>
											<td><input name="Diachi" type="text" value="'.$row['Diachi'].'"</td>
											<td><input name="Sdt" type="text" value="'.$row['Sdt'].'"</td>
											<td>
											<input type="submit" value="Sửa" style="width:50px;"/>
										</form>
											<a href="xoakh.php?xoakh='.$row['Makh'].'">
											<input type="submit" value="Xóa" style="width:50px;"/></a>
											</td>
										</tr>	
									';	
							}
					echo '</table>';
					echo'</div>';
				}
			
					}
					?>
	   
	<footer></footer>
</body>
</html>