<?php
class NewsController {   
    public  function actionIndex(){               
        include_once $_SERVER['DOCUMENT_ROOT'].'/views/news.php';     
        return true;
    }
}