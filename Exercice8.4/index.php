<?php
$formErrorList = [];
/*
setcookie — Envoie un cookie
path — Le chemin sur le serveur sur lequel le cookie sera disponible.
domain — Le (sous-)domaine pour lequel le cookie est disponible.
secure — Indique si le cookie doit uniquement être transmis à travers une connexion sécurisée HTTPS depuis le client.
httponly — Lorsque ce paramètre vaut true, le cookie ne sera accessible que par le protocole HTTP. Cela signifie que le cookie ne sera pas accessible via des langages de scripts
*/
if (isset($_POST['register'])) {

    if (!empty($_POST['login'])) {
        if (preg_match('#[\w]{5,15}#', $_POST['login'])) {
            $login = htmlspecialchars($_POST['login']);
        } else {
            $formErrorList['login'] = 'Votre pseudo n\'est pas au bon format. Il ne doit pas comporter entre 5 et 15 caractères.';
        }
    } else {
        $formErrorList['login'] = 'Le champ "Identifiant" n\'est pas rempli';
    }
    if (!empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
    } else {
        $formErrorList['password'] = 'Le champ "Mot de Passe" n\'est pas rempli';
    }
    if (empty($formErrorList)) {
        setcookie('login', $_POST['login'], time() + 60 * 60 * 24 * 30, null, null, false, true); // Expire dans 30 jours, path=null, domain=null, secure=false,httponly=true
        setcookie('password', $_POST['password'], time() + 60 * 60 * 24 * 30, null, null, false, true);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8.4</title>
</head>

<body>
    <h1>Exercice 4 Partie 8 : Variables superglobales, sessions et cookies</h1>
    <form method="POST" action="index.php">
        <div style="margin-bottom: 2%;">
            <label for="login">Identifiant: <input type="text" name="login"></label>
            <?php
            if (!empty($formErrorList['login'])) {
            ?>
                <p><span style="color:#FF0000"><?= $formErrorList['login']; ?></span></p>
            <?php
            }
            ?>
            <label for="password">Mot de Passe: <input type="password" name="password"></label>
            <?php
            if (!empty($formErrorList['password'])) {
            ?>
                <p><span style="color:#FF0000"><?= $formErrorList['password']; ?></span></p>
            <?php
            }
            ?>
        </div>
        <input type="submit" name="register" value="Se connecter">
        <a href="moncompte.php">Cliquez ici</a>

    </form>
</body>

</html>