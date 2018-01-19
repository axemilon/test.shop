<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/models/USer.php';
class Comments {
        
    public static function getProductComments($productId){        
        $db = DbSourse::getConnetion();
        
        $sql = 'SELECT * FROM comments WHERE product_id = :productId ORDER BY create_date';
        $result = $db->prepare($sql);
        $result->bindParam(':productId', $productId, PDO::PARAM_STR);
        $result->execute();
        $commentstList = array();        
        
        $i = 0;
        while ($row = $result->fetch()){
            $user = User::getUserById($row['user_id']);
            $commentstList[$i]['id'] = $row['id'];
            $commentstList[$i]['user_id'] = $row['user_id'];
            $commentstList[$i]['text'] = $row['comment'];
            $commentstList[$i]['create_date'] = $row['create_date'];
            $commentstList[$i]['user_name'] = $user['name'];
            $i++;
        }        
        return $commentstList; 
    }
    public static function getUserComments($userID){        
        $db = DbSourse::getConnetion();
        
        $sql = 'SELECT * FROM comments WHERE user_id = :userID ORDER BY create_date';
        $result = $db->prepare($sql);
        $result->bindParam(':userID', $userID, PDO::PARAM_STR);
        $result->execute();
        $commentstList = array();        
        
        $i = 0;
        while ($row = $result->fetch()){
            $product = Product::getProductById($row['product_id']);
            $commentstList[$i]['id'] = $row['id'];
            $commentstList[$i]['product'] = $product;
            $commentstList[$i]['user_id'] = $row['user_id'];
            $commentstList[$i]['text'] = $row['comment'];
            $commentstList[$i]['create_date'] = $row['create_date'];            
            $i++;
        }        
        return $commentstList; 
    }
    
    public static function addCommentToProduct($product_id, $user_id, $comment){
        $db = DbSourse::getConnetion();
        $sql = 'INSERT INTO comments (product_id, user_id, comment, create_date) VALUES (:product_id, :user_id, :comment, :create_date)';
        $result = $db->prepare($sql);
        $result->bindParam(':product_id', $product_id, PDO::PARAM_STR);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':comment', $comment, PDO::PARAM_STR);
        $result->bindParam(':create_date', date("Y-m-d H:i:s"), PDO::PARAM_STR); 
        return $result->execute();
    }
}
