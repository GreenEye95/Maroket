	$('#login').click(function() {
					var email = document.getElementById("email").value ; 
					var pass = document.getElementById("pass").value  ; 
					//alert(email+" "+pass) ; 
					
						  $.ajax({
						   type: "POST",
						   url: "loginM.php",
							data: "email="+email+"&pass="+pass,
						   success: function(data){    
							if(data=='succes')    {
							 //$("#add_err").html("right username or password");
							 	//alert(data) ; 
							 	window.location.assign('index.php');
							 	

							}
							else    {
							   alert(data);
							   window.stop();
							   
							}
						   },
						   
						  });
							
					})
				 ; 