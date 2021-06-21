<?php
$user = $_SERVER['HTTP_USER_AGENT']; // Détection du navigateur et du système d'exploitation utilisé
$userIp = $_SERVER['REMOTE_ADDR']; // L'adresse IP du client qui demande la page courante.
$server = $_SERVER['SERVER_NAME']; //nom du serveur qui exécute le script
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8.1</title>
</head>

<body>
    <h1>Exercice 1 Partie 8 : Variables superglobales, sessions et cookies</h1>
    <ul>
        <li><?= 'Voici les caractéristiques du visiteur: ' . $user; ?></li>
        <li><?= 'Voici l\'adresse IP du visiteur: ' . $userIp; ?></li>
        <li><?= 'Voici le nom du serveur qui exécute le script suivant: ' . $server; ?></li>
    </ul>
</body>

</html>