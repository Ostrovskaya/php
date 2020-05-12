<?php
require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . "database.php";
require_once ENGINE_DIR . "base.php";

$conn = mysqli_connect("127.0.0.1", "root", "root", "cats");

$id = $_GET['id'];

$data = getDataByID($conn, $id);

$count = ++ $data['count_click'];

mysqli_query(
    $conn,
    "UPDATE image SET count_click = '{$count}' WHERE id = {$id};"
);


mysqli_close($conn);


?>

<h2>Количество кликов: <?=$count?></h2>

<img src="img/gallery/<?=$data['name']?>" alt="cat">
