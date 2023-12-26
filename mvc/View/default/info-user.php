<?php 
    if(isset($_POST['saveInfo'])) {
        $data = array(
            'name' => $_POST['username'],
            'phone' => $_POST['phone'],
            'fullName' => $_POST['fullName'],
            'address' => $_POST['address']
        );

        $userController = new UserController();
        $result = $userController->updateUser($data);
        
    }
?>
<div class="content">
    <div class="form-user">
        <div class="bg-top"></div>
        <form class="info_user" action="home.php?act=info" method="post">
            <span>Thông tin tài khoản</span>
            <input type="text" name="username" value="<?php echo $_SESSION['login']['user']?>" style="display:none">
            <?php 
                $userController = new UserController();
                $user = $userController->getUserByUserName($_SESSION['login']['user']);
            ?>
            <input type="text" name="phone" value="<?php echo $user['Phone']?>" placeholder="Số điện thoại">
            <input type="text" name="fullName" value="<?php echo $user['FullName']?>" placeholder="Họ tên">
            <input type="text" name="address" value="<?php echo $user['Address']?>" placeholder="Địa chỉ">
            <button type="submit" name="saveInfo" class="saveInfo" onclick="return confirm('Cập nhật thành công!')" style="background: #189eff">Cập nhật</button>
        </form>
        <div class="bg-bot"></div>
    </div>
</div>