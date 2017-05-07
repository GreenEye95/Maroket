<?php
		session_start();

		//Connect to database 
		$db = mysqli_connect("localhost","root","","maroket"); 
		if(isset($_POST['create'])){
			$mail=$_POST['mail'];
			$pass=$_POST['pass'];
			$pays=$_POST['country'];
			$nom=$_POST['name'];

			$query1 = "SELECT * FROM client where Email = '$mail'" ; 
			$data = mysqli_query($db , $query1) ; 
            $row_cnt = mysqli_num_rows($data) ; 

            if ($row_cnt==0) {
            	# code...
            	if (isset($_POST["mail"]) && isset($_POST["mail"]) && isset($_POST["mail"])  && isset($_POST["mail"])) {
            		$query = "INSERT INTO client (Email,pass,pays,name) VALUES ('$mail' , '$pass' , '$pays','$nom')" ;

			        mysqli_query($db,$query);
			    
            	}
            	else {
            		//echo "error";
            	}

            }else{
            	//echo "already exists";
            }

			


		}

?>
<!DOCTYPE html>
<html>

<head>


<script type="text/javascript" src="js/validate.js"></script>

<link rel="stylesheet" type="text/css" href="css/register.css">
	<title>Maroket-Registration</title>
</head>
<body background="img/background.jpg">
<div class="logo"><img src="img/logo1.png"></div>
<div class="registration">
	<form method="post" action="register.php">
		<table>
			<tr><td>Full Name</td><td><input type="text" id="name" name="name" required></td></tr>
			<tr><td>Email</td><td><input type="text" id="mail" name="mail"></td></tr>
			<tr><td>Password</td><td><input type="text" id="pass" name="pass"></td></tr>
			<tr><td>Confirmation Passsword</td><td><input type="text" id="name" name="pass"></td></tr>
			<tr><td>country</td><td><input type="text" id="country" name="country"></td></tr>
			<tr><td><input type="submit" value="Create Acount" id="create" name="create" ></td><td><a href="">Cancel</a></td></tr>
			<tr><form>
	      
		
			</form></tr>
		</table>
	</form>
</div>
<form>
      
</form>
</body>
</html>