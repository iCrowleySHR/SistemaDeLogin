<?php include '../../controller/login.php'; ?>
<form action="" method='post'>
    <section>
        <h2>Acesse a sua conta!</h2>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" required maxlength="100">
            <span id="error-email"></span>

            <label for="senha">Senha:</label>
            <input type="password" name="password" id="senha" required maxlength="100" autocomplete="current-password" >
            <img src="../img/olhoAberto.png" alt="" class="olho">
        <button type="submit" id="btnEnviar">Enviar</button>
    </section>
</form>