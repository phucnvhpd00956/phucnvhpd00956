
<?php include 'view/sidebar_admin.php'; ?>
<div id="content">
    <h1>Delete Account</h1>
    <p>Bạn có muốn xóa tài khoản này 
       <?php echo $last_name . ', ' . $first_name .
                  ' (' . $email . ')'; ?>?</p>
    <form action="" method="post">
        <input type="hidden" name="action" value="delete" />
        <input type="hidden" name="admin_id"
               value="<?php echo $admin_id; ?>" />
        <input type="submit" value="Delete Account" />
    </form>
    <form action="" method="post">
        <input type="submit" value="Cancel" />
    </form>
</div>
<?php include 'view/footer.php'; ?>