<?php
session_start();
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "render.php";
require ENGINE_DIR . "base.php";

$products = $_SESSION;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = post('id');
    unset($_SESSION[ "product_{$id}" ]);
}

$content = render("cart", ['products' => $products]);
echo render('layout', ['content' => $content]);


