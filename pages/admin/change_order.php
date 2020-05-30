<?php

if(server('REQUEST_METHOD') == 'POST') {
    $msg = '';
    if(post('method') == 'change'){
        changeProductOrder(post(null));

        $msg = "Количество товара изменено"; 
    }
    if(post('method') == 'delete'){
        deleteProductOrder(post('id'));

        $msg = "Товар был удален из заказа";
    }
    echo render("msg", ['msg' => $msg], false);
}