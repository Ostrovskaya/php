<?php

require_once __DIR__ . '\..\config\main.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_FILES['new_file'])) {
        if(!file_exists(GALLERY_DIR)) {
            mkdir(GALLERY_DIR);
        }

        move_uploaded_file(
            $_FILES['new_file']['tmp_name'], 
            GALLERY_DIR . $_FILES['new_file']['name'] 
        );
        
        saveThumbs( 
            GALLERY_DIR . $_FILES['new_file']['name'],
            PREVIEW_DIR . $_FILES['new_file']['name']
        );
    }
}

function saveThumbs($img, $name){
    $imagick = new Imagick($img);
    $imagick->thumbnailImage(300, 225, true);
    $imagick->writeImage($name);
    $imagick->destroy();
}

$files = scandir(PREVIEW_DIR);

$imgDir = "img/preview/";
$originDir = "img/gallery/";

require_once VIEWS_DIR . 'head.php';

echo "<div class=\"gallery\">";

foreach($files as $file){
    if(($file != ".") && ($file != "..") ){
        $patchPreview = $imgDir . $file;
        $patch = $originDir . $file;
        echo "<a class=\"link\" href=\"#\">
            <img class=\"img\" src=\"{$patchPreview}\" alt=\"{$file}\" data-origin=\"$patch\">
        </a>";    
    }
}
echo "</div>";

require_once VIEWS_DIR . 'load_form.php';
?>