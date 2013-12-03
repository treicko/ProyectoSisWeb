
<?php 
	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());
	$sql="SELECT * from vehiculos";

	//$query = "SELECT * FROM `practica5`.`productos`";

	$res = mysql_query($sql, $db);
 ?>

 <?php require('../headerMostrar.php') ?>





<table border="1" bgcolor="#7A7D6A">
	<tr>
		
		<td>foto</td>
		<td>marca</td>
		<td>modelo</td>
		<td>tipo</td>
		<td>precio oferta</td>
	</tr>


<?php
	while ($row=mysql_fetch_array($res))
	{
		$id=$row["id"];
	//	echo '<tr><td>'.$row["id"].'&nbsp;</td>';
		echo '<tr></tr><td><a href="informacionVehiculo.php?id='.$row["id"].'" >';
		echo "<img src='".$row['foto']."' width='150' height='150' /></a><br></td>";
		echo '<td>'.$row["marca"].'&nbsp;</td>';
		echo '<td>'.$row["modelo"].'&nbsp;</td>';
		//echo '<td>'.$row["anio"].'&nbsp;</td>';
	//	echo '<td>'.$row["chasis"].'<br></td>';
	//	echo '<td>'.$row["descripcion"].'<br></td>';
		echo '<td>'.$row["tipo"].'<br></td>';
	//	echo '<td>'.$row["estado"].'<br></td>';
		echo '<td>'.$row["preciooferta"].'<br></td>';
	//	echo '<td>'.$row["precioventa"].'<br></td>';
	//	echo "<br>";


	}



?>

</table>	



<?php require('../footer.php') ?>

