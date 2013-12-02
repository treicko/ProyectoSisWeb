
<?php 
	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());
	$sql="SELECT * from accesorios";

	$res = mysql_query($sql, $db);
 ?>

 <a href="formularioAccesorio.php" title="">Crear Nuevo Accesorio</a>

 <br> <br>
<center>

<table border="2" bgcolor="#4F65BF">
	<tr>
		<td>Id</td>
		<td>marca</td>
		<td>modelo</td>
		<td>anio</td>
		<td>descripcion</td>
		<td>categoria</td>
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
		echo '<td>'.$row["descripcion"].'<br></td>';
		echo '<td>'.$row["categoria"].'<br></td>';
		echo '<td>'.$row["preciooferta"].'<br></td>';
		echo '<td>'.$row["precioventa"].'<br></td>';
		echo "<td><img src='".$row['foto']."' width='200' height='200' /><br></td>";

		//echo '<td>'.$row["Modificar"].'<br></td>';
		//echo '<td>'.$row["Eliminar"].'<br></td>';
		echo '<td><a href="modificarAccesorio.php?id='.$row["id"].'">Modificar</a><br></td>';
		echo '<td><a href="eliminarAccesorio.php?id='.$row["id"].'">Eliminar</a><br></td>';

		
	}



?>

</table>	

</center>

