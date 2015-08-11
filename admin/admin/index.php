<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Xử lý login</title>
    </head>
    <body>
        <?php
        //kiễm tra thông tin đăng nhập
            //Lấy thông tin từ form truyền sang
        $adminID=$_POST['adminID'];
        $password=$_POST['password'];
        
        //Lấy thông tin đăng nhập từ cơ sở dữ liệu
        set_include_path('C:\xampp\htdocs\phucnvhpd00956_ASSIGNMENT1\model');
        require 'database.php';
        $query= "SELECT * FROM admin WHERE adminID ='$adminID' AND password='$password' ";
        $result = $db->query($query);
        $result_row =$result->fetch();
        
        //so sánh tên mật khảu, nếu sai thì trở lại trang đăng nhập, nếu đúng thì tiến hành liệt kê danh sách sanpham
        // so sánh không đúng thì trở lại trang đăng nhập
        if (empty ($result_row))
        {
            echo 'Thông tin không đúng';
            header ("Location:../index.php");
        }
        else {
            //liệt kê danh sách sinh viên 
            $query = "SELECT * FROM product";
            $result = $db->query($query);
            foreach ($result as $row)
            {
                $productID = $row['productID'];
                $categoryID= $row['categoryID'];
                $DiaChi = $row['DiaChi'];
                $Tuoi = $row['Tuoi'];
                $GioiTinh = $row['GioiTinh'];
                $QuocGia =$row['QuocGia'];
                
                    echo "productID: $productID", "&nbsp;";
                    echo "categoryID: $categoryID","&nbsp;" ;
                    echo "name: $name", "&nbsp;";
                    echo "price: $price", "&nbsp;";
                    echo "&nbsp;";
                    echo "infomation: $infomation";
					echo "images: $images";
					echo "discountPercent: $discountPercent";
                    echo '</br>';
        
            }
        }
        ?>
    </body>
</html>
