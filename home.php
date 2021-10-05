<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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