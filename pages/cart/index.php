<?php
$cart = [];

if (!empty(get_session('cart'))) {
    $productsIds = array_keys(get_session('cart'));
    $products = getProductByIds($productsIds);

    foreach ($products as $product) {
        $cart[] = [
            'id' => $product['id'],
            'url' => $product['url'],
            'name' => $product['name'],
            'price' => $product['price'],
            'count' => get_session(['cart' , $product['id']]),
        ];
    }
}

echo render("cart", ['products' => $cart]);


