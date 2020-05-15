<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "catalog.php";

$result1 = $result2 = '';

if ( !empty($_POST)) {
    if (isset($_POST['submit'])) {
        $result1 = require ENGINE_DIR . "calc.php";
    } else {
        $result2 = require ENGINE_DIR . "calc.php";
    }
}

$products = getAllProducts();

include VIEWS_DIR . "calc1.php";
include VIEWS_DIR . "calc2.php";
include VIEWS_DIR . "catalog.php";
?>


