<?php
function san_pham() {
    global $db;
    $query = 'SELECT * FROM san_pham';
	$statement = $db->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	return $result;
}
function san_phamHT($id) {
    global $db;
    $query = 'SELECT * FROM product where Masp='.$id;
	$statement = $db->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$statement->closeCursor();
	return $result;
}
?>