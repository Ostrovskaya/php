<?php

function getStart() {
    if(is_null($_SESSION)){
        session_start();
    }
}

function set_session($key, $value) {
    getStart();

    if(is_array($key))
    {
        $_SESSION[$key[0]][$key[1]] = $value;
    } 
    else{
        $_SESSION[$key] = $value;
    }
}

function get_session($key) {
    getStart();

    if(is_array($key))
    {
        return $_SESSION[$key[0]][$key[1]];
    } 
    else{
        return $_SESSION[$key];
    }
}

function delete_session($key) {
    getStart();

    if(is_array($key))
    {
        unset($_SESSION[$key[0]][$key[1]]);
    } 
    else{
        unset($_SESSION[$key]);
    }
}

function increase_value($key, $value) {
    getStart();

    if(is_array($key))
    {
        $_SESSION[$key[0]][$key[1]] += $value;
    } 
    else{
        $_SESSION[$key] += $value;
    }
}

function is_session($key) {
    getStart();

    if(is_array($key))
    {
        return isset( $_SESSION[$key[0]][$key[1]]);
    } 
    else{
        return isset($_SESSION[$key]);
    }
}