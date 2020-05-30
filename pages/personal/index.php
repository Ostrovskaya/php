<?php

if(is_session('user_id')){
    
    $id = get_session('user_id');
    $user = getUserById($id);

} else{
    redirect("login.php");
}

echo  render("personal", ['user' => $user]);

