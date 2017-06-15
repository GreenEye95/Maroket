<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!--<script  src="js/jquery-3.2.1.min.js"></script>-->
	<script type="text/javascript" src="js/addproduct.js"></script>



	<link rel="stylesheet" type="text/css" href="css/register.css">
	<title>Modifier Votre Profil</title>
</head>
<body>



<?php 

	session_start();
	$username = $_SESSION["username"];
	include('connexion.php');
	$req = $db->query("SELECT * FROM client WHERE NomUser = '".$username."'");
	$row = $req->rowCount();
	$data = $req->fetch();
	if ($row>0) 
	{	

		
		$idclient_db = $data['idClient'];
		$nom_db = $data['NomClient'];
		$prenom_db = $data['PrenomClient'];
		$datenaiss_db = $data['DateNaissance'];
		$email_db = $data['EmailClient'];
		$motdepasse_db = $data['MDPClient'];
 		$sexe_db = $data['Sexe'];
		$adresse_db = $data['Adresse'];
		$ville_db = $data['Ville'];
		$pays_db = $data['Pays'];
		$tel_db = $data['Telephone'];
		$codebancaire_db = $data['CodeBancaire'];
		$pseudo_db = $data['NomUser'];
	}
	else
	{
		echo "sir t9iyed w aji ";
	}


 ?>
	
	<div class="registration">
	<form method="post" action="modifierproduitserver.php">
		<table>
			<tr><td>Nom</td><td><input type="text" id="nom" name="nom" value=<?php echo "".$nom_db.""; ?> required></td></tr>
			<tr><td>Prénom</td><td><input type="text" id="prenom" name="prenom" value=<?php echo "".$prenom_db.""; ?> ></td></tr>
			<tr><td>Date de naissance</td><td><input type="Date" id="datenaiss" name="datenaiss"  value=<?php echo "".strtotime($datenaiss_db).""; ?>  required></td></tr>
	    	<tr><td>Email</td><td><input type="Email" id="Email" name="Email" value=<?php echo "".$email_db.""; ?>  required></td></tr>  
			<tr><td>Mot de passe</td><td><input type="password" id="password" name="password" value=<?php echo "".$motdepasse_db.""; ?>  required></td></tr>
			<tr><td>Sexe</td><td><input type="radio" name="Sexe" value="Homme" checked >Homme</td><td><input type="radio" name="Sexe" value="Femme" >Femme</td></tr>
			<tr><td>Adresse</td><td><input type="text" id="Adresse" name="Adresse" value=<?php echo "".$adresse_db.""; ?>  required></td></tr>
			<tr><td>Ville</td><td><input type="text" id="Ville" name="Ville" value=<?php echo "".$ville_db.""; ?>  required></td></tr>
			<tr><td>Pays</td><td><input type="text" id="Pays" name="Pays" value=<?php echo "".$pays_db.""; ?>  required></td></tr>
			<tr><td>Téléphone</td><td><input type="text" id="Téléphone" name="Téléphone" value=<?php echo "".$tel_db.""; ?>  required></td></tr>
			<tr><td>Code Bancaire</td><td><input type="text" id="Code" name="Code"  value=<?php echo "".$codebancaire_db.""; ?>  required></td></tr>
			<!--
			<tr><td>Pseudo</td><td><input type="text" id="Pseudo" name="Pseudo" value=<?php echo "".$pseudo_db.""; ?>  required></td></tr>
			</tr>
			-->
			<tr><td><input type="submit" id="modifier" name="modifier" value="Modifier"></td></tr>
		</table>
	</form>
	</div>
</body>
</html>

 