<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php require '../components/header.php';?>
    <?php require '../components/inputLogin.php' ?>
    <?php
        if(isset($erroEncontrado) && $erroEncontrado == true){
            echo '
            <script>
                Swal.fire({
                    title: "Usuario não encontrado",
                    text: "Email ou senha incorreto",
                    icon: "error",
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