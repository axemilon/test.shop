<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/header.php' ?>
	<!--content-->
	<div class="content">
		<div class="container">
			<div class="  col-m-on">
				<!---->
				<div class="in-line">
					<div class="para-all">
						<h3>
    						<a href="/category/">Категории</a>
    						 -> <?php echo $category['name']?>
						</h3>					
						<p>Всего категорий: <?php echo count($subCategoryList); ?></p>
					</div>
					<div class="lady-on ">
					
					<?php foreach ($subCategoryList as $subCategory): ?>
						<div class="col-md-4  you-men category-disp hover-shadow">
							<a href="/category/<?php echo $categoryId ?>/<?php echo $subCategory['id']?>">
                                                            <img class="img-responsive" src="/images/subcategory/<?php echo $subCategory['id']?>.png" alt=" " >
                                                        </a>	
                                                        <a href="/category/<?php echo $categoryId ?>/<?php echo $subCategory['id']?>">
                                                            <h4><?php echo $subCategory['name']?></h4>
                                                        </a>                                                    
                                                </div>	
					<?php endforeach; ?>	
								
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!---->
			<div class="lady-in-on">
			<div class="buy-an">
						<h3>Продукты с категории <?php echo $category['name']?></h3>
						<p>Вам так-же могут быть интересны:</p>
					</div>
                            
                        <ul id="flexiselDemo1">	
                            <?php foreach ($popularProducts as $popularProduct): ?>		
                            <li>
                                <a href="/products/<?php echo $popularProduct['id'];?>">
                                    <img class="img-responsive main-page-prod-img" src="/images/product/<?php echo $popularProduct['id'];?>.png" alt="">
                                </a>
                                <div class="hide-in">
                                    <p><?php echo $popularProduct['name'];?></p>
                                    <span><?php echo $popularProduct['price'];?> грн.  |  <a href="/products/<?php echo $popularProduct['id'];?>">Подробнее</a></span>
                                </div>
                            </li>
                            <?php endforeach;?>                           
                        </ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="/views/js/jquery.flexisel.js"></script>
		</div>
	</div>
	</div>
	<!---->
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/footer.php' ?>