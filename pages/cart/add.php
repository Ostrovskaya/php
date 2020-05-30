<?php

if(server('REQUEST_METHOD') == 'POST') {

    $id = (int)post('id');

    if ( is_session([ "cart" , "{$id}"]) ){
        increase_value(["cart", "{$id}"], 1);
    }
    else {
        set_session(["cart", "{$id}"], 1);
    }

    $msg = "Товар был успешно добавлен в корзину";
    echo render("msg", ['msg' => $msg], false);
}