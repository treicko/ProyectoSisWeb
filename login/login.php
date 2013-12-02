<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$login=$_POST['login'];
	$password=$_POST['password'];

	$sql= "select * from usuarios where login='".$login."' and password='".$password."'";
	$result=mysql_query($sql,$db);
	$cant = mysql_num_rows($result);

	if($cant>0){
		//$usuario = mysql_fetch_array($result);
		echo "el usuario acaba de ingresar";
	}else{
		session_start();
		$_SESSION['msj_error']="el usuario es invalido";
		header('Location: loginFormulario.php');
	}

	mysql_close($db);

 ?>