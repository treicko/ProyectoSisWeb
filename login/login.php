
<?php 
	//require("http://localhost/ProyectoSisWeb/ProyectoSisWeb/header.php");
	//include("http://localhost/ProyectoSisWeb/ProyectoSisWeb/header.php");
	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$login=$_POST['login'];
	$password=md5($_POST['password']);

	$sql= "select * from usuarios where login='".$login."' and password='".$password."'";
	$result=mysql_query($sql,$db);
	$cant = mysql_num_rows($result);
	$usuario = mysql_fetch_array($result);

	if($cant>0){

		session_start();
		$_SESSION["autentificado"]= "SI";
		$_SESSION["nombreUsuario"]= $usuario['nombre'];
		$_SESSION["idUsuario"]= $usuario['id'];

		if($usuario['rol']=="gerente")
		{
			header("Location: ../gerente/indexGerente.php");
		}
		else if($usuario['rol']=="vendedor")
		{
			header("Location: ../vendedor/indexVendedor.php");
		}
		else
		{
			header("Location: ../cliente/indexCliente.php");
		}

	}else{
		//session_start();
		//$_SESSION['msj_error']="el usuario es invalido";
		//header('Location: loginFormulario.php');
		header("Location: loginFormulario.php?errorusuario=si");
	}
	mysql_close($db);
?>


