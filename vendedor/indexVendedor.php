<?php include ("../login/seguridad.php");?>

<?php $id = $_SESSION['idUsuario']; ?>

<?php require('headerVendedor.php'); ?>
	Venta: <br>
 	<br><a href="#">Registrar Una Venta</a><br>

 	<br>Perfil: <br>
 	<br><a href="../usuarios/modificarUsuarioFormulario.php?id=<?php echo $id;?>">Editar Perfil</a>

 	<br>

<?php require('footerVendedor.php') ?>