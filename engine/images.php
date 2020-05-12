<?php

function saveThumbs($img, $name){
    $imagick = new Imagick($img);
    $imagick->thumbnailImage(300, 225, true);
    $imagick->writeImage($name);
    $imagick->destroy();
}