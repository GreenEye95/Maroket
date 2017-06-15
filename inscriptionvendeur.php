<html>
    <head>
        <title>Inscription Vendeur</title>
        <script type="text/javascript" src="js/validate.js"></script>
        <link rel="stylesheet" type="text/css" href="css/register.css">
    </head>
    <body background="img/background.jpg">
        <div class="logo"><img src="img/logo1.png\"></div>
        <div class="registration">
            <form method="post" action="">
                <table>
                    <tr><td>Nom</td><td><input type="text" id="nom" name="nom" required></td></tr>
                    <tr><td>Email</td><td><input type="text" id="mail" name="mail"></td></tr>
                    <tr><td>Password</td><td><input type="text" id="pass" name="pass"></td></tr>
                    <tr><td>Confirmation Passsword</td><td><input type="text" id="pass2" name="pass"></td></tr>
                    <tr><td>Adresse</td><td><input type="text" id="adresse" name="adresse" required></td></tr>
                    <tr><td>Code Postal</td><td><input type="number" id="codepostal" name="codepostal" required></td></tr>
                    <tr><td>Ville</td><td><input type="text" id="ville" name="ville" required></td></tr>
                    <tr><td>Pays</td><td><input type="text" id="pays" name="pays"></td></tr>
                    <tr><td><input type="submit" value="Create Acount" id="create" name="create" ></td><td><a href="">Cancel</a></td></tr>
                    <tr>
                </table>
            </form>
        </div>
    </body>
</html>




<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/06/17
 * Time: 17:53
 */
 # code...
    session_start();
    include("connexion.php");
    if(isset($_POST['create']))
    {
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $pays=$_POST['pays'];
        $adresse=$_POST['adresse'];
        $nom=$_POST['nom'];
        $ville=$_POST['ville'];
        $codepostal=$_POST['codepostal'];

        $query1 =$db->query("SELECT * FROM vendeur where EmailVendeur = '".$mail."'");
        $data = $query1->fetch() ;
        $row_cnt = $query1->rowCount() ;
        $client = $data['idVendeur'];

        if (!(isset($client))) {
            # code...
            $db->query("INSERT INTO vendeur (NomVendeur,EmailVendeur,MDPVendeur,AdresseVendeur,CodePostaleVendeur,VilleVendeur,PaysVendeur) VALUES ('".$nom."','".$mail."','".$pass."','".$adresse."','".$codepostal."','".$ville."','".$pays."')") ;
            echo "<script type=\"text/javascript\">alert(\"Bienvenue au club ! \")</script>";
        }
        else
            echo "<script type=\"text/javascript\">alert(\"Vous êtes déjà inscris ! \")</script>";
    }
    else
    {
        //echo "fuck this shit";
    }
?>
</form>