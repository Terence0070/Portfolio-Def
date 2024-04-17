<?php
// Inclure le fichier de connexion à la base de données
require_once ("Include/database/config.php");
require_once ("Include/modele/SousTitre.php"); 

$SousTitre = new SousTitre($connexion);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio de Terence Renard</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="icon" type="image/png" href="Images/logoportfolio.png" />
		<link rel="stylesheet" href="portfolio.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/4e8a26577c.js" crossorigin="anonymous"></script>
    </head>
<body>
	<?php
	// Récupérer le nom de la page actuelle
	$current_page = basename($_SERVER['PHP_SELF']);
	?>

	<div class="banniere">
		<nav class="menu">
			<div class="moi">
				<a class="terence" href="index.php">Terence RENARD</a>
				<p class="sous-titre"><?php echo $SousTitre->displayOneSentence() ?></p>
			</div>
			<div class="menu1">
				<ul>
					<li><a href="profil.php" <?php if($current_page == 'profil.php') echo 'class="active"'; ?>>Profil</a></li>
					<li><a href="parcours.php" <?php if($current_page == 'parcours.php') echo 'class="active"'; ?>>Parcours</a></li>
					<li><a href="projet.php" <?php if($current_page == 'projet.php') echo 'class="active"'; ?>>Projets réalisés</a></li>
					<li><a href="projetpro.php" <?php if($current_page == 'projetpro.php') echo 'class="active"'; ?>>Projet professionnel</a></li>
					<li><a href="veille.php" <?php if($current_page == 'veille.php') echo 'class="active"'; ?>>Veille</a></li>
					<li><a href="contact.php" <?php if($current_page == 'contact.php') echo 'class="active"'; ?>>Contact</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="menu2">
		<ul id="fleche" class="menu_deroulant fleche_inverse">
			<li><img src="Images/fleche_bas.png" style="all:unset; min-width:8%; max-height:30px;;"></li>
		</ul>
		<ul class="menu_affichage hidden">
			<li class="menu_tel hidden_elements"><a href="profil.php" <?php if($current_page == 'profil.php') echo 'class="active"'; ?>>Profil</a></li>
			<li class="menu_tel hidden_elements"><a href="parcours.php" <?php if($current_page == 'parcours.php') echo 'class="active"'; ?>>Parcours</a></li>
			<li class="menu_tel hidden_elements"><a href="projet.php" <?php if($current_page == 'projet.php') echo 'class="active"'; ?>>Projets réalisés</a></li>
			<li class="menu_tel hidden_elements"><a href="projetpro.php" <?php if($current_page == 'projetpro.php') echo 'class="active"'; ?>>Projet professionnel</a></li>
			<li class="menu_tel hidden_elements"><a href="veille.php" <?php if($current_page == 'veille.php') echo 'class="active"'; ?>>Veille</a></li>
			<li class="menu_tel hidden_elements"><a href="contact.php" <?php if($current_page == 'contact.php') echo 'class="active"'; ?>>Contact</a></li>
		</ul>
	</div>

<div class="contourgris">
	<div class="contourblanc">