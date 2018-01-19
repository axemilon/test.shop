<!DOCTYPE html>
<html>
    <head>
        <title>EShop Main</title>
        <link href="/views/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/views/js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/views/css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/views/css/cabinet.css" rel="stylesheet" type="text/css" media="all" />
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Fashion Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!--//fonts-->
    </head>
    <body> 
        <!--header-->
        <div class="header">
            <div class="container">
                <div class="header-bottom">			
                    <div class="logo">
                        <a href="/"><img src="/views/img/logo3.png" alt=" " ></a>
                    </div>
                    <div class="ad-right">
                        <div class="header-contacts">
                            <ul>
                                <li><span class="header-phonenumber">+380930000000</span></li>
                                <li><span class="header-phonenumber">+380930000000</span></li>
                                <li><span class="header-mail">test-shop@mail.com</span></li>  
                            </ul>                            
                        </div>    
                        <?php if (User::checkLogged()):?>
                        <div class="user_logo">
                            <a href="/cabinet">
                                <img src="/views/img/profile_small.png" alt=" " >
                                <p>Личный кабинет</p>                                                                  
                            </a>
                        </div>       
                        <?php else:?>
                        <div class="user_logo">
                            <a href="/login">
                                 <img src="/views/img/profile_small.png" alt=" " >
                                 <p>Войти</p>                                                                  
                            </a>
                        </div>
                        <?php endif;?>                        
                        <div class="basket_logo">  
                            <a href="/">
                                <img src="/views/img/bascket.png" alt=" " >
                                <p>Корзина</p>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>	
                <div class="header-bottom-bottom">
                    <div class="top-nav">
                        <span class="menu" id="menu-h"> 111111111</span>
                        <ul class="top_menu">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/category" >Каталог товаров</a></li>
                            <li><a href="/payment" >Оплата</a></li>
                            <li><a href="/delivery" >Доставка</a></li>
                            <li><a href="/info" >О нас</a></li>
                            <li><a href="/news" >Новости</a></li>
                            <li><a href="/discount" >Акции</a></li>                        
                        </ul>	
                        <script>
                            $(function () { // Когда страница загрузится
                                $('.top_menu a').each(function () { // получаем все нужные нам ссылки
                                    var location = window.location.href; // получаем адрес страницы
                                    var link = this.href;  // получаем адрес ссылки
                                    if (location == link) { // при совпадении адреса ссылки и адреса окна
                                        $(this).parent("li").addClass('active'); // добавляем класс
                                    }
                                });
                            });
                            $("#menu-h").click(function () {
                                $(".top-nav ul").slideToggle(500, function () {
                                });
                            });
                        </script>

                        <div class="clearfix"> </div>					
                    </div>
                    <div class="search">
                        <form>
                            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = '';
                                                        }" >
                            <input type="submit"  value="">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>