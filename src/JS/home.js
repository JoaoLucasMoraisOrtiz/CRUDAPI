function _full_form() {
    if(document.getElementById("name").value == ""){
        alert('Por favor, preencha o campo "nome"')

        //coloca o cursor do mouse em name
        document.getElementById("name").focus()
        return false
    }else if(document.getElementById("type").value == ""){
        alert('Por favor, preencha o campo "tipo"')

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
    }else{
        alert("Ouve um erro, mas a culpa foi nossa... \n Tente novamente por favor.")
    }

}

console.log("Well come my friend!!")
check_form()