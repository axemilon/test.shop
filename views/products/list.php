<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/header.php' ?>
	<!--content-->
	<div class="content">
		<div class="container">
			<div class="  col-m-on">
				<!---->
				<div class="in-line">
					<div class="para-all">
						<h3>LATEST  ARRIVALS</h3>
						<p>Check our all latest products in this section.</p>
					</div>
					<div class="lady-on">
					
					<?php foreach ($productList as $product): ?>
						<div class="col-md-4 you-men">
                                                    <a href="/products/<?php echo $product['id']?>">
                                                        <img class="img-responsive pic-in" src="/images/product/<?php echo $product['id']?>.png" alt=" " >
                                                    </a>
							<div class=" you-onto">
								<span>15<label>%</label></span>
							<small>off</small>
							</div>
							<p><?php echo $product['name']?></p>
							<span><?php echo $product['price']?> | <label class="cat-in"> </label> <a href="/products/<?php echo $product['id']?>">Add to Cart </a></span>
						</div>	
					<?php endforeach; ?>	
								
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!---->
			<div class="lady-in-on">
			<div class="buy-an">
						<h3>OTHER PRODUCTS</h3>
						<p>Check our all latest products in this section.</p>
					</div>
				<ul id="flexiselDemo1">			
				<li><a href="#"><img class="img-responsive women" src="/views/img/faa.jpg" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now</a></span>
				</div></li>
				<li><a href="#"><img class="img-responsive women" src="/views/img/faa1.jpg" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now</a></span>
				</div></li>
				<li><a href="#"><img class="img-responsive women" src="/views/img/faa.jpg" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now </a></span>
				</div></li>
				<li><a href="#"><img class="img-responsive women" src="/views/img/faa1.jpg" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now</a></span>
				</div></a></li>
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
	<div class="footer">
		<div class="container">
				<div class="footer-class">
				<div class="class-footer">
					<ul>
						<li ><a href="index.html" class="scroll">HOME </a><label>|</label></li>
						<li><a href="men.html" class="scroll">MEN</a><label>|</label></li>
						<li><a href="women.html" class="scroll">WOMEN</a><label>|</label></li>
						<li><a href="collection.html" class="scroll">COLLECTION</a><label>|</label></li>
						<li><a href="collection.html" class="scroll">STORE PRODUCTS</a><label>|</label></li>
						<li><a href="collection.html" class="scroll">LATEST  PRODUCT</a></li>
					</ul>
					 <p class="footer-grid">&copy; 2014 Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>	 
				<div class="footer-left">
					<a href="index.html"><img src="/views/img/logo1.png" alt=" " ></a>
				</div> 
				<div class="clearfix"> </div>
			 	</div>
		 </div>
	</div>
</body>
</html>