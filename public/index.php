<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "catalog.php";
require ENGINE_DIR . "render.php";


$products = getAllProducts();

$content = render("catalog", ['products' => $products]);

echo render('layout', ['content' => $content]);

?>


