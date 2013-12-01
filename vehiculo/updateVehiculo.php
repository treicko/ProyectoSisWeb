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
	$foto=$_FILES['foto']['name'];



		$ssql="UPDATE vehiculos set ";
		$ssql.="marca='".$marca."',";
		$ssql.="modelo='".$modelo."',";
		$ssql.="anio='".$anio."',";
		$ssql.="chasis='".$chasis."', ";
		$ssql.="descripcion='".$descripcion."', ";
		$ssql.="tipo='".$tipo."', ";
		$ssql.="estado='".$estado."', ";
		$ssql.="preciooferta='".$preciooferta."', ";
		$ssql.="precioventa='".$precioventa."', ";
		$ssql.="foto='".$foto."' ";

		$ssql.="WHERE id=".$_POST['id'];

		echo $ssql;
		//ejecutar la sentencia
		if(mysql_query($ssql)){
			echo "actualizado";
		}else{echo 'erros';}



//mysql_close($conexion);
 ?>

 <?php mysql_close($db); ?>