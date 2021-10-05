<<<<<<< HEAD
console.log('u are in home.js')

function openModal(mn){
    modal = document.getElementById(mn)

    if(typeof modal == 'undefined' || modal === null){
        return
    }

    modal.style.display = 'Block'
}

function closeModal(mn){
    modal = document.getElementById(mn)
    
    if(typeof modal == 'undefined' || modal === null){
        return
    }

    modal.style.display = 'none'
}

/* chamada jquery para quando o documento for carregado */
$(document).ready(function() {

    /* pega a div hidden enviada pelo php com o conteúdo dos posts */
    jsonDb = $("#json").html()
    
    /* retira as aspas*/
    jsonData = jsonDb.replace(/'/gi, '')
    
    /* transforma em um objJson */
    jsonObj = JSON.parse(jsonData)
    c = 0
    dataId = []

    /* pega a div show */
    grandFather = document.getElementById('show')
    
    /* cria uma div */
    row = document.createElement('div')

    /* percorre o json dos posts */
    jsonObj.work.map(function(arr) {

        /* condicional que define que haverá 3 posts por linha */
        if (c < 3) {

            /* father cria uma div */
            father = document.createElement('div')

            /* title cria um h2 com o nome do post do json de posts */
            title = document.createElement('h2')
            title.textContent = arr.name

            /* type cria um p com o nome do tipo de post do json de posts */
            type = document.createElement('p')
            type.textContent = arr.type

            /* year cria um p com o nome do ano do post do json de posts */
            year = document.createElement('p')
            year.textContent = arr.year

            /* description cria um p com a descriçao post do json de posts */
            description = document.createElement('p')
            description.textContent = arr.description

            /* open cria um botão com o texto ver mais */
            open = document.createElement('button')
            open.textContent = 'Ver mais'

            /* o botão é a dicionado a classe btn */
            open.classList.add('btn')

            /* o botao recebe o valor de Abrir */
            $(open).attr('value', 'Abrir');

            /* o botao recebe o onclick de chamar a função openModal no id selectedPost */
            $(open).attr('onclick', 'openModal("selectedPost")');

            /* o array que guarda todos os ids recebe o id deste post */
            dataId.push(arr.id)

            /* o div father recebe todos os atributos do post (nome, tipo, ... botao de abrir) */
            father.appendChild(title)
            father.appendChild(type)
            father.appendChild(year)
            father.appendChild(description)
            father.appendChild(open)

            /* a div father é adicionada a classe post */
            father.classList.add('post')
            row.classList.add('colum')

            c = c + 1

            $(father).attr({
                id: `${arr.id}`
            })

            row.appendChild(father)

        } else if (c = 3 || c > 3) {
            c = 0
            grandFather.appendChild(row)
            row = document.createElement('div')
        }
    })

    dataId.map(function(id) {

        post = document.getElementById(id)

        post.addEventListener("click", function(e) {

            el = event.target || event.srcElement

            if(el.parentNode.id !== '' || el.parentNode.id !== null){

                id = el.parentNode.id
                
                jsonObj.work.map(function(arr){
                    
                    if(arr.id == id){

                        title = document.getElementById('titlePost')
                        title.textContent = arr.name

                        type = document.getElementById('typePost')
                        type.textContent = arr.type

                        year = document.getElementById('yearPost')
                        year.textContent = arr.year

                        description = document.getElementById('descriptionPost')
                        description.textContent = arr.description
                    }
                })

                
                
                
            }else if(el.id !== '' || el.parentNode.id !== null)[
                console.log('saida do filho: '+el.id)
            ]
        })
    })

    sendBtn = getElementById('send')
    
    sendBtn.addEventListener('click', (e) => {
        $('FormAnswer').submit()
    })

})
=======
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
>>>>>>> 2ad2eb995810bd83b3b43a50afaa8742a5460390
