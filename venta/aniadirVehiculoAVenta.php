<?php require('../vendedor/headerVendedor.php'); ?>

<?php

	$db=mysql_connect('localhost','root','')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];
	
	$sql="SELECT * from vehiculos where id=".$id;
	
	//$query = "SELECT * FROM `practica5`.`productos`";

	$vehiculo_editar = mysql_query($sql, $db);
	$fila=mysql_fetch_object($vehiculo_editar);	

	//crear el formulario
?>
<section>
	<form method="post" action="../venta/registrarVenta.php">
		<input type="hidden" name="idVehiculo" value='<?php echo $fila->id; ?>' >
		<h1><?php echo $fila->marca; ?></h1>
		<h2><?php echo $fila->modelo; ?></h2>
		<h1><?php echo $fila->preciooferta; ?> $u$</h1>
		<div id="column1">
		<img src='<?php echo $fila->foto; ?>' width="200" height="200">
		</div>

		<div id="column2">
		 <p><?php echo $fila->descripcion; ?></p>
		</div>
		<div id="column3">
			<input type="text" name="precioFinal" value="<?php echo $fila->preciooferta; ?>" >
		 <!-- <center><h1><?php #echo $fila->preciooferta; ?> $u$</h1></center> -->
		</div>

		<input type="submit" value="Realizar la Compra" name"submit">

	</form>	

</section>

<?php require('../vendedor/footerVendedor.php'); ?>