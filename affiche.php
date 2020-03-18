<table border="1">
	 <tr>
	 	 <td>id</td>
	 	 <td>nom</td>
	 	 <td>prenom</td>
	 	 <td>mots</td>
	 	 <td>Modifier</td>
	 	 <td>Suuprime</td>
	 </tr>

 <?php 
				include 'connexion.php';
				   $sql = "SELECT * FROM produit";

				   $exe = executsql($sql);

				 //   var_dump($exe);
				   //   die();

		               foreach ($exe as $ligne) {
		               	     extract($ligne);
		                 	 echo "
                                    <tr>
									 	 <td>$id</td>
									 	 <td>$nom</td>
									 	 <td>$prenom</td>
									 	 <td>$passe</td>
									 	 <td><a href='Modifier.php?id=$id'>Modifier</a></td>
									 </tr>
		                 	 ";
		                 } ?>
						


</table>
