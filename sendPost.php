<?php
    require_once "src/PHP/app.php";

    $router = new RouterWorks;

    try{
        $name = $_POST["name"];
        $type = $_POST["type"];
        $year = $_POST["year"];
        $description = $_POST["description"];
<<<<<<< HEAD
        echo $description;
        echo $name;
        echo $type;
        echo $year;

        echo "enviado ao db!";
=======
>>>>>>> 2ad2eb995810bd83b3b43a50afaa8742a5460390
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