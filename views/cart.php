<div style="display: flex" class="cart">
<?php foreach ($products as $product): ?>
    <div>
        <img  width="200" src="<?=$product['url']?>" alt="<?=$product['name']?>">
        <h2><?=$product['name']?></h2>
        <p><?=$product['price']?></p>
        <p><?=$product['count']?></p>
        <form id="form1" action="" method="post">
            <input type="hidden" value="<?=$product['id']?>" name="id">
            <input type="submit" value="Удалить" name="delete">
        </form>
   
    </div>
<?php endforeach;?>
</div>