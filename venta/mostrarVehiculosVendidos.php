
<?php 	

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());
	$sql="SELECT * from vehiculos";

	//$query = "SELECT * FROM `practica5`.`productos`";

	$res = mysql_query($sql, $db);
?>

 <?php require('../vendedor/headerVendedor.php') ?>

<form method="post" action="">
		<input type="text" name="">
		<input type="submit" value="Buscar" name="submit">
</form>



<table border="1" bgcolor="#7A7D6A">
	<tr>
		<td>Id</td>
		<td>marca</td>
		<td>modelo</td>
		<td>anio</td>
		<td>chasis</td>
		<td>descripcion</td>
		<td>tipo</td>
		<td>estado</td>
		<td>precio oferta</td>
		<td>precio venta</td>
		<td>foto</td>
	</tr>


<?php
	while ($row=mysql_fetch_array($res))
	{
		$id=$row["id"];
		echo '<tr><td>'.$row["id"].'&nbsp;</td>';
		echo '<td>'.$row["marca"].'&nbsp;</td>';
		echo '<td>'.$row["modelo"].'&nbsp;</td>';
		echo '<td>'.$row["anio"].'&nbsp;</td>';
		echo '<td>'.$row["chasis"].'<br></td>';
		echo '<td>'.$row["descripcion"].'<br></td>';
		echo '<td>'.$row["tipo"].'<br></td>';
		echo '<td>'.$row["estado"].'<br></td>';
		echo '<td>'.$row["preciooferta"].'<br></td>';
		echo '<td>'.$row["precioventa"].'<br></td>';
		echo '<td><a href="informacionVehiculo.php?id='.$row["id"].'" >';
		echo "<img src='".$row['foto']."' width='150' height='150' /></a><br></td>";

		//echo '<td>'.$row["Modificar"].'<br></td>';
		//echo '<td>'.$row["Eliminar"].'<br></td>';
		echo '<td><a href="modificarVehiculo.php?id='.$row["id"].'">Modificar</a><br></td>';
		echo '<td><a href="eliminarVehiculo.php?id='.$row["id"].'">Eliminar</a><br></td>';

		
	}



?>

</table>	



<?php require('../vendedor/footerVendedor.php') ?>

