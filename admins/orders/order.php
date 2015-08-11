
<?php include 'view/sidebar_admin.php'; ?>
<div id="content">
    <h1>Order Information</h1>
    <p>Order Number: <?php echo $order_id; ?></p>
    <p>Order Date: <?php echo $order_date; ?></p>
    <p>Customer Name: <?php echo $customer_name; ?></p>
    <p>Customer Address: <?php echo $customer_address; ?></p>
    <p>Customer Phone: <?php echo $customer_phone; ?></p>
    
    <h2>Order Items</h2>
    <table id="cart">
        <tr id="cart_header">
            <th class="left">Tên sản phẩm</th>
            <th class="right">Giá</th>
            <th class="right">Thuế</th>
            <th class="right">Tổng</th>
            <th class="right">Số lượng</th>
            <th class="right">Thành tiền</th>
        </tr>
        <?php
        $subtotal = 0;
        foreach ($order_items as $item) :
            $product_id = $item['productID'];
            $product = get_product($product_id);
            $item_name = $product['name'];
            $list_price = $item['price'];
            $savings = $item['itemID'];
            $your_cost = $list_price - $savings;
            $quantity = $item['number'];
            $line_total = $your_cost * $quantity;
            $subtotal += $line_total;
            ?>
            <tr>
                <td><?php echo $item_name; ?></td>
                <td class="right">
                    <?php echo sprintf('%.2f', $list_price); ?>
                </td>
                <td class="right">
                    <?php echo sprintf('%.2f', $savings); ?>
                </td>
                <td class="right">
                    <?php echo sprintf('%.2f', $your_cost); ?>
                </td>
                <td class="right">
                    <?php echo $quantity; ?>
                </td>
                <td class="right">
                    <?php echo sprintf('%.2f', $line_total); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr id="cart_footer">
            <td colspan="5" class="right">Total:</td>
            <td class="right">
                <?php echo sprintf('%.2f', $subtotal); ?>
            </td>
        </tr>
</table>
</div>
<?php include 'view/footer.php'; ?>