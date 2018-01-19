<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>
<!--content-->
<div class="content">
    <div class="container">
        <div class="  col-m-on">
            <!---->
            <div class="in-line">
                <div class="para-all">
                    <h3>
                        <a href="/category/">Категории</a>
                        -> <a href="/category/<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a> 
                        -> <?php echo $subcategory['name'] ?>
                    </h3>
                    <p>Всего товаров: <?php echo count($productList); ?></p>
                </div>
                <div class="lady-on">

                    <?php foreach ($productList as $product): ?>
                    <div class="col-md-4 hover-shadow">
                        <a href="/products/<?php echo $product['id'] ?>">
                            <img class="img-responsive pic-in" src="/images/product/<?php echo $product['id'] ?>.png" alt=" " >
                        </a>
                        <?php
                        if ($product['novelty'] == 1){
                        ?>
                            <div class="novelty-marker">
                                <span>NEW!</span>                              
                            </div>
                        <?php
                        }
                        else {
                            
                        }                            
                        ?>
                        <!--
                        <div class=" you-onto">
                            <span>15<label>%</label></span>
                            <small>off</small>
                        </div>
                        -->
                        <p>
                            <a href="/products/<?php echo $product['id'] ?>">
                                <?php echo $product['name'] ?>
                            </a>
                        </p>
                        <div>
                            <span class="product-price"><?php echo $product['price'] ?> грн </span>
                            |
                            <?php if ($product['quantity'] > 0): ?>
                            <span class="product-availability-yes">
                                в наличии 
                            </span>
                            <?php else :?>
                            <span class="product-availability-no">
                                нет в наличии
                            </span>
                            <?php endif; ?> 
                            |
                            <a href="/products/<?php echo $product['id'] ?>">
                                <label class="cat-in"></label>Подробнее
                            </a> 
                            
                        </div>
                    </div>	
                    <?php endforeach; ?>	

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!---->       
        </div>
    </div>
</div>
<!---->
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/footer.php' ?>
