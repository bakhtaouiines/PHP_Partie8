<?php
session_start();
?>
<?php
$_SESSION['lastname'] = 'Jean';
$_SESSION['firstname'] = 'Nemare';
$_SESSION['age'] = '2 ans';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8.2</title>
</head>

<body>
    <h1>Exercice 2 Partie 8 : Variables superglobales, sessions et cookies</h1>
    <ul>
        <li><?= $_SESSION['lastname'] = 'Jean'; ?></li>
        <li><?= $_SESSION['firstname'] = 'Nemare'; ?></li>
        <li><?= $_SESSION['age'] = '2 ans'; ?></li>
    </ul>
</body>

</html>