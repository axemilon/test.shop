<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
class UserController {
    
    public function actionLogin() {
        $password = '';
        $email = '';
        $errors = false;
        $result = false;
        
        if (isset($_POST['submit'])){
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неверный формат email!';
            } 
            if (!User::checkPasswordCorectly($password)) {
                $errors[] = 'Пароль должен быть не короче 6ти символов!';
            } 
            if ($errors == false) {
            if (!User::checkEmailExist($email)){
                $errors[] = 'Неверный email!';
            }
            else {
                if (!User::checkPassword($email, $password)){
                $errors[] = 'Неверный пароль!';
                }
            }

            if ($errors == false){
                $user = User::getUserByEmail($email);
                $_SESSION['user'] = $user['id'];
                //User::authentication($user['id']);
                header("Location: /cabinet/");
            }
            }
            
        }   
        
        include_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/login.php';
        return true;
    }
    
    public static function actionLogout(){
        unset($_SESSION['user']);
        header("Location: /");
        return true;
    }

    public function actionRegister() {
        $name = '';
        $password = '';
        $email = '';
        $errors = false;
        $result = false;
        
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неверный email!';
            } 
            if (!User::checkName($name)) {
                $errors[] = 'Имя должно быть не короче 4х символов!';
            } 
            if (!User::checkPasswordCorectly($password)) {
                $errors[] = 'Пароль должен быть не короче 6ти символов!';
            } 
            if (User::checkEmailExist($email)){
                $errors[] = 'Такой email уже используется!';
            }
            if ($errors == false){
            $result = User::register($email, $name, $password);
            }
            
        }   

        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/register.php';
        return true;
    }
    


}

