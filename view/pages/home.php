<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessou</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">
    <script defer src="../js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php require '../components/header.php';?>
    <?php include '../../controller/home.php' ?>
    <main>
        <section class="inicio-infos">
            <h1>
                Olá!!
                <?=$_SESSION["nome"];?>
            </h1>
            <p>
                O seu email cadastrado aqui é:
                <strong>
                    <?=$_SESSION["email"];?>
                </strong>
        <br>
        <br>
                Seu id de usuário é:
                <strong>
                    <?= $_SESSION["id"];?>
                </strong>
            </p>
        </section>
        <section class="user-opcoes">
            <label>Opções:</label>
                <button id="editar-email">Editar Email</button>
                <button id="editar-senha" >Editar Senha</button>
                <button id="editar-nome">Editar Nome</button>
                <button id="apagar-conta">Apagar Conta</button>
                <form method="post">
                    <button type="submit" name="acao" value="sair">Sair da Conta</button>
                </form>
        </section>
        <?php
            if (isset($senhaAltera) && $senhaAltera == true) {
                echo '
            <script>
                Swal.fire({
                    title: "Aviso!",
                    text: "Senha alterada com sucesso",
                    icon: "success",
                    color:"white",
                    position:"center",
                    background:"#212121"
                });
            </script>
                ';
            }
        ?>
    </main>
    <?php require '../components/footer.php'; ?>
</body>
</html>