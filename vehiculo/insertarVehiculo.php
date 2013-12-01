<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$anio=$_POST['anio'];
	$chasis=$_POST['chasis'];
	$descripcion=$_POST['descripcion'];
	$tipo=$_POST['tipo'];
	
	if ($_POST['estado']=='1')
		$estado=true;
	else 
		$estado=false;
	
	
	$preciooferta=$_POST['preciooferta'];
	$precioventa=$_POST['precioventa'];





	copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
	//echo "La foto se registro en el servidor.<br>";
	$nom=$_FILES['foto']['name'];
	//echo "$nom";
	
	 $sql="INSERT INTO vehiculos (marca,modelo,anio,chasis,descripcion,tipo,estado,preciooferta,precioventa,foto) values ('$marca','$modelo','$anio','$chasis','$descripcion','$tipo','$estado','$preciooferta','$precioventa','$nom')"; //genero la instancia SQL y luego la ejecuto.
	$result=mysql_query($sql,$db);  

	if ($result) {
		header('Location: mostrarVehiculos.php');
	}else echo "ERROR EN LA CONSULTA";

	
 ?>