<h1><?=$product['name']?></h1>
<img width="400"  class="pic" src="<?=$product['url']?>" alt="<?=$product['name']?>">

<div class="price"><?=$product['price']?> &#8381;</div>

<div class="shortDescription">
    <h3>Краткое описание товара</h3>
    <p><?=$product['short_description']?></p>
</div>
<div class="detailedDescription">
    <h3>Подробное описание товара</h3>
    <p><?=$product['long_description']?></p>
</div>
