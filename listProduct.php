
<!DOCTYPE html>
<html>
<script type="text/javascript">
	
</script>

<head>
  <link rel="stylesheet" type="text/css" href="css\\index.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js//popup.js"></script>
	
	<title>Maroket-Le premier site de l'E-commerce au Maroc</title>
</head>
<header>
	

</header>
<body>
<div class="messagepop pop" name="messagepop pop" id="messagepop pop">
			<?php if($_SESSION["true"]){ ?>  
					
					<form method="post" id="new_message" action="">
					        <div class="popup" id="popup">
					        <p><?php  echo $_SESSION["username"] ; ?></p>
					       
					        <p><input type="submit" value="Log out" name="logout" id="logout"  />
					        </div>
							    
					    
			<?php }else{ ?>
				
						
						<form method="post" id="new_message" action="">
					        <div class="popup" id="popup">
					        <p><label for="email">Email Or username</label><input type="text" size="30" name="email" id="email" /></p>
					        <p><label for="body">Password</label><input type="Password" name="pass" id="pass" ></p>
					        <p><input type="submit" value="Login" name="login" id="login"/><br/> or <a  href="register.php">Register here</a></p>
					        </div>
					    </form>
				
			<?php } ?>
			</div>
  <header>
  		<div class="navbar">
  			<div class="logo"><a href="#"><img src="img//logo1.png" /></a></div>

  			<div class="recherche">
  				<select class="list" label="All"><option selected="selected">All</option><option>vetement</option><option>Tech</option><option>Fashion</option><option>Laptops</option><option>Other</option></select>
  				<input type="text" name="" class="recherche-input" placeholder="Put Your Product here">
  				<a href="WWW.youtube.com"><button placeholder="" class="recherche-but"  ><img src="img//search.png"></button></a></div>
  			<div class="login-img"><a href=""  id="contact"><img src="img//login.png"> </a></div>
  			<div class="signin-img"><img src="img//Signin.png"></div>
  			<div class="nameUser"> <?php if($_SESSION["true"]) {echo "Hello , ".$_SESSION["username"] ; } ?></div>
  			<div class="onglet"> 
  					<ul>
				        <li><a href="#">All</a></li>
				        <li><a href="#">promotion</a></li>
				        <li><a href="#">Best Sales</a></li>
				        <li><a href="#">Help</a></li>
    				</ul>
  		   </div>
  		   <div class="onglet2">
  		   			<ul>
  		   				<li><a href="#">Site Map </a></li>
				        <li><a href="#">FAQ </a></li>
				        <li><a href="#">Contact </a></li>
				    </ul>
  		   		
  		   </div>
  		 </div>


<script type="text/javascript" language="JavaScript" src="js//login.js"></script>
<script type="text/javascript" src="js//logout.js"></script>