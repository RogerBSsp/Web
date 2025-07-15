function OlaMundo(){
    alert('Olá Mundo 2')
}

function variaveis(){
    let texto = "Francisco"
    let numero = 30
    let v = true
    let f = false
    let objeto ={
        "nome":"Francisco",
        "idade": 30
    }
    let lista = ['Laranja','Maça','Banana']
    let lista_m = [texto, numero, objeto]

    let vazio = null
    let i //indefinido

    console.log(texto, numero, v, f, objeto, lista, lista_m, vazio, i)
}


// variaveis globais
let gl_1 = 'Test Global'
var gl_2 = 'Teste Global 2'
const gl_3 = 'Teste Global 3'

console.log(gl_1,gl_2,gl_3)


// variaveis locais
function var_(){
    var x = 10
    console.log(x)
    if(x){
        var x = 5
        console.log(x)
    }
    console.log(x)
}

function let_(){
    let x = 10
    console.log(x)
    if(x){
        let x = 5
        console.log(x)
    }
    console.log(x)
}

function const_(){
    const x = 10
    console.log(x)
    if(x){
        const x = 5
        console.log(x)
    }
    console.log(x)
    
}

//variaveis()

var_()
let_()
const_()