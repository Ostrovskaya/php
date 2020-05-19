<?php
session_start();
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "users.php";
require ENGINE_DIR . "render.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = post('login');
    $password = post('password');
    $name = post('name');
    $surname = post('surname');
    $email = post('email');
    
    regNewUser($login, getHash($password), $name, $surname, $email);
}


$content = render("reg");

echo render('layout', ['content' => $content]);