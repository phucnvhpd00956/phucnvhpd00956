<?php
function get_products_by_category() {
    global $db;
    $query = '
        SELECT *
        FROM product';
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;

}

function get_product($product_id) {
    global $db;
    $query = '
        SELECT *
        FROM product WHERE productID = :product_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
}

function get_product_order_count($product_id) {
    global $db;
    $query = 'SELECT * FROM orderitem
        WHERE productID = :product_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $product = $statement->fetch();
        $statement->closeCursor();
        return $product;
}



function add_product($product_id, $category_id, $name, $price,
        $description, $images, $discount_percent) {
    global $db;
    $query = 'INSERT INTO product (productID, categoryID, name, price, infomation, images, discountPercent) 
              VALUES
              (:product_id, :category_id, :txt_name, :price, :description, :url, :discount_percent)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->bindValue(':category_id', $category_id);
        $statement->bindValue(':txt_name', $name);
        $statement->bindValue(':price', $price);
		$statement->bindValue(':description', $description);
		$statement->bindValue(':url', $images);
        $statement->bindValue(':discount_percent', $discount_percent);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $product_id = $db->lastInsertId();
        return $product_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_product($product_id, $code, $name, $desc,
                       $price, $discount, $category_id) {
    global $db;
    $query = '
        UPDATE Product
        SET name = :name,
            categoryID = :code,
            infomation = :desc,
            price = :price,
            images = :category_id,
			 discountPercent = :discount
        WHERE productID = :product_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':code', $code);
        $statement->bindValue(':desc', $desc);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':discount', $discount);
        $statement->bindValue(':category_id', $category_id);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products WHERE productID = :product_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
?>