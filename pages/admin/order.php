<?php

$id = get('id');

$order = getOrderById($id);
$user = getUserById($order["user_id"]);
$products = getProductsbyOrder($order["id"]);
$goods = [];
foreach ($products as $item) {
    $product = getProductById($item["product_id"]);
    $goods[] = [
        'id' => $item["id"],
        'product_id' => $product['id'],
        'name' => $product['name'],
        'price' => $product['price'],
        'count' => $item["count"],
    ];
}

echo  render("changeOrder", ['order' => $order, 'products' => $goods]);