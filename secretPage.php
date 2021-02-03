<?php

    $psw = "MDPALC";
    session_start();
    if (isset($_POST["psw"])) {
        if ($_POST["psw"] === $psw){
            $_SESSION["psw"] = $_POST["psw"];?>
            <!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="style.css">
                <title>Document</title>
            </head>
            <body>

                <p>bienvenue sur la page secrète</p>

            </body>
            </html>
        <?php }
        else{
            echo "Erreur mot de passe éroné";
        }
    }

?>