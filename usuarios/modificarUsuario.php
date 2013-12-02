<?php 


	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id = $_POST['id'];

	$ci=$_POST['ci'];
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	
	$ssql="UPDATE usuarios set ";
	$ssql.="ci='".$ci."',";
	$ssql.="nombre='".$nombre."',";
	$ssql.="email='".$email."',";
	$ssql.="telefono='".$telefono."', ";
	$ssql.="direccion='".$direccion."', ";
	$ssql.="login='".$login."', ";
	$ssql.="password='".$password."' ";

	$ssql.="WHERE id=".$id;

	//echo $ssql;
	//ejecutar la sentencia

	$result=mysql_query($ssql,$db);

	if($result){
		header('Location: mostrarUsuarios.php');
		//echo "actualizado";
	}else{
		echo 'erros';
	}



//mysql_close($conexion);
 ?>

 <?php mysql_close($db); ?>