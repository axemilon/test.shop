<?php
class InfoController {   
    public  function actionIndex(){               
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/info.php';     
        return true;
    }
}