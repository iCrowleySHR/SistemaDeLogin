<?php include '../../controller/login.php'; ?>
<form action="" method='post'>
    <section>
        <h2>Acesse a sua conta!</h2>
        <label for="email">E-mail</label>
        <input type="text" name="email" required maxlength="100" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
        <label for="senha">Senha</label>
        <input type="password" name="password" required maxlength="100">
        <button type="submit">Enviar</button>
    </section>
</form>