<?php
if (session_status() == PHP_SESSION_NONE) {
    // Chỉ khởi tạo session nếu chưa tồn tại
    session_start();
}
include_once(__DIR__ . '/../Model/UserModel.php');

class UserController {
    public function register($username, $email, $password) {
        // Kiểm tra xem username hoặc email đã tồn tại trong cơ sở dữ liệu chưa
        if (UserModel::isCheckUserName($username) || UserModel::isCheckEmail($email)) {
            return false;
        } else {
            UserModel::addUser($username, $email, $password);
            return true;
        }
    }

    public static function login($email, $password) {
        // Kiểm tra xem thông tin đăng nhập có hợp lệ không
        if (UserModel::isValidLogin($email, $password)) {
            $userName = UserModel::getUserNamebyEmail($email);
            if($userName !== null) {
                $userRole = UserModel::getRolebyEmail($email);
                $userId = UserModel::getIdUserbyUserName($userName);
                $userCart = UserModel::getCartByIdUser($userId);
                if($userRole !== null || $userCart !== null) {
                    //lưu lại tên đăng nhập và quyền vào biến SESSION
                    $_SESSION['login']['user'] = $userName;
                    $_SESSION['login']['role'] = $userRole;
                    $_SESSION['login']['id'] = $userId;
                    $_SESSION['login']['cart'] = $userCart;
                    if (!($userRole == 1)) {
                        header('Location: home.php');
                    } else {
                        header('Location: ../layouts/dashboard.php');
                    }
                    exit();
                }
            }
            return true;
        }
        return false; 
    }

    public function getAllUser() {
        $userModel = new UserModel();
        return $userModel->getAllUser();     
    }

    public function updateUser($data) {
        $userModel = new UserModel();
        $success = $userModel->updateUser($data);
        
        if ($success) {
            return true;
        }
    }

    public function getUserByUserName($username) {
        $userModel = new UserModel();
        return $userModel->getUserByUserName($username);     
    }
    
}
?>
