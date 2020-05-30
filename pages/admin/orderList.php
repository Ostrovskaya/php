<?php

if(is_session('user_id') && isAdminId(get_session('user_id'))){
    $list = getAllOrders();
    echo render("orderList", ['list' => $list]);
}else{
    redirect("../");
}

