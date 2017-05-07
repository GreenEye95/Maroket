<?php
	session_start(); 

	

?>
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
		  <div class="slideshow">
		  	<div class="slideshow-container">
		  		<div class="mySlides fade">
		    		<div class="numbertext">1 / 3</div>
		    			<a href="#"><img src="img//product//iphone.png" style="width:100%"></a>
		    		
		  		</div>

			  <div class="mySlides fade">
			    <div class="numbertext">2 / 3</div>
			    <a href="#"><img src="img//product//macbook.png" style="width:100%"></a>
			    
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">3 / 3</div>
			    <a href="#"><img src="img//product//artisanat.png" style="width:100%"></a>
			    
			  </div>
			 <div class="arrows">
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a></div>
			</div>
		<br>

			
			

		
					
		  		 	
		  </div>

		  <div  class="bestSales">
		  	<br />

			BEST SALES 
		 	<br />
		</div> 

		 <div class="products">

		  <div class="product"> 
		  <div class="product-img"> <img src="img//product//pro1.png"></div>
		  <div class="spec"><h3>Product name</h><h5>49.99 DHs
		  </h5><a href="product.php"><button >View details</button></a></div>
				
				
			</div>
		  <div class="product">
		  <div class="product-img"> <img src="img//product//pro2.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
				
			</div>
			<div class="product">
			<div class="product-img"> <img src="img//product//pro3.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
				
			</div>
			<div class="product">
			<div class="product-img"> <img src="img//product//pro3.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
				
			</div>
			<div class="product">
			<div class="product-img"> <img src="img//product//pro3.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
				
			</div>
			<div class="product">
			<div class="product-img"> <img src="img//product//pro2.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
				
			</div>
			<div class="product">
			<div class="product-img"> <img src="img//product//pro2.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
				
			</div>
			<div class="product">
				<div class="product-img"> <img src="img//product//pro2.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
			</div>
			<div class="product">
				<div class="product-img"> <img src="img//product//pro2.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
			</div>
			<div class="product">
				<div class="product-img"> <img src="img//product//pro2.png"></div>
		  <div class="spec"><h3>Product name</h><h5>Spec</h5><button>View details</button></div>
				
			</div>
		</div>


		<div class="text">Categories</div>

		<div class="categories">
			<a href="">
			<div class="categorie">
				<div class="img"><img src="img//categorie/computer.jpg"></div>
				<div class="name"> Computer</div>
				
			</div>	
			</a>
			<a href="">
			<div class="categorie">
				<div class="img"><img src="img//categorie/Phone.jpg"></div>
				<div class="name"> SmartPhones</div>
				
			</div>	
			</a>
			<div class="categorie">
				<div class="img"><img src="img//categorie/Shoe.jpg"></div>
				<div class="name"> Shoes</div>
				
			</div>
			<div class="categorie">
				<div class="img"><img src="img//categorie/tv.png"></div>
				<div class="name">Monitors </div>
				
			</div>
			<div class="categorie">
				<div class="img"><img src="img//categorie/phone.jpg"></div>
				<div class="name"> Phones </div>
				
			</div>
			<div class="categorie">
				<div class="img"><img src="img//categorie/computer.jpg"></div>
				<div class="name"> Computer</div>
				
			</div>
			<div class="categorie">
				<div class="img"><img src="img//categorie/computer.jpg"></div>
				<div class="name"> Computer</div>
				
			</div>
			<div class="categorie">
				<div class="img"><img src="img//categorie/computer.jpg"></div>
				<div class="name"> Computer</div>
				
			</div>
				


		</div>
		<div class="footer">
			<div class="aboutUs">
			<div class="title"> About us </div>
			<div class="asdescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
				
			</div>
			<div class="cats">
				<div class="title">Categories</div>
				<div class="cats1"><a href="">Shoes</a><br/><a href="">Monitors</a><br/><a href="">Phones</a><br/><a href="">Computers</a><br/><a href="">Tv</a><br/></div>
				
			</div>
			<div class="contactUs">
				<div class="title">Contact Us</div>
				<div class="email"><a href="">maroket@contacts.com</a></div>
				<div class="facebook"><a href="http://facebook.com/mehdi.bajjouii">Facebook</a></div>
				<div class="twitter"><a href="http://youtube.com">Twitter</a></div>
			</div>
			
		</div>
  		 </body>
  </header>
  <script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}
</script>
<script type="text/javascript" language="JavaScript" src="js//login.js"></script>
<script type="text/javascript" src="js//logout.js"></script>

</html>

