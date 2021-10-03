<?php

require_once "src/PHP/app.php";

$router = new RouterWorks;



try{
    $data = $router->get();
    echo "<div id='json' hidden>'".$data."</div>";
}catch(Exception $e){
    echo $e;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowPosts</title>
    <script src="src/JS/jquery3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            jsonDb = $("#json").html()
            jsonData = jsonDb.replace(/'/gi, '')
            jsonObj = JSON.parse(jsonData)
            c = Object.keys(jsonObj.work).length
            i = 0

            grandFather = document.body

            jsonObj.work.map(function(arr){

                father = document.createElement('div')
                
                title = document.createElement('h2')
                title.textContent = arr.name

                type = document.createElement('p')
                type.textContent = arr.type

                year = document.createElement('p')
                year.textContent = jsonObj.work[i].year

                description = document.createElement('p')
                description.textContent = jsonObj.work[i].description

                father.appendChild(title)
                father.appendChild(type)
                father.appendChild(year)
                father.appendChild(description)

                father.classList.add('post')
                
                grandFather.appendChild(father)
            })
        })
    </script>
</head>
<body>
    
    
</body>
</html>