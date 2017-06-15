<html>
    <head>
        <title>Inscription Client</title>
        <script type="text/javascript" src="js/validate.js"></script>
        <link rel="stylesheet" type="text/css" href="css/register.css">
    </head>
    <body background="img/background.jpg">
    <!--<div class="logo"><img src="img/logo1.png"></div>-->
    <div class="registration">
        <form method="post" action="">
            <table>
                <tr><td>Nom</td><td><input type="text" id="nom" name="nom" required></td></tr>
                <tr><td>Prénom</td><td><input type="text" id="prenom" name="prenom" required></td></tr>
                <tr><td>Email</td><td><input type="text" id="mail" name="mail"></td></tr>
                <tr><td>Password</td><td><input type="text" id="pass" name="pass"></td></tr>
                <tr><td>Confirmation Passsword</td><td><input type="text" id="pass2" name="pass"></td></tr>
                <tr><td>Date de Naissance</td><td><input type="date" id="datenaiss" name="datenaiss" required></td></tr>
                <tr><td>Sexe</td><td><input type="radio" name="Sexe" value="Homme" checked >Homme</td><td><input type="radio" name="Sexe" value="Femme" >Femme</td></tr>
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
 * Time: 18:37
 */



        include('connexion.php');
        if(isset($_POST['create'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail=$_POST['mail'];
            $pass=$_POST['pass'];
            $datenaiss = $_POST['datenaiss'];
            $sexe = $_POST['Sexe'];
            $codepostal = $_POST['codepostal'];
            $adresse = $_POST['adresse'];
            $ville=$_POST['ville'];
            $pays=$_POST['pays'];

            $query1 =$db->query("SELECT * FROM client where EmailClient = '".$mail."'");
            $data = $query1->fetch() ;
            $row_cnt = $query1->rowCount() ;

            if ($row_cnt==0) {
                # code...
                if (isset($nom)&&isset($prenom)&&isset($mail)&&isset($pass)&&isset($datenaiss)&&isset($sexe)&&isset($codepostal)&&isset($adresse)&&isset($ville)&&isset($pays)) {
                    $db->query("INSERT INTO client (NomClient,PrenomClient,EmailClient,MDPClient,DateNaissance,Sexe,Adresse,Ville,Pays,Telephone,CodeBancaire,NomUser) VALUES ('".$nom."' , '".$prenom."' , '".$mail."','".$pass."','".$datenaiss."','".$sexe."','".$codepostal."','".$adresse."','".$ville."','".$pays."',null,null)") ;
                    echo "<script type=\"text/javascript\">alert(\"Bienvenue au club ! \")</script>";;
                }
                else
                    echo "<script type=\"text/javascript\">alert(\"Vous êtes déjà inscris ! \")</script>";
            }

        }
?>