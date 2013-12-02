<?php 

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];

	$ssql="UPDATE usuarios set ";
	$ssql.="estado = 'inactivo' ";
	$ssql.="WHERE id=".$id;
	//ejecutar la sentencia
	$result=mysql_query($ssql,$db);

	if($result){
		header('Location: mostrarUsuarios.php');
		//echo 'Actualizados';
	}else{
		echo 'erros';
	}

	mysql_close($db);

 ?>