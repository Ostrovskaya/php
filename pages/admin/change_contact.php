<?php

if(server('REQUEST_METHOD') == 'POST') {
    changeDataOrder(post(null));
    $msg = "Контактные данные покупателя изменены";
    echo render("msg", ['msg' => $msg], false);
}