<?php 

	session_start();
	$username = $_SESSION["username"];
	include('connexion.php');
	$req = $db->query("SELECT * FROM client WHERE NomUser = '".$username."'");
	$row = $req->rowCount();
	$data = $req->fetch();
	if ($row>0) 
	{
		# code...
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$datenaiss = $_POST["datenaiss"];
		$email = $_POST["Email"];
		$motdepasse = $_POST["password"];
 		$sexe = $_POST["Sexe"];
		$adresse = $_POST["Adresse"];
		$ville = $_POST["Ville"];
		$pays = $_POST["Pays"];
		$tel = $_POST["Téléphone"];
		$codebancaire = $_POST["Code"];
		$pseudo = $_POST["Pseudo"];
		echo "fine here ! ";
		if(isset($_POST["modifier"]))
		{
			$db->query("UPDATE client SET NomClient = '".$nom."', PrenomClient = '".$prenom."',EmailClient = '".$email."',MDPClient = '".$motdepasse."',DateNaissance = '".$datenaiss."',Sexe ='".$sexe."',Adresse = '".$adresse."',Ville ='".$ville."',Pays ='".$pays."',CodeBancaire ='".$codebancaire."',NomUser = '".$pseudo."'");
			echo "<script>alert(\"succes !\")</script>";
		}

	}
	header('Location: index.php');
 ?>