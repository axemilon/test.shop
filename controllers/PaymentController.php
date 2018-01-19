<?php
class PaymentController {    
    public  function actionIndex(){  
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/payment.php';       
        return true;
    }
}