<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
class CabinetController {   
    
    
    public  function actionIndex(){
        if (!User::checkLogged()){
            header("Location: /login/");
        }
        else{           
            $user = User::getUserById($_SESSION['user']);  
            $content = 'userDatas.php';
            include_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/cabinet.php';   
            return true;
        }
    }
    
    public function actionUserDatas() {
        if (!User::checkLogged()) {
            header("Location: /login/");
        } else {
            $user = User::getUserById($_SESSION['user']); 
            $content = 'userDatas.php';
            include_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/cabinet.php';            
            return true;
            
        }
    }

    public function actionUserOrders() {
        if (!User::checkLogged()) {
            header("Location: /login/");
        } else {
            $user = User::getUserById($_SESSION['user']);
            include_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/cabinet.php';
            return true;
        }
    }

    public function actionWishlist() {
        if (!User::checkLogged()) {
            header("Location: /login/");
        } else {
            $user = User::getUserById($_SESSION['user']);
            $wishlist = Wishlist::getUserWishlist($user['id']);
            $content = 'userWishlist.php';
            include_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/cabinet.php';
            return true;
        }
    }
    public function actionDeleteWishAjax() {
            $user = User::getUserById($_SESSION['user']);            
            $result = Wishlist::deleteWish($user['id'], $_POST['wish_id']);
            echo $result;
            return  true;
    }
    public function actionAddWishAjax() {
            $user = User::getUserById($_SESSION['user']);            
            $result = Wishlist::addWish($user['id'], $_POST['product_id']);
            echo $result;
            return true;
    }
    
    public function actionUserComments() {
        if (!User::checkLogged()) {
            header("Location: /login/");
        } else {
            $user = User::getUserById($_SESSION['user']);
            $content = 'userComments.php';
            $comments = Comments::getUserComments($user['id']);
            include_once $_SERVER['DOCUMENT_ROOT'] . '/views/user/cabinet.php';            
            return true;
        }
    }

}