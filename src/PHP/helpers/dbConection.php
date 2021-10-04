<?php

//função para conectar no banco de dados com o PDO (como na aula de PWI)
function connection($link, $dbName, $usr, $pass) :PDO {
<<<<<<< HEAD
    return new PDO("mysql:host=$link;dbname=$dbName", $usr, $pass);
=======
    return new PDO(`mysql:host={$link};dbname={$dbName}`, `{$usr}`, `{$pass}`);
>>>>>>> 18a7ffb2cb0b84e5272f57008bf2d4568389e388
}