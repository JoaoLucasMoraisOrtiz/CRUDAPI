<?php

require_once "src/PHP/app.php";

echo "<script>console.log('chegou no home')</script>";
$name = $_POST["name"];
$type = $_POST["type"];
$year = $_POST["year"];
$description = $_POST["description"];

$router = new RouterWorks;

try{
    $router->post($name, $type, $year, $description);
    echo "<h1>Enviado para o Banco de Dados com Sucesso!</h1>";
    echo "<a href='index.php'>Voltar</a>";

}catch(Exception $e){
    echo "<h1>nós falhamos... tente novamente mais tarde</h1>";
    echo "<a href='index.php'>Voltar</a>";
}
?>