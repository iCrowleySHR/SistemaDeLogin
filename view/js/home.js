let editarEmail = document.querySelector('#editar-email')
let editarSenha = document.querySelector('#editar-senha')
let editarNome = document.querySelector('#editar-nome')
let apagarConta = document.querySelector('#apagar-conta')
let main = document.querySelector('main')

const section = document.createElement('section')
const label = document.createElement('label')
const input = document.createElement('input')
const button = document.createElement('button')
const form = document.createElement('form')
const span = document.createElement('span')
const inputSenhanova = document.createElement('input')
const labelSenhanova = document.createElement('label')

editarEmail.addEventListener('click',()=>{
    inputSenhanova.remove()
    labelSenhanova.remove()

    main.appendChild(section)
    form.method='post'
    section.appendChild(form)
    section.classList.add('editar-dados')

    label.htmlFor='editarEmail'
    label.textContent='Digite o seu novo email:'
    form.appendChild(label)
    fetch('controller/apiUsuario.php', {
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
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if(!emailRegex.test(inputValue) && button.value == "editarEmail" ){
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
    span.remove()
    button.style.backgroundColor=''
    button.disabled = false
    inputSenhanova.remove()
    labelSenhanova.remove()

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

    fetch('controller/apiUsuario.php', {
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

editarSenha.addEventListener('click',()=>{
    span.remove()
    button.style.backgroundColor=''
    button.disabled = false

    main.appendChild(section)
    form.method='post'
    section.appendChild(form)
    section.classList.add('editar-dados')

    labelSenhanova.htmlFor='senhaAtual'
    labelSenhanova.textContent='Digite sua senha atual:'
    form.appendChild(labelSenhanova)

    input.type='password'
    input.name='senhaAtual'
    input.value = ''
    form.appendChild(input)

    label.htmlFor='senhaNova'
    label.textContent='Digite o sua nova senha:'
    form.appendChild(label)

    inputSenhanova.type='password'
    inputSenhanova.name='senhaNova'
    form.appendChild(inputSenhanova)

    button.textContent='Alterar'
    button.type='submit'
    button.value='editarSenha'
    button.name='acao'
    form.appendChild(button) 
})

apagarConta.addEventListener('click', ()=>{
    section.style.display='none'
    main.innerHTML+=`
    <section class="deletar-conta">
        <article>
            Você tem certeza que deseja apagar a sua conta?
            <form method="post">
                <button type="submit" name="acao" value="deletarConta">Sim, eu concordo em apagar a conta!</button>
            </form>
                <button id="nao-deletarConta">Não</button>
        </article>
    </section>`
    const btnNaoDeletar = document.querySelector('#nao-deletarConta')
    btnNaoDeletar.addEventListener('click',()=>{
        document.location.assign('http://localhost/github/Login-Formulario/home');
    })
})


