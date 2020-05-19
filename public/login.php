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
    $user = getUserByLogin($login);

    if($user && $user['password'] == getHash($password)){
        $_SESSION['user_id'] = $user['id'];
        redirect('personal.php');
    }else {
        echo "Не верный логин или пароль!";
    }
}

$content = render("login");

echo render('layout', ['content' => $content]);