<?php 
	$db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];

	$sql="select * from usuarios where id=".$id."";
	//$sql="select * from usuarios where id='6' ";

	$res = mysql_query($sql, $db);

	$row=mysql_fetch_array($res);

	if($row['rol']=="gerente"){	
		require('../gerente/headerGerente.php');
	}
	else if ($row['rol']=="vendendor") {
		require('../vendedor/headerVendedor.php');
		
	}
	else{
		require('../cliente/headerCliente.php');
	}
 ?>

<center>

<table border="2">

<?php
	
		echo '<tr><td>Ci: </td><td>'.$row["ci"].'&nbsp;</td></tr>';
		echo '<tr><td>Nombre: </td><td>'.$row["nombre"].'&nbsp;</td></tr>';
		echo '<tr><td>Email: </td><td>'.$row["email"].'&nbsp;</td></tr>';
		echo '<tr><td>Telefono: </td><td>'.$row["telefono"].'</td></tr>';
		echo '<tr><td>Direccion: </td><td>'.$row["direccion"].'</td></tr>';
		echo '<tr><td>Rol: </td><td>'.$row["rol"].'</td></tr>';
		echo '<tr><td>Login: </td><td>'.$row["login"].'</td></tr>';
?>
</table>

</center>

<?php 
	if($row['rol']=="gerente"){	
		require('../gerente/footerGerente.php');
	}
	else if ($row['rol']=="vendendor") {
		require('../vendedor/footerVendedor.php');
		
	}
	else{
		require('../cliente/footerCliente.php');
	} 
?>