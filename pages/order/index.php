<?php
$order['products'] = [];
$order['total_price'] = 0;
$order['total_count'] = 0;


if (!empty(get_session('cart'))) {
    $productsIds = array_keys(get_session('cart'));
    $products = getProductByIds($productsIds);

    foreach ($products as $product) {
        $order['products'][] = [
            'id' => $product['id'],
            'url' => $product['url'],
            'name' => $product['name'],
            'price' => $product['price'],
            'count' => get_session(['cart' , $product['id']]),
        ];
        $count = get_session(['cart' , $product['id']]);
        $order['total_price'] += (int)$product['price'] * $count;
        $order['total_count'] += $count;
    }
}

echo render("order", ['order' => $order]);
