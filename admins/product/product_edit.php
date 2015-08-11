
<?php include '../../view/sidebar_admin.php'; ?>
<div id="content">
    <?php
    if (isset($product_id)) {
        $heading_text = 'Edit Product';
    } else {
        $heading_text = 'Add Product';
    }
    ?>
    <h1>Product Manager - <?php echo $heading_text; ?></h1>
    <form action="index.php" method="post" id="add_product_form">
        <?php if (isset($product_id)) : ?>
            <input type="hidden" name="action" value="update_product" />
            <input type="hidden" name="product_id"
                   value="<?php echo $product_id; ?>" />
        <?php else: ?>
            <input type="hidden" name="action" value="add_product" />
        <?php endif; ?>
            <input type="hidden" name="category_id"
                   value="<?php echo $product['categoryID']; ?>" />

        
        <br />

        <label>Mã sản phẩm:</label>
        <input type="input" name="code"
               value="<?php echo $product['productID']; ?>" />
        <br />

        <label>Tên:</label>
        <input type="input" name="name" 
               value="<?php echo $product['name']; ?>" size="50" />
        <br />

        <label>Giá:</label>
        <input type="input" name="price" 
               value="<?php echo $product['price']; ?>" />
        <br />

        <label>Giảm giá:</label>
        <input type="input" name="discount_percent" 
               value="<?php echo $product['discountPercent']; ?>" />
        <br />

        <label>Ghi chú:</label>
        <textarea name="description" rows="10"
                  cols="50"><?php echo $product['infomation']; ?></textarea>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        
    </form>
</div>
<?php include '../../view/footer.php'; ?>