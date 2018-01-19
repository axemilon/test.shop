<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/header.php' ?>
	<!--content-->
        <div class="content">
            <div class="container">
                <div class="  col-m-on">
                    <!---->
                    <div class="in-line">
                        <div class="para-all">
                            <h3>Все категории</h3>
                            <p>Всего категорий: <?php echo count($categoryList); ?></p>
                        </div>
                        <div class="lady-on">

                            <?php foreach ($categoryList as $category): ?>
                                <div class="col-md-4 you-men category-disp hover-shadow">
                                    <a href="/category/<?php echo $category['id'] ?>">
                                        <img class="img-responsive" src="/images/<?php echo $category['id'] ?>.png" alt=" " >
                                    </a>
                                    <a href="/category/<?php echo $category['id'] ?>">
                                        <h4><p><?php echo $category['name'] ?></p></h4>
                                    </a>							
                                </div>	
                            <?php endforeach; ?>			
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>
	<!---->
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/layouts/footer.php' ?>