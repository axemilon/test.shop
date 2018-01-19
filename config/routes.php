<?php

return array(
    'category/([0-9]+)/([0-9]+)' => 'category/GetProductsSubCategory/$1/$2',
    'category/([0-9]+)' => 'category/CategoryView/$1',
    'category' => 'category/list',
    'products/([0-9]+)' => 'product/ProductView/$1',
    'products' => 'product/list',
    'payment' => 'payment/index',
    'discount' => 'discount/index',   
    'delivery' => 'delivery/index',  
    'info' => 'info/index', 
    'news' => 'news/index', 
    'admin_panel' => 'adminPanel/index',
    'register' => 'user/register',    
    'logout' => 'user/logout',
    'login' => 'user/login',    
    'cabinet/user' => 'cabinet/userDatas',
    'cabinet/orders' => 'cabinet/userOrders',
    'deletewish' => 'cabinet/deleteWishAjax', 
    'addwish' => 'cabinet/addWishAjax', 
    
    'cabinet/wishlist' => 'cabinet/wishlist',       
    'cabinet/comments' => 'cabinet/userComments',
    'cabinet' => 'cabinet/index',
    '' => 'mainPage/index',    
)


?>