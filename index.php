<!DOCTYPE html>
<html>

<head>
    <title>Liste des amis</title>
</head>

<body>
    <h1>Liste des amis</h1>

    <?php
	// inclusion du fichier de connexion
	require_once '_connec.php';

	// récupération des amis dans la base de données
	$query = $pdo->query('SELECT * FROM friends');
	$friends = $query->fetchAll(PDO::FETCH_ASSOC);

	// affichage de la liste des amis
	if (!empty($friends)) {
		echo '<ul>';
		foreach ($friends as $friend) {
			echo '<li>' . $friend['firstname'] . ' ' . $friend['lastname'] . '</li>';
		}
		echo '</ul>';
	} else {
		echo '<p>Aucun ami à afficher.</p>';
	}
	?>

    <h2>Ajouter un ami</h2>
    <form method="POST" action="add_friend.php">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname" required maxlength="45"><br>

        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" required maxlength="45"><br>

        <input type="submit" value="Ajouter">
    </form>
</body>

</html>