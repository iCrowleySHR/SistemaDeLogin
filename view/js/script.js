let inputEmail = document.querySelector('#email');
let spanError = document.querySelector('#error-email')
let btnEnviar = document.querySelector('#btnEnviar')

inputEmail.addEventListener('input', ()=>{
    let emailValue = inputEmail.value
    if(!emailValue.includes('@')){
        spanError.style.color='red'
        spanError.style.marginLeft='-76px'
        spanError.innerHTML=`Email invalido!`
        btnEnviar.disabled = true
    }else{
        spanError.innerHTML=``
        btnEnviar.disabled = false
    }
})
