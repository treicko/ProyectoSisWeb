<?php require('../header.php'); ?>

<?php

	$db=mysql_connect('localhost','root','')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];
	echo "$id";
	$sql="SELECT * from vehiculos where id=".$id;
	echo "$sql";
	//$query = "SELECT * FROM `practica5`.`productos`";

	$vehiculo_editar = mysql_query($sql, $db);
	$fila=mysql_fetch_object($vehiculo_editar);

	//crear el formulario
?>
<section>
	<h1><?php echo $fila->marca; ?></h1>
	<h2><?php echo $fila->modelo; ?></h2>
	<h1><?php echo $fila->preciooferta; ?> $u$</h1>
	<div id="imagen">
	<img src='<?php echo $fila->foto; ?>' width="200" height="200">
	</div>
	 <p><?php echo $fila->descripcion; ?></p>
</section>



<?php require('../footer.php'); ?>