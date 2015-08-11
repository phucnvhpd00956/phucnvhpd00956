 <DOCTYLE html>
 <html>
 <meta charset="utf-8" />
 <title>xử lý đang nhập</title>
 <?php 	
 		session_start();
        //kiễm tra thông tin đăng nhập
            //Lấy thông tin từ form truyền sang
        $TenTaiKhoan=$_POST['User'];
        $MatKhau=$_POST['Password'];
        //Lấy thông tin đăng nhập từ cơ sở dữ liệu
      	$dsn = 'mysql:host=localhost;dbname=liptonshop';
   		$username= 'root';
   		$password = '';
   	 	$db = new PDO($dsn, $username, $password);
	 
        $query= "SELECT * FROM khach_hang WHERE User ='$TenTaiKhoan' AND Password='$MatKhau' ";
        $result = $db->query($query);
        $result_row =$result->fetch();
        //so sánh tên mật khảu, nếu sai thì trở lại trang đăng nhập, nếu đúng thì tiến hành liệt kê danh sách sinh viên
        // so sánh không đúng thì trở lại trang đăng nhập
        if (empty ($result_row))
        {
            echo 'Thông tin không đúng(Tài khoản hoặc mật khẩu không đúng) ';
          
        }
            else {
			
			$id=$result_row['User'];
			$_SESSION["dangnhap"] =$id;
			header ("Location:quantriadmin.php");
            }
        


        ?>
 <body>
 	
 </body>
 </html>