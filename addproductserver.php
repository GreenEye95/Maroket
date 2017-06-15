<?php

		session_start(); 
		try{
		include ("connexion.php") ; 
		$nomVendeur = $_SESSION["username"] ;  
		$pname = $_POST["pname"]; 
		$prix = $_POST["prix"]; 
		$desc = $_POST["desc"]; 
		$categorie = $_POST["categorie"] ; 
		$url = $_POST["url"] ; 
		$livraison = $_POST["Livraison"];
		$query = $db->prepare("INSERT INTO produit(nomProduit,prixProduit,idVendeur,idCategorie,descripton,urlImage,idMode) values ('".$pname."',".$prix.",".$_SESSION["vendeurID"].",".$categorie.",'".$desc."' , '".$url."' , '".$livraison."');");
        $query->execute() ; 
        echo "Succes";

	}catch(PDOException $e)
                {
                echo $e->getMessage();
                }



?>