<?php 
	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());
	$sql="SELECT * from usuarios";

	//$query = "SELECT * FROM `practica5`.`productos`";

	$res = mysql_query($sql, $db);
 ?>
<center>
<table border="2">
	<tr>
		<td>Id</td>
		<td>Ci</td>
		<td>Nombre</td>
		<td>Email</td>
		<td>Telefono</td>
		<td>Direccion</td>
		<td>Rol</td>
		<td>Login</td>
		<td>Password</td>
		<td>Estado</td>	
		<td colspan="2">Accionaes</td>	
	</tr>

<?php
	while ($row=mysql_fetch_array($res))
	{
		$id=$row["id"];
		echo '<tr><td>'.$id.'&nbsp;</td>';
		echo '<td>'.$row["ci"].'&nbsp;</td>';
		echo '<td>'.$row["nombre"].'&nbsp;</td>';
		echo '<td>'.$row["email"].'&nbsp;</td>';
		echo '<td>'.$row["telefono"].'<br></td>';
		echo '<td>'.$row["direccion"].'<br></td>';
		echo '<td>'.$row["rol"].'<br></td>';
		echo '<td>'.$row["login"].'<br></td>';
		echo '<td>'.$row["password"].'<br></td>';
		echo '<td>'.$row["estado"].'<br></td>';

		echo '<td><a href="modificarUsuarioFormulario.php?id='.$id.'">Modificar</a><br></td>';
		echo '<td><a href="eliminarUsuario.php?id='.$id.'">Eliminar</a><br></td></tr>';
	}
?>
</table>	
</center>