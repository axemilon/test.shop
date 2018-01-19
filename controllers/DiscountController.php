<?php
class DiscountController {   
    public  function actionIndex(){               
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/discounts.php';     
        return true;
    }
}