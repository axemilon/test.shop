<?php

class Wishlist{
    public static function getUserWishlist($userID){        
        $db = DbSourse::getConnetion();
        
        $sql = 'SELECT * FROM wishlist WHERE user_id = :userID';
        $result = $db->prepare($sql);
        $result->bindParam(':userID', $userID, PDO::PARAM_STR);
        $result->execute();
        $wishlist = array();        
        
        $i = 0;
        while ($row = $result->fetch()){
            $product = Product::getProductById($row['product_id']);
            $wishlist[$i]['id'] = $row['id'];            
            $wishlist[$i]['user_id'] = $row['user_id'];  
            $wishlist[$i]['product'] = $product;
            $i++;
        }        
        return $wishlist; 
    }
    public static function addWish($userID,$productID){        
        $db = DbSourse::getConnetion();

        $sql = 'INSERT INTO wishlist (user_id, product_id) VALUES (:user_id, :product_id)';
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $userID, PDO::PARAM_STR);
        $result->bindParam(':product_id', $productID, PDO::PARAM_STR);
        return $result->execute();
    }
    public static function deleteWish($userID, $id){        
        $db = DbSourse::getConnetion();

        $sql = 'DELETE FROM wishlist WHERE user_id = :userID AND id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':userID', $userID, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        return $result->execute();
    }
    public static function wishExist($userID,$productID){
        $db = DbSourse::getConnetion();

        $sql = 'SELECT COUNT(id) FROM wishlist WHERE user_id = :userID AND product_id = :productID';
        $result = $db->prepare($sql);
        $result->bindParam(':userID', $userID, PDO::PARAM_STR);
        $result->bindParam(':productID', $productID, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn()){
            return true;
        }
        return false;        
    }
    
}

