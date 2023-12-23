<?php
    define('URL', 'http://localhost/github/Login-Formulario/');

    $url = explode("/", $_GET['url'] ?? 'index');
    $linkPage = "view/pages/{$url[0]}.php";

    if (is_file($linkPage)) {
        include ($linkPage);
        exit();
    } else {
            $linkPage = "view/pages/index.php";
            include ($linkPage);
            exit();
        } 
    
?>