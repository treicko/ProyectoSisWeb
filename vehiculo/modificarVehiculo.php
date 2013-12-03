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

<?php require('../header.php'); ?>

	<form action ="updateVehiculo.php" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="<?php echo $id;?>">

				<div id="column1">
				<label>Marca:</label>
				<input type="text" name="marca"  value="<?php echo $fila->marca; ?>" placeholder="Toyota/Nissan...">
				
				<br><label>Modelo:</label>
				<input type="text" name="modelo"  value="<?php echo $fila->modelo; ?>" placeholder="Celica/Murano...">
				
				<br><label>Anio:</label>
				<input type="number" name="anio" min="2000" max="2015" value="<?php echo $fila->anio; ?>" placeholder="...">
				
				<br><label>Chasis:</label>
				<input type="text" name="chasis"  value="<?php echo $fila->chasis; ?>" placeholder="...">
				
				<br><label>Descripcion:</label>
				<textarea name="descripcion"  placeholder="una breve descripcion"><?php echo $fila->descripcion; ?></textarea>
				
				<br><label>Tipo:</label>
				<input type="text" name="tipo"  value="<?php echo $fila->tipo; ?>" placeholder="4x4/Familiar/deportivo...">
				</div>
				<div id="column2">
				<br><label>Estado:</label>
				<select name="estado" >
					<option value="1">disponible</option>
					<option value="0">No disponible</option>
				</select>

				<br><label>Precio Oferta:</label>
				<input type="text" name="preciooferta"  value="<?php echo $fila->preciooferta; ?>" placeholder="lo que se ofrece">
				<br><label>Precio Venta:</label>
				<input type="text" name="precioventa"  value="<?php echo $fila->precioventa; ?>" placeholder="preco de venta con la rebaja">
				
				<br><label>Elige imagen</label><br>
				<input type="file" name="foto"   >
			
			<input type="submit" name="" value="GUARDAR">

			</div>
	</form>
<?php require('../footer.php') ?>
<?php mysql_close($db); ?>