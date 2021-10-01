<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Focus Store</title>
</head>

<body>
    <div class="header">
        <h1>Hello World</h1>
    </div>
    <form action="home.php" method="post" onsubmit="return check_form(this)" id="insertForm">
        <p>nome: <input type="text" name="name" id="name" placeholder="Império do Brasil"></p>
        <p>materia: <input type="text" name="type" id="type" placeholder="História"></p>
        <p>ano: <input type="text" name="year" id="year" placeholder="II EMIA"></p>
        <p>descriçao: <input type="text" name="description" id="description" placeholder="sua questao"></p>
        <input id="button" type="submit" name="button" value="enviar"/>
    </form>
    <script>
        function _full_form() {
            if(document.getElementById("name").value == ""){
                alert('Por favor, preencha o campo "nome"')

                //coloca o cursor do mouse em name
                document.getElementById("name").focus()
                return false
            }else if(document.getElementById("type").value == ""){
                alert('Por favor, preencha o campo "materia"')

                //coloca o cursor do mouse em type
                document.getElementById("type").focus()
                return false
            }else if(document.getElementById("year").value == ""){
                alert('Por favor, preencha o campo "ano"')

                //coloca o cursor do mouse em year
                document.getElementById("year").focus()
                return false
            }else if(document.getElementById("description").value == "" ){
                alert('Por favor, preencha o campo "descriçao"')

                //coloca o cursor do mouse em description
                document.getElementById("description").focus()
                return false
            }else{
                return true;
            }
        }

        function check_form() {
            complete = _full_form()

            if(complete){
                let name = document.getElementById("name").value
                let type = document.getElementById("type").value
                let year = document.getElementById("year").value
                let description = document.getElementById("description").value
                window.confirm(`Dados: \n nome: ${name} \n tipo: ${type} \n ano: ${year} \n descriçao: ${description}`)
                document.getElementById("insertForm").submit()
                return true
            }
        }

        console.log("Well come my friend!!")

        const test = document.getElementById("button")
        if(test){
            const btn= document.querySelector("#button");
            console.log(btn)
        }
        
    </script>
</body>

</html>