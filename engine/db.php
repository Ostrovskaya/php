<?php

function getConnection() {
    static $conn = null;
    if(is_null($conn)){
        $conn = mysqli_connect("127.0.0.1","root","root","catalog");
    }
    return $conn;
}

function execute(string $sql) {
    return mysqli_query(getConnection(), $sql);
}

function queryAll($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql) {
    return queryAll($sql)[0];
}

function closeConnection() {
    return mysqli_close(getConnection());
}