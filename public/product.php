<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "catalog.php";
require ENGINE_DIR . "base.php";

$id = $_GET['id'];

$product = getProductById($id);

$reviews = getReviewsById($id);

if ( !empty($_POST)) {
    saveReview($_POST['name'], $id ,$_POST['review']);
}

include VIEWS_DIR . "product.php";
include VIEWS_DIR . "reviews.php";
include VIEWS_DIR . "formReview.php";