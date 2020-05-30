<?php

function redirect(string $url): void
{
    header("Location: {$url}");
    exit;
}

function get($name) {
    return $_GET[$name];
}

function post($name) {
    if($name){
       return $_POST[$name]; 
    }
    return $_POST; 
}

function getHash($string) {
    return md5($string . "d5f8");
}