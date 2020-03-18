<?php 
     		include 'connexion.php';
              			$id = $_GET['id'];
				$req = "DELETE FROM user WHERE id=$id";
				 $exe=executsql($req);
					if ($exe == true) {
						header('location:affiche.php');
					}
					else{
						 var_dump($exe);

					}


			
 ?>