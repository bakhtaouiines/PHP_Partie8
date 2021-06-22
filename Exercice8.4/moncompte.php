<?php
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon Compte (8.4)</title>
    </head>

    <body>
        <p>Bienvenue <?= $_COOKIE['login'] ?> !</p>
        <p>Voici votre mot de passe: <?= $_COOKIE['password'] ?></p>
    <?php
} else {
    header('location: index.php');
}
    ?>

    </body>

    </html>