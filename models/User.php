<?php

class User {
    
    public static function register($email, $name, $password){
        $db = DbSourse::getConnetion();
        $sql = 'INSERT INTO users (email,name,password, registration_date) VALUES (:email, :name, :password, :registration_date)';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':registration_date', date("Y-m-d"), PDO::PARAM_STR);
        
        return $result->execute();
    } 

    public static function checkName($name){
        if (strlen($name) >= 4) {
            return true;
        }
        return false;        
    }
    public static function checkPasswordCorectly($password){
        if (strlen($password) >= 6) {
            return true;
        }
        return false;        
    }
    public static function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;        
    }
    
    public static function checkEmailExist($email){
        $db = DbSourse::getConnetion();
        $sql = 'SELECT COUNT(id) FROM users WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        
        if ($result->fetchColumn()){
            return true;
        }
        return false;
    }
    public static function checkPassword($email, $password){
        $db = DbSourse::getConnetion();
        $sql = 'SELECT COUNT(id) FROM users WHERE email = :email AND password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        
        if ($result->fetchColumn()){
            return true;
        }
        return false;
    }
    
    public static function getUserById($id){
        $db = DbSourse::getConnetion();
        $sql = 'SELECT * FROM users WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();                
   
        $user = $result->fetch();
        if ($user != null){
            return $user;
        }       
        else {
            return "User not Find!";
        }
    }
    public static function getUserByEmail($email){
        $db = DbSourse::getConnetion();
        $sql = 'SELECT * FROM users WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();                
   
        $user = $result->fetch();
        if ($user != null){
            return $user;
        }       
        else {
            return "User not Find!";
        }
    }
     public static function authentication($id){
         $_SESSION['user'] = $id;
    }
    
    public static function checkLogged() {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        } else {
            return false;
        }
    }

}

