<?php 
session_start();
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "catalog.php";
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "render.php";


$id = $_GET['id'];

$product = getProductById($id);

$reviews = getReviewsById($id);

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ( !empty(post('sendReview'))) {
        saveReview(post('name'), $id ,post('review'));
    } 

    if ( isset ( $_SESSION [ "product_{$id}" ])){
        $_SESSION[ "product_{$id}" ]['count'] ++;

    } else if( !empty(post('AddToCart'))) {

        $data = [
            'id' => $product['id'],
            'name' => $product['name'],
            'price' => $product['price'],
            'url' => $product['url'],
            'count' => 1,
        ];

        $_SESSION[ "product_{$id}" ] = $data;

    }
}

$content = render("product", ['product' => $product]);
$content .= render("reviews", ['reviews' => $reviews]);
$content .= render("formReview");


echo render('layout', ['content' => $content]);
