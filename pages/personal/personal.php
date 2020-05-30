<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "autoload.php";


if(isset(get_session('user_id'))){
    
    $id = get_session('user_id');
    $user = getUserById($id);

} else{
    redirect("login.php");
}

echo  render("personal", ['user' => $user]);

