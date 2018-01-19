<?php
class Category {
        
    public static function getCategoryList(){
        
        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM category');
        
        $categorytList = array();
        
        $i = 0;
        while ($row = $result->fetch()){
            $categorytList[$i]['id'] = $row['id'];
            $categorytList[$i]['name'] = $row['name'];
            $i++;
        }        
        return $categorytList; 
    }
    
    public static function getCategoryById($id){
        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM category WHERE id='.$id);             
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $category = $result->fetch();
        if ($category != null){
            return $category;
        }
        else {
            return "Product not Find!";
        }
        
    }
    public static function getSubCatById($id){
        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM subcategory WHERE id='.$id);      
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $sub_category = $result->fetch();
        if ($sub_category != null){
            return $sub_category;
        }
        else {
            return "Product not Find!";
        }
        
    }
    
    public static function getSubCatByCatId($id){        
        $db = DbSourse::getConnetion();        
        $result = $db->query('SELECT * FROM subcategory WHERE category_id='.$id);  
        
        $subCategoryList = array();
        
        $i = 0;
        while ($row = $result->fetch()){
            $subCategoryList[$i]['id'] = $row['id'];
            $subCategoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $subCategoryList; 
       
     }
}