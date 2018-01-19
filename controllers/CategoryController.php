<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/models/Category.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/models/Product.php';

class CategoryController {
    
    public  function actionList(){       
        $categoryList = Category::getCategoryList();
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/products/category/categoryList.php';
        return true;      
    }
    
    public  function actionCategoryView($categoryId){   
        $category = Category::getCategoryById($categoryId);
        $subCategoryList = Category::getSubCatByCatId($categoryId);
        $popularProducts = Product::getPopularProductList($categoryId, 3);
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/products/category/categorySingle.php';
        return true;
    }
    
    public  function actionGetProductsSubCategory($categoryId, $subcatId){
        $category = Category::getCategoryById($categoryId);
        $subcategory = Category::getSubCatById($subcatId);
        $productList  = Product::getProductByCategory($subcatId);
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/products/category/productList.php';
        return true;
    }   
}