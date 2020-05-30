<?php


function saveOrder($user, $order) {
    $id = time();
    $user_id = get_session('user_id');
    $sql = "INSERT INTO orders (id, date, user_id, address, total_price, phone, pay, count, name ) 
            VALUES ({$id}, NOW(), {$user_id}, '{$user['adr']}', {$order['total_price']}, '{$user["phone"]}', '{$user["pay"]}',{$order['total_count']}, '{$user['name']}')";
    execute($sql);
    foreach ($order['products'] as $product) {
        $sql = "INSERT INTO products (order_id, product_id, count) 
            VALUES ({$id}, {$product['id']}, {$product['count']})";
        execute($sql);
    }  
}

function changeDataOrder($data){
    $sql = "UPDATE orders 
    SET name = '{$data['name']}', address = '{$data['adr']}', phone = '{$data['phone']}', pay = '{$data['pay']}'
    WHERE id={$data['id']}";
    execute($sql);
}

function deleteProductOrder($id){
    $sql = "DELETE FROM products WHERE id={$id}";
    execute($sql);
}

function changeProductOrder($data){
    $sql = "UPDATE products 
    SET count = {$data['count']}
    WHERE id={$data['id']}";
    execute($sql);
}

function getAllOrders() {
    $sql = "SELECT id, date, user_id FROM orders ORDER BY date DESC";
    return queryAll($sql);
}

function getOrderById(int $id) {
    $sql = "SELECT * FROM orders WHERE id = {$id}";
    return queryOne($sql);
}

function getProductsbyOrder(int $id) {
    $sql = "SELECT * FROM products WHERE order_id = {$id}";
    return queryAll($sql);
}
