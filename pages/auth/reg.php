<?php

if( server('REQUEST_METHOD') == 'POST') {

    $login = post('login');
    $password = post('password');
    $name = post('name');
    $surname = post('surname');
    $email = post('email');
    
    regNewUser($login, getHash($password), $name, $surname, $email);
}


echo render("reg");
