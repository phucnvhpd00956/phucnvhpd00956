
<?php include 'view/sidebar_admin.php'; ?>
<div id="content">
 
    <?php if (isset($_SESSION['admin'])) : ?>
    <h2>Tài khoản của tôi:</h2>
    <p><?php echo $name . ' (' . $email . ')'; ?></p>
    <form action="" method="post">
        <input type="hidden" name="action" value="view_edit" />
        <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
        <input type="submit" value="Thay đổi" />
    </form>
    <?php endif; ?>
    <?php if ( count($admins) > 1 ) : ?>
        <h2>Danh sách tài khoản Administrators</h2>
        <table>
        <?php foreach($admins as $admin):
            if ( $admin['adminID'] != $admin_id ) :
                ?>
                <tr>
                    <td><?php echo $admin['adminID'] . ', ' .
                               $admin['name']; ?>
                    </td>
                    <td>
                        <form action="" method="post" class="inline">
                            <input type="hidden" name="action"
                                value="view_edit" />
                            <input type="hidden" name="admin_id"
                                value="<?php echo $admin['adminID']; ?>" />
                            <input type="submit" value="Sửa" />
                        </form>
                        <form action="" method="post" class="inline">
                            <input type="hidden" name="action"
                                value="view_delete_confirm" />
                            <input type="hidden" name="admin_id"
                                value="<?php echo $admin['adminID']; ?>" />
                            <input type="submit" value="Xóa" />
                        </form>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </table>
    <?php endif;

	?>
    <h2>Tạo tài khoản Administrator</h2>

    <form action="" method="post" id="add_admin_user_form">
        <input type="hidden" name="action" value="create" />
        <label for="email">Tên tài khoản:</label>
        <input type="text" name="adminID"
               value="" />
        <br />
        <label for="first_name">Họ và tên:</label>
        <input type="text" name="name"
               value="" />
        <br />
        <label for="last_name">Địa chỉ:</label>
        <input type="text" name="diaChi"
               value="" />
        <br />
        <label for="password_1">Password:</label>
        <input type="password" name="password_1" />

        <br />
        <label for="password_2">E-Mail:</label>
        <input type="email" name="email" />
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="Tạo" />
    </form>
</div>
<?php
if (isset($_SESSION['form_data'])) {
    unset($_SESSION['form_data']);
}
?>
<?php include 'view/footer.php'; ?>