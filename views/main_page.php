<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/header.php' ?>
	<!--content-->
	<div class="content">
		<div class="container">
		<div class="women-in">
			<div class="col-md-9 col-d">
                            <!--Banner start-->
                            <div class="banner">
                            <div id="block-for-slider">
                                <div id="viewport">
                                    <ul id="slidewrapper">
                                        <li id="slide" class="slide">
                                            <a href="products/10">
                                                <img src="/images/slides/slaid2.png" alt="1" class="slide-img"> 
                                            </a>
                                        </li>
                                        <li id="slide" class="slide"><img src="/images/slides/slaid1.png" alt="1" class="slide-img"></li>
                                        <li id="slide" class="slide"><img src="https://hsto.org/files/ec5/592/f1e/ec5592f1e814401eb38305682a8e88d4.jpg" alt="2" class="slide-img"></li>
                                        <li id="slide" class="slide"><img src="https://hsto.org/files/eda/61a/3c5/eda61a3c53db408d820643998d9acd81.jpg" alt="3" class="slide-img"></li>
                                        
                                        
                                    </ul>

                                    <div id="prev-next-btns">
                                        <div id="prev-btn"></div>
                                        <div id="next-btn"></div>
                                    </div>

                                    <ul id="nav-btns">
                                        <li class="slide-nav-btn"></li>
                                        <li class="slide-nav-btn"></li>
                                        <li class="slide-nav-btn"></li>
                                        <li class="slide-nav-btn"></li>                                 
                                    </ul>
                                </div>
                            </div>
                            <script type="text/javascript" src="/views/js/slider.js"></script>
                            </div>
                            <!--Banner end-->				
				<!---->
                            <div class="in-line">
                                    <div class="para-an">
                                        <h3>Новинки</h3>                                            
                                    </div>
                                    <div class="lady-in"> 
                                        <?php foreach ($newProducts as $newProduct):?>
                                            <div class="col-md-4 you-para">
                                                <a href="/products/<?php echo $newProduct['id'];?>"><img class="main-page-prod-img" src="/images/product/<?php echo $newProduct['id']?>.png" alt=" " ></a>
                                                    <!--<div class="you-in">
                                                            <span>15<label>%</label></span>
                                                    <small>off</small>
                                                    </div>-->
                                                    <p><?php echo $newProduct['name']?></p>
                                                    <span><?php echo $newProduct['price']?> грн.  | <label class="cat-in"> </label> <a href="/products/<?php echo $newProduct['id'];?>">Подробнее </a></span>
                                            </div>
                                        <?php endforeach;?>                                                                                    
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="para-an">
                                        <h3>Популярные товары</h3>                                            
                                    </div>
                                    <div class="lady-in">  
                                        <?php foreach ($popularProducts as $popularProduct):?>
                                            <div class="col-md-4 you-para">
                                                <a href="/products/<?php echo $popularProduct['id']; ?>"><img class="main-page-prod-img" src="/images/product/<?php echo $popularProduct['id']; ?>.png" alt=" " ></a>
                                                    <p><?php echo $popularProduct['name']; ?></p>
                                                    <span><?php echo $popularProduct['price']; ?> грн.  | <label class="cat-in"> </label> <a href="/products/<?php echo $popularProduct['id']; ?>">Подробнее </a></span>
                                            </div>
                                        <?php endforeach;?>                                                                                        
                                            <div class="clearfix"> </div>
                                    </div>
                            </div>
			</div>
            <!--Disconts -->
			<div class="col-md-3 col-m-left"> 
                            <div class="para-an">
                                <h3>Акции</h3>                                            
                            </div>             
                            <div class="discount">
                                    <a href="/">
                                        <img class="img-responsive pic-in" src="/views/img/p2.jpg" alt=" " >	
                                    </a>                                            					
                                    <a href="/" class="know-more">Подробнее</a>
                            </div>
                            <div class="discount">
                                <a href="/">
                                    <img class="img-responsive pic-in" src="/images/discounts/lenovo.png" alt=" " >	
                                </a>                                            					
                                <a href="/" class="know-more">Подробнее</a>
                            </div>
                            <div class="discount">
                                <a href="/">
                                    <img class="img-responsive pic-in" src="/images/discounts/hp.png" alt=" " >	
                                </a>                                            					
                                <a href="/" class="know-more">Подробнее</a>
                            </div>
                            <div class="discount">
                                <a href="/">
                                    <img class="img-responsive pic-in" src="/images/discounts/asus.png" alt=" " >	
                                </a>                                            					
                                <a href="/" class="know-more">Подробнее</a>
                            </div>
			</div>
            <!--Disconts end -->
			<div class="clearfix"> </div>
			</div>
			<!---->
	</div>
	</div>
	<!---->
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/footer.php' ?>