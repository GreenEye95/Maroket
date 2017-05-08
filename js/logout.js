$('#logout').click(function (){

						  $.ajax({
						   type: "POST",
						   url: "logout.php",
						   success: function(data){    
							if(data=='logout')    {
							 //$("#add_err").html("right username or password");
							 	//alert(data) ; 
							 	/*document.getElementById("popup").innerHTML = "" ; 
							 	document.getElementById("popup").innerHTML = "<form method='post' id='new_message' action=''> <div class='popup' id='popup'> <p><label for='email'>Email Or username</label><input type='text' size='30' name='email' id='email' /></p> <p><label for='body'>Password</label><input type='Password' name='pass' id='pass' ></p>  <p><input type='button' value='Login' name='login' id='login'/><br/> or <a  href='register.php'>Register here</a></p> </div></form>" ; */
							 	//alert("logout");
							 	window.location.assign('index.php');
							 	

							}
							else    {
							   alert(data);
							   
							}
						   },
						   
						  });



	}

		);