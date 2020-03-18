<?php 

		function getconnexion()
		{
			return mysqli_connect('localhost','root','','panier');
		}

		function executsql($sql)
		{
			 $conn = getconnexion();
			 return mysqli_query($conn,$sql);
		}

 ?>