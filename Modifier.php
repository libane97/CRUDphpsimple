<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
<body>
	
		<form action="" method="POST">

			<div>
				
				<input type="number" name="id" value="<?php echo $_GET['id']  ?>">

			</div>
			
			<div>
				<label>NOM</label>
				<input type="text" name="nom" value="">
			</div>

			<div>
				<label>Prenom</label>
				<input type="text" name="prenom" value="">
			</div>

			<div>
				<label>password</label>
				<input type="password" name="pass" value="">
			</div>
			<button type="submit" name="ok">Valide</button>
		</form>



		<?php 
      
			include 'connexion.php';
  
				extract($_POST);	
				if (isset($_POST['ok'])) {
				$req = "UPDATE user SET nom = '$nom',prenom='$prenom',passe = '$pass' WHERE id = $id";
					 executsql($req);
					 header('location:affiche.php');
				}
			

		 ?>

		

</body>
</html>