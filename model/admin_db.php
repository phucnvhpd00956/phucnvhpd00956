<?php
function is_valid_admin_login($email, $password) {
    global $db;
    $password = sha1($email . $password);
    $query = '
        SELECT * FROM admin
        WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}
function is_valid_email($email) {
    global $db;
    $query = '
        SELECT * FROM admin
        WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

function admin_count() {
    global $db;
    $query = 'SELECT count(*) AS adminCount FROM admin';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result['adminCount'];
}

function get_all_admins() {
    global $db;
    $query = 'SELECT * FROM admin ORDER BY name';
    $statement = $db->prepare($query);
    $statement->execute();
    $admins = $statement->fetchAll();
    $statement->closeCursor();
    return $admins;
}

function get_admin ($admin_id) {
    global $db;
    $query = 'SELECT * FROM admin WHERE adminID = :admin_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':admin_id', $admin_id);
    $statement->execute();
    $admin = $statement->fetch();
    $statement->closeCursor();
    return $admin;
}

function get_admin_by_email ($email) {
    global $db;
    $query = 'SELECT * FROM admin WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $admin = $statement->fetch();
    $statement->closeCursor();
    return $admin;
}

function is_valid_admin_email($email) {
    global $db;
    $query = '
        SELECT * FROM admin
        WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

function add_admin($adminid, $password_1, $name, $address, $email) {
    global $db;
    $password = sha1($email . $password_1);
    $query = '
        INSERT INTO admin (adminID,password,name,address,email)
        VALUES (:id,:password,:names,:address,:email)';
    $statement = $db->prepare($query);
	$statement->bindValue(':id', $adminid);
	$statement->bindValue(':password', $password);
	$statement->bindValue(':names', $name);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':email', $email);


    $statement->execute();
    $admin_id = $db->lastInsertId();
    $statement->closeCursor();
    return $admin_id;
}

function update_admin($admin_id, $email, $first_name, $last_name,
                      $password_1, $password_2) {
    global $db;
    $query = '
        UPDATE admin
        SET email = :email,
            name = :first_name,
            address = :last_name
        WHERE adminID = :admin_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':admin_id', $admin_id);
    $statement->execute();
    $statement->closeCursor();

    if (!empty($password_1) && !empty ($password_2)) {
        if ($password_1 !== $password_2) {
            display_error('Passwords do not match.');
        } elseif (strlen($password_1) < 6) {
            display_error('Password must be at least six characters.');
        }
        $password = sha1($email . $password_1);
        $query = '
            UPDATE admin
            SET password = :password
            WHERE adminID = :admin_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':admin_id', $admin_id);
        $statement->execute();
        $statement->closeCursor();
    }
}

function delete_admin($admin_id) {
    global $db;
    $query = 'DELETE FROM admin WHERE adminID = :admin_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':admin_id', $admin_id);
    $statement->execute();
    $statement->closeCursor();
}
?>