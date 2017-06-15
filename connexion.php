<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=maroket" , "root" , "" , array(PDO::ATTR_PERSISTENT=> true));
	$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	 }
            catch(PDOException $e)
                {
                echo $e->getMessage();
                }

	?>