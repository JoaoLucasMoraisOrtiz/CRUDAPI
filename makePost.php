<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="sendPost.php" method="post" onsubmit="return check_form(this)" id="insertForm">
        <p>nome: <input type="text" name="name" id="name" placeholder="Império do Brasil"></p>
        <p>materia: <input type="text" name="type" id="type" placeholder="História"></p>
        <p>ano: <input type="text" name="year" id="year" placeholder="II EMIA"></p>
        <p>descriçao: <input type="text" name="description" id="description" placeholder="sua questao"></p>
        <input id="buttonInsert" type="submit" name="button" value="enviar"/>
    </form>

    <script src="src/JS/post.js"></script>
</body>
</html>