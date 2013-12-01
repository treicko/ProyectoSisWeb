<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];
	$sql="DELETE  from vehiculos where id=".$id;

	//$query = "SELECT * FROM `practica5`.`productos`";

	 
	if (mysql_query($sql, $db)) {
		header('Location: mostrarVehiculos.php');
	} else {
		echo "Error";
	}
	

 ?>