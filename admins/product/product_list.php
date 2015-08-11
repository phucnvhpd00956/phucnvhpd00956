
<?php include 'view/sidebar_admin.php'; ?>

<div id="content">
 
	
  <h1>Thêm sản phẩm</h1>
    <p><a href="index.php?action=show_add_form">+++++</a></p>
	
	


    <?php if (count($products) == 0) : ?>
        <p>Không có sản phẩm nào.</p>
    <?php else : ?>
        <h1 class="top">Danh sách sản phẩm</h1>
            <?php foreach ($products as $product) : ?>
            <p>
                <a href="?action=view_product&amp;product_id=<?php
                          echo $product['productID']; ?>">
                    <?php echo $product['name']; ?>
                </a>
            </p>
            <?php endforeach; ?>
    <?php endif; ?>

  

</div>
<?php include '../../view/footer.php'; ?>