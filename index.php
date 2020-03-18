<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
<body>
	
		<form action="" method="POST">
			
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
				$req = "INSERT INTO user VALUES(NULL,'$nom','$prenom','$pass')";
					 executsql($req);
					
				}

				 

		 ?>

		

</body>
</html>
