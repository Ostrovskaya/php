<?php

if(server('REQUEST_METHOD') == 'POST') {
    $login = post('login');
    $password = post('password');
    $user = getUserByLogin($login);

    if($user && $user['password'] == getHash($password)){
        set_session('user_id', $user['id']);
        redirect('../personal');
    }else {
        echo "Не верный логин или пароль!";
    }
}

echo render("login");

