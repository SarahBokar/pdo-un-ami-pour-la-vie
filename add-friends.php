<?php
// inclusion du fichier de connexion
require_once '_connec.php';

// vérification des données du formulaire
if (
    empty($_POST['firstname']) || empty($_POST['lastname']) ||
    strlen($_POST['firstname']) > 45 || strlen($_POST['lastname']) > 45
) {
    header('Location: index.php'); // redirection vers la page d'accueil
    exit();
}

// insertion du nouvel ami dans la base de données
$stmt = $pdo->prepare('INSERT INTO friends (firstname, lastname) VALUES (:firstname, :lastname)');
$stmt->execute([
    ':firstname' => $_POST['firstname'],
    ':lastname' => $_POST['lastname']
]);

// redirection vers la page d'accueil
header('Location: index.php');
exit();
