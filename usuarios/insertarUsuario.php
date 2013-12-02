<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$ci=$_POST['ci'];
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$rol = "cliente";
	$login=$_POST['login'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	
	
	 $sql="INSERT INTO usuarios (ci,nombre,email,telefono,direccion,rol,login,password) VALUES 
	 ('$ci','$nombre','$email','$telefono','$direccion','$rol','$login','$password')"; 
	 //genero la instancia SQL y luego la ejecuto.
	$result=mysql_query($sql,$db);  

	//$query = "INSERT INTO `prueba`.`usuarios` (`Id`, `Login`, `Password`, `Nombre`, `Direccion`) VALUES (NULL, '$user', '$pass', '$name', '$address')";
		
	//	$res = mysql_query($query, $db);

	if ($result) {
		header('Location: mostrarUsuarios.php');
	}else echo "ERROR EN LA CONSULTA";

 ?>