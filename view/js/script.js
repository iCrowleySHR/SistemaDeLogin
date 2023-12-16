let inputEmail = document.querySelector('#email');
let spanError = document.querySelector('#error-email')
let btnEnviar = document.querySelector('#btnEnviar')

inputEmail.addEventListener('input', ()=>{
    let emailValue = inputEmail.value
    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(!emailRegex.test(emailValue)){
        spanError.style.color='red'
        spanError.style.marginLeft='-76px'
        spanError.innerHTML=`Email invalido!`
        btnEnviar.disabled = true
    }else{
        spanError.innerHTML=``
        btnEnviar.disabled = false
    }
})
