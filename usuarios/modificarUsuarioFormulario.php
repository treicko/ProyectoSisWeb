<?php

	$db=mysql_connect('localhost','root','')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$id=$_GET['id'];
	$sql="SELECT * from usuarios where id=".$id;

	//$query = "SELECT * FROM `practica5`.`productos`";

	$usuario_editar = mysql_query($sql, $db);
	$fila=mysql_fetch_object($usuario_editar);

	//crear el formulario
?>

<center>
	<form action="modificarUsuario.php" method="POST" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $id;?>">

		<label>C&eacute;dula de Identidad:</label>
		<input title="solo n&uacute;meros ej: 6668654" type="text" name="ci" value="<?php echo $fila->ci;?>" placeholder="C&eacute;dula de Identidad" pattern="[0-9]*" required>
		
		<br><label>Nombre:</label>
		<input type="text" name="nombre" value="<?php echo $fila->nombre;?>" placeholder="Nombre y Apellidos" required>
		
		<br><label>Email:</label>
		<input title="formato: email@ejemplo.com" type="email" name="email" value="<?php echo $fila->email;?>" placeholder="email@ejemplo.com">
		
		<br><label>Tel&eacute;fono:</label>
		<input tittle="solo n&uacute;meros ej: 79472634 o 44291743" type="text" name="telefono" value="<?php echo $fila->telefono;?>" placeholder="Telefono &oacute; Celular" pattern="[0-9]*">
		
		<br><label>Direcci&oacute;n:</label>
		<input type="text" name="direccion" value="<?php echo $fila->direccion;?>" placeholder="Direccion">
		
		<br><label>Login:</label>
		<input type="text" name="login" value="<?php echo $fila->login;?>" placeholder="Nombre de usuario" required>
		
		<br><label>Password:</label>
		<input type="password" name="password" value="<?php echo $fila->password;?>" placeholder="Contraseña" required>

		<br><label>Confirmar Password:</label>
		<input type="password" name="confirmPassword" value="<?php echo $fila->password;?>" placeholder="Confirmar Contraseña" required>
		
		<input type="submit" name="" value="Guardar">

	</form>
</center>

<?php mysql_close($db); ?>