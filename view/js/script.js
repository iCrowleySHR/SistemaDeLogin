let inputEmail = document.querySelector('#email');
let spanError = document.querySelector('#error-email')
let btnEnviar = document.querySelector('#btnEnviar')


inputEmail.addEventListener('input', ()=>{
    let emailValue = inputEmail.value
    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(!emailRegex.test(emailValue)){
        spanError.style.color='red'
        spanError.innerHTML=`Email invalido!`
        btnEnviar.disabled = true
        btnEnviar.style.backgroundColor='gray'
    }else{
        spanError.innerHTML=``
        btnEnviar.disabled = false
        btnEnviar.style.backgroundColor='rgb(1, 105, 190)'
    }
})

const imgOlho = document.querySelector('.olho')
const inputSenha = document.querySelector('#senha')
olho = true;

function sistemaOlho(){
    if(olho == true){
        imgOlho.src='view/img/olhoFechado.png'
        inputSenha.type='text'
        olho = false
    }else{
        imgOlho.src='view/img/olhoAberto.png'
        inputSenha.type='password'
        olho = true
    }
}

imgOlho.addEventListener('click',sistemaOlho)
