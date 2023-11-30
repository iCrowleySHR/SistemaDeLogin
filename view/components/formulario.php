<?php include '../../controller/cadUsuario.php'; ?>
<form action="" method='post'>
    <section>
        <label for="name">Nome</label>
        <input type="text" name="name" required> 
        <label for="email">E-mail</label>
        <input type="text" name="email" required>
        <label for="senha">Senha</label>
        <input type="password" name="password" required>
        <button type="submit">Enviar</button>
    </section>
</form>