<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/header.php' ?>
<!--content-->
	<div class="content">
        <div class="container">
            <div class="single">
                <div class="user-cabinet">
                    <div class="cabinet-top">
                        <h3>Кабинет пользователя</h3>
                        <a class="dark-btn" href="/logout">Выйти</a> 
                    </div>                
                <h4>Здравствуйте, <?php echo $user['name']; ?>!</h4>
                <div class="cabinet-main">
                    <div class="cabinet-menu">
                        <a class="dark-btn" href="/cabinet/user">Мои данные</a>                        
                        <a class="dark-btn" href="/cabinet/orders">Заказы</a>
                        <a class="dark-btn" href="/cabinet/wishlist">Мои желания</a>
                        <a class="dark-btn" href="/cabinet/comments">Мои отзывы</a>
                    </div>
                    <div class="cabinet-content">
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/cabinet/'.$content ?>
                    </div>
                </div>                
                </div>
            </div>
	   </div>
	</div>
	<!---->
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/footer.php' ?>

