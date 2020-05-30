<?php
require_once ENGINE_DIR . "db.php";

function getAllProducts() {
    $sql = "SELECT id, name, url FROM catalog";
    return queryAll($sql);
}

function getProductById(int $id) {
    $sql = "SELECT * FROM catalog WHERE id = {$id}";
    return queryOne($sql);
}

function getReviewsByProductId(int $id) {
    $sql = "SELECT * FROM reviews WHERE id_product = {$id}";
    return queryAll($sql);
}

function saveReview(string $name, int $id_product, string $review) {
    $sql = "INSERT INTO reviews (id_product, review, name ) VALUES ({$id_product}, '{$review}', '{$name}')";
    execute($sql);
}

function getProductByIds(array $ids)
{
    $in = implode(", ", $ids);
    return queryAll("SELECT * FROM catalog WHERE id IN ({$in})");
}
