<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>
<!--content-->
<div class="content">
    <div class="container">
        <div class="single">
            <div class="para-all">
                <h3>
                    <a href="/category/">Категории</a>
                    -> <a href="/category/<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a>
                    -> <a href="/category/<?php echo $category['id'] . '/' . $subCategory['id'] ?>"><?php echo $subCategory['name'] ?></a>                          
                </h3>				
            </div>
            <div class=" product-disp">
                <div class="single_grid">
                    <div class="grid images_3_of_2">
                        <img class="product-image" src="/images/product/<?php echo $product['id']; ?>.png">
                        <div class="clearfix"> </div>		
                    </div> 
                    <!---->
                    <!---->
                    <div class="span1_of_1_des">
                        <div class="desc1">
                            <p>
                                <?php
                                if ($product['novelty'] == 1) {
                                    ?>                                
                                    <span>NEW!</span>                            
                                    <?php
                                } else {
                                    
                                }
                                ?>
                            </p>
                            <h3><?php echo $product['name']; ?> </h3>
                            <p>
                                <span>Код товара: <?php echo $product['code']; ?></span>  
                                <?php if ($product['quantity'] > 0) { ?>
                                    <span class="product-availability-yes">
                                        в наличии 
                                    </span>
                                <?php } else {
                                    ?>
                                    <span class="product-availability-no">нет в наличии</span>
                                    <?php
                                }
                                ?>
                                <span>Добавлен: <?php echo $product['date']; ?></span>
                            </p>                          
                            <div class="available">
                                <h5>Цена: <?php echo $product['price']; ?> грн.</h5>
                                <?php if ($product['quantity'] > 0) : ?>
                                    <div class="form-in">
                                        <a href="#">Купить</a>
                                    </div>
                                <?php endif; ?>
                                <?php if (User::checkLogged()) :?>
                                    <?php if (!Wishlist::wishExist($_SESSION['user'], $product['id'])):?>
                                    <span  class="span_right">
                                        <a id="add-wish" data-id="<?php echo $product['id']; ?>" href="">
                                            Добавить в список желаний! 
                                        </a>
                                    </span>
                                    <?php else:?>
                                        <span>Товар в списке желаний</span>
                                   <?php endif;?>
                                <?php endif;?>                                                             
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!----- tabs-box ---->
                <div class="sap_tabs">	
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Описание</span></li>
                            <li class="resp-tab-item " aria-controls="tab_item-1" role="tab"><span>Характеристики</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Отзывы (<?php echo count($productComments)?>) </span></li>							  
                            <div class="clearfix"></div>
                        </ul>				  	 
                        <div class="resp-tabs-container">                            
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Описание</h2>
                            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <div class="facts">                                   
                                    <p><?php echo $product['description']; ?> </p>
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Характеристики</h2>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <table class="product-information">
                                        <tbody>
                                            <?php foreach ($productInformation as $info): ?>
                                                <tr>                                              
                                                    <td><?php echo $info['name']; ?></td>
                                                    <td><?php echo $info['value']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>	
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Отзывы</h2>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="facts">
                                    <?php foreach ($productComments as $comment): ?>
                                    <div class="product-comments">  
                                        <div class="comment-user-info">
                                            <img src="/views/img/user_ico.png">
                                            <div>
                                                <div class="info-name"><?php echo $comment['user_name']; ?></div>
                                                <div class="info-date"><?php echo $comment['create_date']; ?></div>
                                            </div> 
                                        </div>                                                                               
                                        <div class="product-comments-text">
                                            <?php echo $comment['text']; ?>
                                        </div>   
                                        <div>
                                            Comment Footer********
                                        </div>                                              
                                    </div> 
                                    <?php endforeach;?>
                                    <?php if (User::checkLogged()) :?>
                                    <div class="add-comment">
                                        <form action="" method="POST">
                                            <textarea name="comment-text" placeholder="Введите текст коментария"></textarea>
                                            <input type="submit" name="add-comment">
                                        </form>
                                    </div>
                                    <?php else:?>
                                    <div class="add-comment">
                                    <span class="span_right"><a href="/login">Войдите на сайт для возможности оставлять отзывы! </a></span>
                                    </div>
                                    <?php endif;?>
                                </div>	
                            </div>		

                        </div>
                    </div>
                </div>                                       
                <?php if ($commentStatus): ?>
                    <div class="alert alert-success alert-dismissable">
                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Коментарий успешно добавлен!</strong>
                    </div>
                <?php endif; ?>

                <script src="/views/js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
                </script>	

            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="lady-in-on">
            <div class="buy-an">
                <h3>Другие товары</h3>
                <p><?php echo $subCategory['name'] ?></p>
            </div>
            <ul class="flexiselDemo" id="flexiselDemo1">	
                <?php
                $productList = Product::getProductByCategory($subCategory['id']);
                foreach ($productList as $product):
                    ?>
                    <li>
                        <a href="/products/<?php echo $product['id'] ?>">
                            <img class="img-responsive women" src="/images/product/<?php echo $product['id'] ?>.png" alt="">
                        </a>
                        <div class="hide-in">
                            <h5><?php echo $product['name'] ?></h5>
                            <span><?php echo $product['price'] ?> грн  |  <a href="/products/<?php echo $product['id'] ?>">Подробнее</a></span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script>  
                $(document).ready(function(){ 
                    $('#add-wish').click(function(){  
                        var product_id = $(this).attr("data-id");
                        $.post("/addwish",{product_id},
                        function(data){                       
                                $('#alert-ansver').css('display', 'block');
                                location.reload();
                            }  
                        );  
                        return false;  
                    }); 
                });
            </script> 
            <script type="text/javascript" src="/views/js/jquery.flexisel.js"></script>
        </div>
    </div>
</div>
</div>
<!---->
<!---->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/footer.php' ?>