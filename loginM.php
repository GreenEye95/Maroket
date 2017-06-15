<?php 

	session_start(); 

	//Connection 
	try{
	$db = new PDO("mysql:host=localhost;dbname=maroket" , "root" , "" , array(PDO::ATTR_PERSISTENT=> true));
	$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}



	
	if(isset($_POST['email']) && isset($_POST['pass']) ){
		
		$email = $_POST['email'];
	    $pass = $_POST['pass']; 
	    $query = $db-> prepare("SELECT * FROM client where NomUser = '".$email."' and MDPClient='".$pass."' ; ");
	    $query2 = $db-> prepare("SELECT * FROM admin where NomUser = '".$email."' and MDPADmin='".$pass."' ; ");
	    $query3 = $db-> prepare("SELECT * FROM vendeur where NomVendeur = '".$email."' and MDPVendeur='".$pass."' ; ");
	    $query->execute(array(':email'=>$email , ':pass'=>$pass)) ;
	    $query2->execute(array(':email'=>$email , ':pass'=>$pass)) ;
	    $query3->execute(array(':email'=>$email , ':pass'=>$pass)) ;
	    $userRow = $query->fetch(PDO::FETCH_ASSOC);
        $result = $query3->fetch() ; 

	    $row_cnt1 = $query->rowCount() ; 
	    $row_cnt2 = $query2->rowCount() ;	
	    $row_cnt3 = $query3->rowCount() ;	 

            if ($row_cnt1==1 || $row_cnt2==1 || $row_cnt3==1 ) {
            	if ($row_cnt2==1) {
            		# code...
            		$_SESSION["type"] = "admin" ; 
            	}
            	elseif ($row_cnt1==1){
            		$_SESSION["type"] = "client" ; 
            	}
            	elseif($row_cnt3==1){
            		$_SESSION["type"] = "vendeur" ;
                    $_SESSION["vendeurID"] = $result["idVendeur"] ; 
            	}

            	
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
