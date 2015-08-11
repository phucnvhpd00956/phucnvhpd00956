
<?php include 'view/sidebar_admin.php'; ?>
<div id="content">
   
    
    <!-- display product -->
    <?php include '../../view/product.php'; ?>

    <!-- display buttons -->
    <br />
    <div id="edit_and_delete_buttons">
        <form action="." method="post" id="edit_button_form" >
            <input type="hidden" name="action" value="show_edit_form"/>
            <input type="hidden" name="product_id"
                   value="<?php echo $product['productID']; ?>" />
            <input type="hidden" name="category_id"
                   value="<?php echo $product['categoryID']; ?>" />
            <input type="submit" value="Thay đổi" />
        </form>
        <?php
		if (isset($product_count['productID'])) : ?>
        <form action="." method="post" id="delete_button_form" >
            <input type="hidden" name="action" value="delete_product"/>
            <input type="hidden" name="product_id"
                   value="<?php echo $product['productID']; ?>" />
            <input type="hidden" name="category_id"
                   value="<?php echo $product['categoryID']; ?>" />
            <input type="submit" value="Delete Product" />
        </form>
        <?php endif; ?>
    </div>
    <div id="image_manager">
        <h1>Quản lý hình ảnh </h1>
		
        <form action="" method="post" enctype="multipart/form-data" id="upload_image_form">
            <input type="hidden" name="action" value="upload_image"/>
            <input type="file" name="file1"/><br />
            <input type="hidden" name="product_id"
                   value="<?php echo $product['productID']; ?>" />
            <input type="submit" value="Upload hình ảnh"/>
        </form>
        <p><a href="../../img/sanpham/<?php echo $product['productID']; ?>.png">
            Xem ảnh lớn</a></p>
        <p><a href="../../img/sanpham/<?php echo $product['productID']; ?>_s.png">
            Xem ảnh nhỏ</a></p>
    </div>
</div>
<?php include '../../view/footer.php'; ?>