<?php
/** @var array $files */
?>

<h2>Каталог</h2>
<div style="display: flex" class="catalog">
<?php foreach ($products as $product): ?>
    <figure>
        <a href="/public/product.php?id=<?=$product['id']?>">
            <img  width="200" class="catalogImg" src="<?=$product['url']?>" alt="<?=$product['name']?>">
        </a>
        <figcaption> 
            <a href="/public/product.php?id=<?=$product['id']?>"><?=$product['name']?></a>
        </figcaption>
    </figure>
<?php endforeach;?>
</div>