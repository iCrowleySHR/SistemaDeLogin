let editarEmail = document.querySelector('#editar-email')
let editarSenha = document.querySelector('#editar-senha')
let editarNome = document.querySelector('#editar-nome')
let main = document.querySelector('main')

let section = document.createElement('section')
let label = document.createElement('label')
let input = document.createElement('input')
let button = document.createElement('button')
let form = document.createElement('form')
let span = document.createElement('span')

editarEmail.addEventListener('click',()=>{

    main.appendChild(section)
    form.method='post'
    section.appendChild(form)
    section.classList.add('editar-dados')

    label.htmlFor='editarEmail'
    label.textContent='Digite o seu novo email:'
    form.appendChild(label)
    fetch('../../controller/apiUsuario.php', {
        method: 'GET',
    })
    .then(response => response.json())
    .then(data => {
        input.value= data['email']
    })
    input.type='text'
    input.name='editarEmail'
    form.appendChild(input)

    form.appendChild(span)

    button.textContent='Alterar'
    button.type='submit'
    button.value='editarEmail'
    button.name='acao'
    form.appendChild(button) 

    input.addEventListener('input', ()=>{
        let inputValue = input.value
        if(!inputValue.includes('@')){
            span.style.color='red'
            span.innerHTML=`Email invalido!`
            button.style.backgroundColor='gray'
            button.disabled = true
        }else{
            span.textContent=``
            button.style.backgroundColor=''
            button.disabled = false
        }
    })
})

editarNome.addEventListener('click',()=>{

    main.appendChild(section)
    form.method='post'
    section.appendChild(form)
    section.classList.add('editar-dados')

    label.htmlFor='editarNome'
    label.textContent='Digite o seu nome:'
    form.appendChild(label)
    input.type='text'

    input.name='editarNome'
    form.appendChild(input)

    fetch('../../controller/apiUsuario.php', {
        method: 'GET',
    })
    .then(response => response.json())
    .then(data => {
        input.value= data['nome']
    })

    button.textContent='Alterar'
    button.type='submit'
    button.value='editarNome'
    button.name='acao'
    form.appendChild(button) 
})


