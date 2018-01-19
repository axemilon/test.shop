<?php
    $method = $_POST['method'];
   
    if(method_exists($method))
    {
        return call_user_func($method);
    }
    
    function actionWishlist() {        
            $user = User::getUserById($_SESSION['user']);
            return 'deleted';
    }