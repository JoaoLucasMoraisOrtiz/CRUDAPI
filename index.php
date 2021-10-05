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

    <form action="home.php" method="get">
        <input id="bottonShow" type="submit" value="visualizar posts" >
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
        function check_form(method, idForm) {

            if(toLowerCase(method) == "post" || "patch"){
                complete = _full_form()

                if(complete){
                let name = document.getElementById("name").value
                let type = document.getElementById("type").value
                let year = document.getElementById("year").value
                let description = document.getElementById("description").value
                window.confirm(`Dados: \n nome: ${name} \n tipo: ${type} \n ano: ${year} \n descriçao: ${description}`)
                document.getElementById(idForm).submit()
                return true
                }else{
                    exit()
                }

            }else if(toLowerCase(method) == "get"){
                document.getElementById(idForm).submit()

            }else if(toLowerCase(method) == "delete"){
                exit()
            }
        }
    </script>
</body>

</html>