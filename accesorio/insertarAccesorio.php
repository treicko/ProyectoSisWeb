<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$anio=$_POST['anio'];
	$descripcion=$_POST['descripcion'];
	$categoria=$_POST['categoria'];
	$preciooferta=$_POST['preciooferta'];
	$precioventa=$_POST['precioventa'];

	copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
	//echo "La foto se registro en el servidor.<br>";
	$nom='http://localhost/ProyectoSisWeb/ProyectoSisWeb/accesorio/';
	$nom.=$_FILES['foto']['name'];
	//echo "$nom";
	
	 $sql="INSERT INTO accesorios (marca,modelo,anio,descripcion,categoria,preciooferta,precioventa,foto) values ('$marca','$modelo','$anio','$descripcion','$categoria','$preciooferta','$precioventa','$nom')"; //genero la instancia SQL y luego la ejecuto.
	$result=mysql_query($sql,$db);  

	if ($result) {
		header('Location: mostrarAccesorios.php');
	}else echo "ERROR EN LA CONSULTA";

	
 ?>