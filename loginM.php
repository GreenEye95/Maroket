<?php 

	session_start(); 
	$db = mysqli_connect("localhost","root","","maroket");
	
	
	if(isset($_POST['email']) && isset($_POST['pass']) ){
		
		$email = $_POST['email'];
	    $pass = $_POST['pass']; 
		$query1 = "SELECT * FROM client where Email = '".$email."' and pass='".$pass."' ; " ; 
		$dat = mysqli_query($db , $query1) ; 
        $row_cnt = mysqli_num_rows($dat) ; 

            if ($row_cnt==1) {
            	
            	$_SESSION["username"] = $email;
            	$_SESSION["true"] = True ; 
            	
                echo "succes";

            }else{
            	echo "retry";
            	$_SESSION["true"] = false ; 
            }

        }else{
        	echo "fill the fields";
        	$_SESSION["true"] = false ; 
        }

        
       

 ?>
