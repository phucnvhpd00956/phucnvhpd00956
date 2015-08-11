
<?php include '../../view/sidebar_admin.php';?>
<div id="content">
    <h1>Product Manager - Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
         <input type="hidden" name="action" value="add_product" />

        <label>Mã sản phẩm:</label>
        <input type="text" name="productID"
               value="" />
        <br />

        <label>Loại :</label>
        <input type="text" name="categoryID" 
               value=""  />
        <br />

        <label>Tên:</label>
        <input type="text" name="name" 
               value="" />
        <br />

        <label>giá:</label>
        <input type="text" name="price" 
               value="" />
        <br />

		  <label>Ghi chú:</label>
        <input type="text" name="description" 
               value="" />
        <br />
		
       
		
		 <label>Giảm giá:</label>
		 <input type="text" name="discount_percent" 
               value="" />
       
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        
    </form>

</div>
<?php include '../../view/footer.php'; ?>
