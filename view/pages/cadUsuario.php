<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cadUsuario.css">
    <script src="../js/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php require '../components/header.php';?>
    <?php require '../components/formulario.php' ?>
    <?php
        if (isset($usuarioExiste) && $usuarioExiste == true) {
            echo '
            <script>
                Swal.fire({
                    title: "Problemas para criar conta",
                    text: "Usuario já existente no sistema.",
                    icon: "error",
                    color:"white",
                    position:"center",
                    background:"#212121"
                });
            </script>
            ';
        } if (isset($contaCriada) && $contaCriada == true) {
            echo'
            <script>
            Swal.fire({
                title: "Conta Criada!!!",
                text: "Acesse ela na página Login",
                icon: "success",
                color:"white",
                position:"center",
                background:"#212121"
            });
            </script>
            ';
        }
    ?>
    <?php require '../components/footer.php'; ?>
</body>
</html>