<div class="reviews">
    <h3>Отзывы</h3>
    <?php foreach ($reviews as $review): ?>
    <div class="feedback">
        <h4 class="name"><?=$review['name']?></h4>
        <p class="text"><?=$review['review']?></p>
    </div>
    <?php endforeach;?>
</div>