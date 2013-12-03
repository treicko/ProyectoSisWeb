<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$ci=$_POST['ci'];
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$rol = $_POST['rol'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	$estado = "activo";

	if($password == $confirmPassword)
	{
		$passwordEncriptado = md5($password);

		$sql="INSERT INTO usuarios (ci,nombre,email,telefono,direccion,rol,login,password, estado) VALUES 
		('$ci','$nombre','$email','$telefono','$direccion','$rol','$login','$passwordEncriptado', '$estado')"; 

		$result=mysql_query($sql,$db);  

		if ($result) {
			header('Location: mostrarUsuarios.php');
		}else{
			 echo "ERROR EN LA CONSULTA";
		}
	}
	else{
		echo "las Contrasenias no coinciden";
	}
	

 ?>