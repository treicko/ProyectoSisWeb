<?php 
	

	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());


	$tabla=$_POST['tabla'];
	
	$tipo=$_POST['tipo'];


	$sql="SELECT * from $tabla where $tipo=$tipo ";
	echo "$sql";
	$res = mysql_query($sql, $db);


?>


<?php require('../header.php') ?>
	
	<table border="1" bgcolor="#7A7D6A">

		<tr>
			<td><?php echo $tipo; ?></td>
			<td>Precio</td>
			<td>Imagen</td>
			<td>MARCAR</td>
		</tr>

	<?php 

		$total=0;
		while ($row=mysql_fetch_array($res))
		{
			$id=$row["id"];

			echo '<tr><td>'.$row["$tipo"].'&nbsp;</td>';
			echo '<td>'.$row["preciooferta"].'&nbsp;</td>';
			echo "<td><img src='".$row['foto']."' width='100' height='100' /><br></td>";

		//	echo $row['foto'];
			echo '<td> <input id="marca" type="checkbox" name="precio" value="'.$row["preciooferta"].'"><br></td>';
			//echo '<td>'.$row["Eliminar"].'<br></td>';
			//echo '<td><a href="modificarAccesorio.php?id='.$row["id"].'">Modificar</a><br></td>';
			//echo '<td><a href="eliminarAccesorio.php?id='.$row["id"].'">Eliminar</a><br></td>';

			
		}
	?>
	</table>	
<?php require('../footer.php') ?>


