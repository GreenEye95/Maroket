
<!DOCTYPE html>
<html>

<head>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script  src="js/jquery-3.2.1.min.js"></script>-->
<script type="text/javascript" src="js/addproduct.js"></script>



<link rel="stylesheet" type="text/css" href="css/register.css">
	<title>Maroket-AddProduct</title>
</head>
<body background="img/background.jpg">
<div class="logo"><img src="img/logo1.png"></div>
<div class="registration">
	<form method="post" action="addproductserver.php">
		<table>
			<tr><td>Product Name</td><td><input type="text" id="pname" name="pname" required></td></tr>
			<tr><td>Product Price</td><td><input type="text" id="prix" name="prix"></td></tr>
			<tr><td>description </td><td><textarea cols="20" rows="10" id="desc" name="desc"></textarea></td></tr>
			<tr><td>categories</td><td>
									<select id="categorie" name="categorie" class="categorie">
										<option value="1">Fashion</option>
										<option value="2">Tech</option>
										<option value="3">Electromenager</option>
										<option value="4">sport</option>

									</select>


									</td></tr>
			<tr><td>ImageUrl</td><td><input type="text" id="url" name="url"></td></tr>
			<tr><td>Mode de Livraison</td><td>
											<select id="Livraison" name="Livraison" class="Livraison">
												<option value="1">DHL</option>
												<option value="2">Maroket Livraison</option>
												<option value="3">FedEX</option>
											</select>
										</td></tr>
			
			<tr><td><input type="submit" value="Add Product" id="add" name="add"  class="add"></td><td><a href="">Cancel</a></td></tr>
			<tr>
	      
		
			</tr>
		</table>
	</form>
</div>



</body>
</html>