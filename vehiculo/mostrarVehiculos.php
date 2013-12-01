<?php 
	mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$sql="select foto from vehiculos";
	$result1=mysql_query($sql);
	$valores = mysql_fetch_assoc($result1);
	//$imagen=base64_decode($valores['foto']); //recupero la imagen en base64 y la decodeo
	//header('Content-Type: image/jpeg'); //le indico al php que es lo que voy a mostrar (en este caso para una imagen jpg)
	//print($valores['foto']);
	echo "<img src='".$valores['foto']."' />";   
 ?>