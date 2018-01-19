<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/models/Product.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/models/Comments.php';


class ProductController {
    
    public  function actionList(){
        
        $productList = Product::getProductList();
        
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/products/list.php';       
        return true;
    }
    
    public  function actionProductView($parameters){
        $product = Product::getProductById($parameters);
        $subCategory = Product::getProductSubCategory($product['id']);
        $category = Product::getProductCategory($subCategory['id']);
        $productInformation = Product::getProductInformation($product['id']);
        $productComments = Comments::getProductComments($product['id']);        
        
        $commentStatus = false;
        if (isset($_POST['add-comment'])){    
            $commentStatus = Comments::addCommentToProduct($product['id'], $_SESSION['user'],$_POST['comment-text']);
            unset($_POST);
        }        
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/products/single.php';  
        return true;
    }
}