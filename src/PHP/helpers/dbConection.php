<?php

//função para conectar no banco de dados com o PDO (como na aula de PWI)
function connection($link, $dbName, $usr, $pass) :PDO {
<<<<<<< HEAD
    return new PDO("mysql:host=$link;dbname=$dbName", $usr, $pass);
=======
<<<<<<< HEAD
    return new PDO("mysql:host=$link;dbname=$dbName", $usr, $pass);
=======
    return new PDO(`mysql:host={$link};dbname={$dbName}`, `{$usr}`, `{$pass}`);
>>>>>>> 18a7ffb2cb0b84e5272f57008bf2d4568389e388
>>>>>>> 2ad2eb995810bd83b3b43a50afaa8742a5460390
}