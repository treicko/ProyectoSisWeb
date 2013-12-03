<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];
//	$sql="SELECT * from vehiculos where id=".$id;
	//$query = "SELECT * FROM `practica5`.`productos`";

//	$vehiculo_editar = mysql_query($sql, $db);
//	$fila=mysql_fetch_object($vehiculo_editar);

//	$fila->eliminado='si';

	$ssql="UPDATE vehiculos set eliminado='si' WHERE id=".$id;

	if (mysql_query($ssql, $db)) {
		header('Location: mostrarVehiculos.php');
	} else {
		echo "Error";
	}
	

 ?>