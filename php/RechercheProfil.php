<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/RechercheProfil.css"/>
	<link rel="stylesheet" type="text/css" href="../css/PartieCommune/Bas/PartieFooter.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieHeader.css"/>
    <link rel="stylesheet" type="text/css" href="../css/PartieCommune/Haut/PartieMenu.css"/>
	
	<title>RechercheProfil</title>
</head>

<body>
	<!-- Partie Connexion -->
	<div id="Conteneur1">	    
		<?php
			include 'Menu/Haut/PartieHeader.php';
		?>
	</div>

	<!-- Corps -->
	<div id="Conteneur2">
		<!-- Menu  -->

		<?php
			include 'Menu/Haut/PartieMenu.php';
		?>

		<div id="BlocRecherche">            
			<span id="RechercheProfil">Recherche des profil</span>
			<form>               	
				<span id="ListeMetierProfil">arts recherchés</span>
					<input id="Option1" type="checkbox" name="option1" >
					<span id="TextOption1">option1</span>

				<span id="NomProfil">Nom</span>
				<input id="TextNom" type="text" name="Id" />

				<span id="DateCreationProfil">Date de naissance</span>
					<SELECT id="DateNai" name="DateNai">
						<OPTION>lundi
						<OPTION>mardi
						<OPTION>mercredi
						<OPTION>jeudi
						<OPTION>vendredi
					</SELECT>

                <input id="ButtonValide" type="button" name="Buttonvalide" value="Rechercher" />
            </form>
		</div>

		<div id="Resultat">
			<span>dgdfs</span>
		</div>
	</div>
	<!-- Partie Bot  -->
	<div id="Conteneur3">
		<?php
			include 'Menu/Bas/PartieFooter.php';
		?>
	</div>
</body>

	
</html>