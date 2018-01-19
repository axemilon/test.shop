<h3>Коментарии</h3>
<div class="cabinet-comments">
    <table class="table">
        <tbody>
            <tr>               
                <td>Продукт</td>
                <td>Коментарий</td>
                <td>Дата создания</td>
            </tr>
            <?php foreach ($comments as $comment):?>
            <tr class="hover-shadow">               
                <td>
                    <a href="/products/<?php echo $comment['product']['id']; ?>">
                    <img class="cabinet-product-img" src="/images/product/<?php echo $comment['product']['id'];?>.png" alt="">
                    <p><?php echo $comment['product']['name']; ?></p>
                    </a>
                </td>
                <td><?php echo $comment['text']; ?></td>
                <td><?php echo $comment['create_date']; ?></td>             
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</div>
