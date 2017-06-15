<?php
	session_start(); 

	$categorie = $_POST["rechNav"]; 
	$name = $_POST["nomProduct"]; 

	echo " ".$_SESSION["type"]." ".$_SESSION["username"]." <br />";


	include("connexion.php"); 
	
	$result = $db->prepare("Select * from produit where nomProduit='".$name."' AND idCategorie=".$categorie." "); 
	$result->execute() ; 
	if ($result->rowCount()> 0) {
    // output data of each row
    	while($row = $result->fetchAll(PDO::FETCH_ASSOC)) {

        echo "id: ".$row[0]['idProduit']. " - Name: " .$row[0]["nomProduit"]. " - Prix" . $row[0]["prixProduit"]. " <br/>";
   		}
	} else {
    	echo "0 results";
}

$_SESSION["true"] ;


?>