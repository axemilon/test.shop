<?php
class DeliveryController {    
    public  function actionIndex(){
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/delivery.php';
        return true;
    }
}