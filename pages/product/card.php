<?php 

$id = get('id');

$product = getProductById($id);

$reviews = getReviewsByProductId($id);

if( server('REQUEST_METHOD') == 'POST') {
    saveReview(post('name'), $id ,post('review'));
    redirect(server("REQUEST_URI"));
}

$content = renderTemplate("product", ['product' => $product]);
$content .= renderTemplate("reviews", ['reviews' => $reviews]);
$content .= renderTemplate("formReview");

echo renderTemplate('layout', ['content' => $content]);
