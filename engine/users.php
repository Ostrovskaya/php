<?php


function getUserByLogin($login) {
    return  queryOne("SELECT * FROM users WHERE login = '{$login}'");
}

function getUserById($id) {
    return  queryOne("SELECT * FROM users WHERE id = {$id}");
}

function regNewUser( string $login, string $password, string $name, string $surname, string $email) {
    $sql = "INSERT INTO users (login, password, name, surname, email) VALUES ('{$login}', '{$password}', '{$name}', '{$surname}', '{$email}')";
    return execute($sql);
}