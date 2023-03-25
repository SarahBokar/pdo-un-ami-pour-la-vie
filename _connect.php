<?php
// configuration de la base de données
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';

// connexion à la base de données avec PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
