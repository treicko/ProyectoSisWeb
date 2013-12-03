<?php include ("../login/seguridad.php");?>

<?php require('../cliente/headerCliente.php') ?>

<?php $id = $_SESSION['idUsuario']; ?>

	Autos: <br>
 	<br><a href="#">Ver catalogo Autos</a><br>

 	<br>Accesorios: <br>
 	<br><a href="#">Ver catalogo Accesorios</a><br>

 	<br>Perfil: <br>
 	<br><a href="../usuarios/perfilUsuario.php?id=<?php echo $id;?>">Ver Perfil</a>
 	<br><a href="../usuarios/modificarUsuarioFormulario.php?id=<?php echo $id;?>">Editar Perfil</a>

 	<br>

<?php require('../cliente/footerCliente.php'); ?>