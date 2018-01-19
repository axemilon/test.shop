<?php


class Product {
    
   
    
    public static function getProductList(){
        
        $db = DbSourse::getConnetion();        
        $result = $db->query('SELECT * FROM products');
        
        $productList = array();
        
        $i = 0;
        while ($row = $result->fetch()){
            $productList[$i]['id'] = $row['id']; 
            $productList[$i]['name'] = $row['name']; 
            $productList[$i]['price'] = $row['price']; 
            $productList[$i]['description'] = $row['description']; 
            $productList[$i]['quantity'] = $row['quantity']; 
            $i++;
        }        
        return $productList;          
    }
    
    public static function getNewProductList($limit){
        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM products WHERE novelty = 1 ORDER BY date LIMIT '.$limit);
        /*$sql = 'SELECT * FROM products WHERE novelty = 1 ORDER BY date LIMIT :limit';
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_STR);
        $result->execute();*/
        
        $ProductsList = array();
        
        $i = 0;
        while ($row = $result->fetch()){
            $ProductsList[$i]['id'] = $row['id']; 
            $ProductsList[$i]['name'] = $row['name']; 
            $ProductsList[$i]['price'] = $row['price'];             
            $ProductsList[$i]['quantity'] = $row['quantity']; 
            $i++;
        }        
        return $ProductsList;  
    }
        public static function getPopularProductList($category, $limit){
        $db = DbSourse::getConnetion();
        //$result = $db->query('SELECT * FROM products  ORDER BY views DESC LIMIT '.$limit);
        if (!$category){
            $category = '%';
        }
        $sql = 'SELECT products.* 
                FROM products, subcategory,category 
                WHERE  subcategory.id = products.subcategory_id 
                AND subcategory.category_id = category.id 
                AND category.id LIKE :category
                ORDER BY products.views DESC
                LIMIT :limit';
        /*$sql = 'SELECT * FROM products WHERE subcategory_id LIKE :subCategory ORDER BY views DESC LIMIT :limit';*/
        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        
        $result->execute();
        
        $ProductsList = array();
        
        $i = 0;
        while ($row = $result->fetch()){
            $ProductsList[$i]['id'] = $row['id']; 
            $ProductsList[$i]['name'] = $row['name']; 
            $ProductsList[$i]['price'] = $row['price'];             
            $ProductsList[$i]['quantity'] = $row['quantity']; 
            $i++;
        }        
        return $ProductsList;  
    }

    public static function getProductByCategory($subcategory_id){
        
        $db = DbSourse::getConnetion();
        $sql = 'SELECT * FROM products WHERE subcategory_id = :subcategory_id';
        $result = $db->prepare($sql);
        $result->bindParam(':subcategory_id', $subcategory_id, PDO::PARAM_STR);
        $result->execute();
        $productList = array();
        $i = 0;
        while ($row = $result->fetch()){
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['code'] = $row['code'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['description'] = $row['description'];
            $productList[$i]['quantity'] = $row['quantity'];
            $productList[$i]['category'] = $row['subcategory_id'];  
            $productList[$i]['novelty'] = $row['novelty'];
            $i++;
        }
        return $productList;
    }
    
    public static function getProductById($id){

        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM products WHERE id='.$id);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $product = $result->fetch();
        if ($product != null){
            return $product;
        }       
        else {
            return "Product not Find!";
        }
        
    }
    
    public static function getProductSubCategory($id){
        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM subcategory WHERE id = (SELECT subcategory_id FROM products WHERE id ='.$id.')'); 
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $subCategory = $result->fetch();
        if ($subCategory != null){
            return $subCategory;
        }       
        else {
            return "SubCategory not Find!";
        }
        
    }
    public static function getProductCategory($id){
        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM category WHERE id = (SELECT category_id FROM subcategory WHERE id ='.$id.')'); 
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $category = $result->fetch();
        if ($category != null){
            return $category;
        }       
        else {
            return "Category not Find!";
        }              
    }
    public static function getProductInformation($id) {

        $db = DbSourse::getConnetion();
        $result = $db->query('SELECT * FROM product_information WHERE product_id='. $id);

        $informationList = array();
        $i = 0;
        while ($row = $result->fetch()){
            $informationList[$i]['id'] = $row['id'];
            $informationList[$i]['name'] = $row['name'];
            $informationList[$i]['value'] = $row['value'];           
            $i++;
        }
        return $informationList;
    }
}