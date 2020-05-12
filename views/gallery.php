<?php
/** @var array $files */
?>

<?php foreach ($files as $image): ?>
    <a href="/public/photo.php?id=<?=$image['id']?>" target="_blank"><img width="200" src="img/preview/<?=$image['name']?>" alt=""></a>
<?php endforeach;?>