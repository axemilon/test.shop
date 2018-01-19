<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/models/Category.php';
class AdminPanelController {    
    public  function actionIndex(){
        $categoryList = Category::getCategoryList();
       /** $subCategoryList = Category::getSubCatByCatId("5");*/
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/admin/admin_panel.php';
        return true;
    }
}

