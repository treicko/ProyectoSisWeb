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
	$foto=$_FILES['foto']['name'];



		$ssql="UPDATE accesorios set ";
		$ssql.="marca='".$marca."',";
		$ssql.="modelo='".$modelo."',";
		$ssql.="anio='".$anio."',";
		$ssql.="descripcion='".$descripcion."', ";
		$ssql.="categoria='".$categoria."', ";
		$ssql.="preciooferta='".$preciooferta."', ";
		$ssql.="precioventa='".$precioventa."', ";
		$ssql.="foto='".$foto."' ";

		$ssql.="WHERE id=".$_POST['id'];

		echo $ssql;
		//ejecutar la sentencia
		if(mysql_query($ssql)){
			header('Location: mostrarAccesorios.php');
		}else{echo 'erros';}



//mysql_close($conexion);
 ?>

 <?php mysql_close($db); ?>