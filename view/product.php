<?php
    // Parse data
    $category_id = $product['productID'];
    $product_code = $product['productID'];
    $product_name = $product['name'];
    $description = $product['infomation'];
    $list_price = $product['price'];
	
    $discount_percent = $product['discountPercent'];

    // Add HMTL tags to the description
    $description = add_tags($description);

    // Calculate discounts
    $discount_amount = round($list_price * ($discount_percent / 100), 2);
    $unit_price = $list_price - $discount_amount;

    // Format discounts
    $discount_percent = number_format($discount_percent, 0);
    $discount_amount = number_format($discount_amount, 2);
    $unit_price = number_format($unit_price, 2);

    // Get image URL and alternate text
    $image_filename = $product_code . '_m.png';
    $image_path = $app_path . 'img/sanpham/' . $image_filename;
    $image_alt = 'Image filename: ' . $image_filename;
?>

<h1><?php echo $product_name; ?></h1>
<div id="left_column">
    <p><img src="<?php echo $image_path; ?>"
            alt="<?php echo $image_alt; ?>"  width='150px'  /></p>
</div>

<div id="right_column">
    <p><b>Giá gốc:</b>
        <?php echo '$' . $list_price; ?></p>
    <p><b>Giảm giá:</b>
        <?php echo $discount_percent . '%'; ?></p>
    <p><b>Giá:</b>
        <?php echo '$' . $unit_price; ?>
        (Giảm
        <?php echo '$' . $discount_amount; ?>)</p>
    <form action="<?php echo $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
        <input type="hidden" name="action" value="add" />
        <input type="hidden" name="product_id"
               value="<?php echo $product_id; ?>" />
      
    </form>
    <h2>Thông tin sản phẩm</h2>
    <?php echo $description; ?>
</div>