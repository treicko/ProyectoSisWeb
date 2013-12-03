<?php require('../header.php'); ?>

<?php

	$db=mysql_connect('localhost','root','')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];
	
	$sql="SELECT * from accesorios where id=".$id;

	$vehiculo_editar = mysql_query($sql, $db);
	$fila=mysql_fetch_object($vehiculo_editar);

	//crear el formulario
?>
<section>
	<h1><?php echo $fila->marca; ?></h1>
	<h2><?php echo $fila->categoria; ?></h2>
	<h1><?php echo $fila->preciooferta; ?> $u$</h1>
	<div id="column1">
	<img src='<?php echo $fila->foto; ?>' width="200" height="200">
	</div>
	<div id="column2">
		<p>Tipo:: <?php echo $fila->modelo; ?></p>
		<p>Anio:: <?php echo $fila->anio; ?></p>

	</div>
	<div id="column3">
	 <p><?php echo $fila->descripcion; ?></p>
	 </div>
</section>



<?php require('../footer.php'); ?>