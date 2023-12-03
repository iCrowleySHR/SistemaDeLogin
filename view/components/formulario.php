<?php include '../../controller/cadUsuario.php'; ?>
<form action="" method='post'>
    <section>
        <h2>Cadastre-se no nosso site!</h2>
            <label for="name">Nome</label>
            <input type="text" name="name" required maxlength="100"> 

            <label for="email">E-mail</label>
            <input type="text" name="email" required maxlength="100" id="email">
            <span id="error-email"></span>

            <label for="senha">Senha</label>
            <input type="password" name="password" required maxlength="100">
            
        <button type="submit" id="btnEnviar">Enviar</button>
    </section>
</form>