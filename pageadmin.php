<!--
* Created by PhpStorm.
* User: root
* Date: 13/06/17
* Time: 23:11
*/ -->
<html>
<head>
    <title>Administration</title>
</head>
<body>
<form method="post" action="">
        <select id="rechNav" name="rechNav">
            <option value="0">Produit</option>
            <option value="1">Client</option>
            <option value="2">Vendeur</option>
        </select>
        <!-- barre de recherche -->
        <input type="text" name="nom" id="nom" placeholder="Put Your Key Word here">
        <input type="submit" name="search"></div>
</form>
<?php
    session_start();
    include('connexion.php');

    if(isset($_POST['rechNav'])&&((isset($_POST['search']))))
    {
        echo "11111";
        if($_POST['rechNav']=='0')
        {
            $reqProduit = $db->query("SELECT * FROM produit WHERE NomProduit = '".$_POST['nom']."'");
            echo "4444444444444444";
            $data=$reqProduit->fetch();
            $nbr=$reqProduit->rowCount();
            while($nbr>0)
            {
                echo "<p>".$data['NomProduit']."</p>";
                echo "</br>";
            }
        }
    }


?>
</body>

</html>



