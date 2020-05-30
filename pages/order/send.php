<?php


if(server('REQUEST_METHOD') == 'POST') {
    $productsIds = array_keys(get_session('cart'));
    $products = getProductByIds($productsIds);

    $order['total_price'] = 0;
    $order['total_count'] = 0;

    foreach ($products as $product) {
        $order['products'][]  = [
            'id' => $product['id'],
            'count' => get_session(['cart' , $product['id']]),
        ];
        $count = get_session(['cart' , $product['id']]);
        $order['total_price'] += (int)$product['price'] * $count;
        $order['total_count'] += $count;
    }
    $user = post(null);
    saveOrder($user, $order);

    delete_session('cart');
}

redirect("../../?send=true");





