<?php 
	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());


?>

<?php require('../headerMostrar.php'); ?>


	
	<form action="buscarCotizacion.php" method="post" accept-charset="utf-8">
		
		<label>VEHICULO</label>
		<input type="radio" name="tabla" value="vehiculos" placeholder="">
		<br>
		
		<label>ACCESORIO</label>
		<input type="radio" name="tabla" value="accesorios" placeholder="">
		<br>


		<LABEL>TIPO::</LABEL>

		<select name="tipo" >
			<option value="marca">MArca</option>
			<option value="modelo">Modelo</option>
			<option value="modelo">Modelo</option>
			<option value="preciooferta">Precio De Oferta</option>
		</select>
		<input type="submit" name="" value="BUSCAR">
	</form>

<?php require('../footer.php') ?>
