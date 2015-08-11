<link rel="stylesheet" type="text/css" media="screen" href="../style.css">
<link rel="stylesheet" type="text/css" media="screen" href="../../css/style1.css">
<link rel="stylesheet" type="text/css" media="screen" href="../../css/main.css">

<?php
require_once('../../util/main.php');
require_once('util/secure_conn.php');
require_once('model/admin_db.php');

//if (isset($_SESSION['user'])) {
//    display_error('You cannot login to the admin section while ' .
//                  'logged in as a customer.');
//}

if ( admin_count() == 0 ) {
    if ( $_POST['action'] == 'create' ) {
        $action = 'create';
    } else {
        $action = 'view_account';
    }
} elseif ( isset($_SESSION['admin']) ) {
    if ( isset($_POST['action']) ) {
        $action = $_POST['action'];
    } elseif ( isset($_GET['action']) ) {
        $action = $_GET['action'];
    } else {
        $action = 'view_account';
    }
} elseif (isset($_POST['action'])) {
    if ($_POST['action'] == 'login') {$action = 'login';}
}
    else { $action = 'view_login'; }


switch ($action) {
    case 'view_login':
        include 'account_login.php';
        break;
    case 'login':
        // Get username/password
        $email = $_POST['email'];
        $password = $_POST['password'];

        // If valid username/password, log in
        if (is_valid_admin_login($email, $password)) {
            $_SESSION['admin'] = get_admin_by_email($email);
        } else {
            display_error('Login failed. Invalid email or password.');
        }

        // Display Admin Menu page
        redirect('..');
        break;
    case 'create':
        // Get admin user data
		$adminid = $_POST['adminID'];
		$password_1 = $_POST['password_1'];
        $name = $_POST['name'];
        $address = $_POST['diaChi'];
        $email = $_POST['email'];
        
  
		
        // Set admin user data in session
        $_SESSION['form_data'] = array();
        $_SESSION['form_data']['email'] = $email;
        $_SESSION['form_data']['name'] = $name;
        $_SESSION['form_data']['address'] = $address;

        // Validate admin user data
        // TODO: Improve this validation
		
		

        // Add admin user
			if (is_valid_email($email)) {
            
        }  else {
			$admin_id = add_admin($adminid, $password_1, $name, $address, $email);
        }
      

        // Set up session data
        unset($_SESSION['form_data']);
        if (!isset($_SESSION['admin'])) {
            $_SESSION['admin'] = get_admin($admin_id);
        }
        redirect('.');
        break;
    case 'view_account':
        // Get admin user data from session
		
        $name = $_SESSION['admin']['name'] ;
               
        $email = $_SESSION['admin']['email'];
        $admin_id = $_SESSION['admin']['adminID'];

        // Get all accounts from database
        $admins = get_all_admins();

        // View admin accounts
        include 'account_view.php';
        break;
    case 'view_edit':
        // Get admin user data
        $admin_id = $_POST['admin_id'];
        $admin = get_admin($admin_id);
        $first_name = $admin['name'];
        $last_name = $admin['address'];
        $email = $admin['email'];
        // Display Edit page
        include 'account_edit.php';
        break;
    case 'update':
        $admin_id = $_POST['admin_id'];
        update_admin(
            $admin_id,
            $_POST['email'],
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['password_1'],
            $_POST['password_2']
        );
        if ($admin_id == $_SESSION['admin']['adminID']) {
            $_SESSION['admin'] = get_admin($admin_id);
        }
        redirect($app_path . 'admin/account');
        break;
    case 'view_delete_confirm':
        $admin_id = $_POST['admin_id'];
        if ($admin_id == $_SESSION['admin']['adminID']) {
            display_error('You cannot delete your own account.');
        }
        $admin = get_admin($admin_id);
        $first_name = $admin['name'];
        $last_name = $admin['address'];
        $email = $admin['email'];
        include 'account_delete.php';
        break;
    case 'delete':
        $admin_id = $_POST['admin_id'];
        delete_admin($admin_id);
        redirect($app_path . 'admin/account');
        break;
    case 'logout':
        unset($_SESSION['admin']);
        redirect($app_path . 'admin/account');
        break;
    default:
        display_error('Unknown account action: ' . $action);
        break;
}
?>