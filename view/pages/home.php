<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessou</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">
    <script defer src="../js/home.js"></script>
</head>
<body>
    <?php require '../components/header.php';?>
    <?php require '../../controller/home.php' ?>
    <main>
        <section class="inicio-infos">
            <h1>
                Olá!!
                <?=$_SESSION["nome"]?>
            </h1>
            <p>
                O seu email cadastrado aqui é:
                <strong>
                    <?=$_SESSION["email"] ?>
                </strong>
            </p>
        </section>
            <section class="user-opcoes">
                <label>Opções:</label>
                    <button class="btn" id="editar-email">Editar Email</button>
                    <button class="btn" type="submit" id="editar-senha" >Editar Senha</button>
                    <button class="btn" type="submit" id="editar-nome">Editar Nome</button>
                    <button class="btn" type="submit" id="apagar-conta">Apagar Conta</button>
                    <button class="btn" type="submit" name="acao" value="sair">Sair da Conta</button>
            </section> 
    </main>
    <?php require '../components/footer.php'; ?>
</body>
</html>