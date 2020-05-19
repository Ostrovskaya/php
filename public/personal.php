<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "render.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "users.php";
session_start();

if(isset($_SESSION['user_id'])){
    
    $id = $_SESSION['user_id'];
    $user = getUserById($id);

} else{
    redirect("login.php");
}

$content = render("personal", ['user' => $user]);

echo render('layout', ['content' => $content]);
