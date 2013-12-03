

<?php include ("../login/seguridad.php");?>

<?php $id = $_SESSION['idUsuario']; ?>

<?php require('headerGerente.php'); ?>
	Vehiculos: <br>
 	<br><a href="#">Registrar Un vehiculo</a>
 	<br><a href="#">Modificar Un vehiculo</a>
 	<br><a href="#">Eliminar un vehiculo</a><br>

 	<br>Accesorios: <br>
 	<br><a href="#">Registrar Un Accesorio</a>
 	<br><a href="#">Modificar Un Accesorio</a>
 	<br><a href="#">Eliminar un Accesorio</a><br>

	<br>Vendedores: <br>
 	<br><a href="#">Registrar Un Vendedor</a>
 	<br><a href="#">Eliminar Un Vendedor</a><br>

 	<br>Reportes: <br>
 	<br><a href="#">Ver Ventas</a><br>

 	<br>Perfil: <br>
 	<br><a href="../usuarios/perfilUsuario.php?id=<?php echo $id;?>">Ver Perfil</a>
 	<br><a href="../usuarios/modificarUsuarioFormulario.php?id=<?php echo $id;?>">Editar Perfil</a><br>


<?php require('footerGerente.php') ?>