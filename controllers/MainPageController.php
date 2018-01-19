<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/models/Product.php';

class MainPageController {
    
    public  function actionIndex(){       
        $productList = Product::getProductList();
        $newProducts = Product::getNewProductList(6);
        $popularProducts = Product::getPopularProductList(false, 6);
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/main_page.php';
        return true;
    }  
}