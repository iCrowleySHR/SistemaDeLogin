<?php


    $url = explode("/", $_GET['url'] ?? 'index');
    $linkPage = "view/pages/{$url[0]}.php";
    $linkController = "controller/{$url[0]}.php";

    if (is_file($linkPage)) {
        echo"view incluida";
        include ($linkPage);
    } else {
            $linkPage = "view/pages/index.php";
            include ($linkPage);
        } 
    
?>