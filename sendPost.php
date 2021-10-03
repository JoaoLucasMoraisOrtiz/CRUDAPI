<?php
    require_once "src/PHP/app.php";

    $router = new RouterWorks;

    try{
        $name = $_POST["name"];
        $type = $_POST["type"];
        $year = $_POST["year"];
        $description = $_POST["description"];
    }catch(Exception $e){
        header("Location: error.php");
    }

    if(($name && $type && $year && $description !== null)){
        try{
            $router->post($name, $type, $year, $description);
            header('Location: home.php');
        
        }catch(Exception $e){
            header('Location: error.php');
        }
    }else{
        die();
    } 