<?php

class DbSourse {

    public static function getConnetion(){  
        $servername = "localhost";
        $username = "root";
        $userpassword = "";
        $dbname = "testshop";
        $db = new PDO("mysql:host = $servername; dbname=$dbname", $username, $userpassword);
        $db->exec("set names utf8");
        return $db;
    }
}