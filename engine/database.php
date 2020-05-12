<?php

function getDatabaseFiles($db){
    $sql = "SELECT id, name FROM image ORDER BY count_click DESC";

    if (!$res = mysqli_query($db, $sql)) {
        var_dump(mysqli_error($db));
    }

    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    var_dump($data);
    return $data;
}

function getDataByID($db, $id){
    if ($id = (int) mysqli_real_escape_string($db, $id)) {
        $sql = "SELECT * FROM image WHERE id = {$id}";
    
        if (!$res = mysqli_query($db, $sql)) {
            var_dump(mysqli_error($db));
        }
    
        return mysqli_fetch_assoc($res);
    }
}
