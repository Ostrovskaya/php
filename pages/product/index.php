<?php

$products = getAllProducts();

echo render("catalog", ['products' => $products]);

if( server('REQUEST_METHOD') == 'GET') {
    if(get('send')){
        echo render("send", [], false);
    }
}