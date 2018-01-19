<h3>Список желаний</h3>
<div id="alert-ansver" class="alert alert-warning alert-dismissable">
    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Товар успешно удален с вашего списка желаний!</strong>
</div>
<div class="user-wishlist">    
    <div id="wishes" class="lady-on">
        <?php foreach ($wishlist as $wish): ?>
            <div class="col-md-4 hover-shadow">                
                <img id="delete-wish" data-id="<?php echo $wish['id']; ?>" title="Удалить товар со списка" class="delete-ico" src="/views/img/delete-icon.png" alt=" " >
                <a href="/products/<?php echo $wish['product']['id']; ?>">
                    <img class="img-responsive pic-in" src="/images/product/<?php echo $wish['product']['id']; ?>.png" alt=" " >
                </a>
                <p>
                    <a href="/products/<?php echo $wish['product']['id']; ?>">
                        <?php echo $wish['product']['name'] ?>
                    </a>
                </p>
                <div>
                    <span class="product-price"><?php echo $wish['product']['price'] ?> грн </span>
                    |
                    <?php if ($wish['product']['quantity'] > 0): ?>
                        <span class="product-availability-yes">
                            в наличии 
                        </span>
                    <?php else : ?>
                        <span class="product-availability-no">
                            нет в наличии
                        </span>
                    <?php endif; ?> 
                    |
                    <a href="/products/<?php echo $wish['product']['id'] ?>">
                        Подробнее
                    </a> 
                </div>
            </div>	
        <?php endforeach; ?>
        <div class="clearfix"> </div>
    </div>
</div>
<script>  
    $(document).ready(function(){ 
        $('#delete-wish').click(function(){  
            var wish_id = $(this).attr("data-id");
            $.post("/deletewish",{wish_id},
            function(data){                       
                   $('#alert-ansver').css('display', 'block');  
                   $('#wishes').html();                  
                }  
            );  
            return false;  
        }); 
    });
</script> 
