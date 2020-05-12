<?php

require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "images.php";
require_once ENGINE_DIR . "gallery.php";
require_once ENGINE_DIR . "database.php";

$conn = mysqli_connect("127.0.0.1", "root", "root", "cats");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_FILES['new_file'])) {
        $name = $_FILES['new_file']['name'];
        $path = GALLERY_DIR . $name;
        $size = $_FILES['new_file']['size'];

        if(!file_exists(GALLERY_DIR)) {
            mkdir(GALLERY_DIR);
        }

        move_uploaded_file(
            $_FILES['new_file']['tmp_name'], 
            $path
        );
        
        saveThumbs( 
            $path,
            PREVIEW_DIR . $name
        ); 

        mysqli_query(
            $conn,
            "INSERT INTO image (name, path, size) VALUES ( '$name','$path', $size );"
        );

        redirect('index.php');
    }
}

$files = getDatabaseFiles($conn);

mysqli_close($conn);

require_once VIEWS_DIR . 'head.php';
require_once VIEWS_DIR . 'gallery.php';
require_once VIEWS_DIR . 'load_form.php';
?>