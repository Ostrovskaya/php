<?php
require_once ENGINE_DIR . "db.php";

function getAllProducts() {
    $sql = "SELECT id, name, url FROM products";
    return queryAll($sql);
}

function getProductById(int $id) {
    $sql = "SELECT * FROM products WHERE id = {$id}";
    return queryOne($sql);
}

function getReviewsById(int $id) {
    $sql = "SELECT * FROM reviews WHERE id_product = {$id}";
    return queryAll($sql);
}

function saveReview(string $name, int $id_product, string $review) {
    $sql = "INSERT INTO reviews (id_product, review, name ) VALUES ({$id_product}, '{$review}', '{$name}')";
    return execute($sql);
}

?>

