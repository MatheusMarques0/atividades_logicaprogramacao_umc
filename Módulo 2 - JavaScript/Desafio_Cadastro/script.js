let classroom = []

function cadastro(){
document.getElementsByTagName("section")[0].style.display = "none"
let name = document.getElementById("nome").value
let grade = parseInt(document.getElementById("nota").value)
let sucesso = document.getElementById("sucess")
let aluno = {
    nome: `${name}`,
    nota: grade
}

classroom.push(aluno)

sucesso.innerHTML = `${aluno.nome} cadastrado com sucesso!`
}

function conf(){
let tabela = document.getElementById("insert1")
let passou = document.getElementById("insert2")
tabela.innerHTML = ""
passou.innerHTML = ""
let sucesso = document.getElementById("sucess")
sucesso.innerHTML = ""

if (classroom.length == 0){
    sucesso.innerHTML = "Registre um nome primeiro!"

} else{
    document.getElementsByTagName("section")[0].style.display = "block"
        for (i=0; i < classroom.length; i++){
            if (classroom[i].nota > 7){ //segundo a documentação
                tabela.innerHTML += 
                 `<tr>
                 <td style="color: greenyellow;">${classroom[i].nome}</td>
                 <td style="color: greenyellow;">${classroom[i].nota}</td>
                </tr>`
                passou.innerHTML +=
                `<tr>
                 <td style="color: greenyellow;">${classroom[i].nome}</td>
                 <td style="color: greenyellow;">${classroom[i].nota}</td>
                </tr>`
              } else{
                   tabela.innerHTML += 
                    `<tr>
                    <td style="color: red;">${classroom[i].nome}</td>
                   <td style="color: red;">${classroom[i].nota}</td>
                  </tr>`
    }
}
}
}

function filtro(){
    let cont = document.getElementById("container")
    cont.style.display = "none"
    let pass = document.getElementById("container_aprovados")
    pass.style.display = "block"
}

function voltar(){
    let cont = document.getElementById("container")
    cont.style.display = "block"
    let pass = document.getElementById("container_aprovados")
    pass.style.display = "none"
}

