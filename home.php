<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">

=======
<?php

require_once "src/PHP/app.php";

<<<<<<< HEAD
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
>>>>>>> 2ad2eb995810bd83b3b43a50afaa8742a5460390
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="css/style.css">

    <!-- criar a página -->
    <script src="src/JS/jquery3.6.0.js"></script>
    <script src="src/JS/home.js"></script>

    <title>ShowPosts</title>

    <?php
        require_once "src/PHP/app.php";

        $router = new RouterWorks;

        try {
            $data = $router->get();
            echo "<div id='json' hidden>'" . $data . "</div>";
        } catch (Exception $e) {
            echo $e;
        }
    ?>
</head>

<body>

    <div class="header">
        <h1>Aqui vai mais um tanto de coisas</h1>
    </div>

    <div class='show' id='show'>
    </div>

    <div class='modal' id='selectedPost'>
        <div class="modalContent">

            <div class="modalHeader">
                
                <h1 class='modalTitle' id='titlePost'>
                    Titulo do modal
                </h1>

                <div class='headerFooter'>
                    <h3 class='modalType' id='typePost'> bla bla bla</h3>
                    <h3 class='modalYear' id='yearPost'> ble ble ble</h3>
                </div>
                
            </div>
            <form action="sendPost.php" method="post" id='formAnswer'>
                <div class="modalBody">
                    <p class='modalDescription' id='descriptionPost'>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, amet. Eos beatae libero a molestias. Dolor qui laudantium suscipit, sequi explicabo pariatur distinctio corrupti possimus aperiam nobis? Quasi, quam aspernatur.
                    </p>
                    <textarea name="answer" id="answer" cols="30" rows="10"></textarea>
                </div>
            </form>
                <div class="modalFooter">
                    
                    <button onclick="closeModal('selectedPost'); openModal('resp'); closeModal('send'); closeModal('answer')" class="btn" id='send'>Enviar</button>
                    <button onclick="closeModal('selectedPost'); openModal('resp'); closeModal('send'); closeModal('answer')" class="btn" id='close'>Fechar</button>
                    <button onclick="openModal('answer'); closeModal('resp'); openModal('send')" class="btn" id='resp'>responder</button>
                    
                </div>
            

        </div>
    </div>


</body>

</html>
=======
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
=======
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
>>>>>>> 18a7ffb2cb0b84e5272f57008bf2d4568389e388
>>>>>>> 2ad2eb995810bd83b3b43a50afaa8742a5460390
