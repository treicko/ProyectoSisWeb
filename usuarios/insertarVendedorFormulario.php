<?php require('../header.php'); ?>

			<form action="insertarUsuario.php" method="POST" enctype="multipart/form-data">

				<label>C&eacute;dula de Identidad:</label>
				<input title="solo n&uacute;meros ej: 6668654" type="text" name="ci"  placeholder="C&eacute;dula de Identidad" pattern="[0-9]*" required>
				
				<br><label>Nombre:</label>
				<input type="text" name="nombre"  placeholder="Nombre y Apellidos" required>
				
				<br><label>Email:</label>
				<input title="formato: email@ejemplo.com" type="email" name="email"  placeholder="email@ejemplo.com">
				
				<br><label>Tel&eacute;fono:</label>
				<input tittle="solo n&uacute;meros ej: 79472634 o 44291743" type="text" name="telefono"  placeholder="Telefono &oacute; Celular" pattern="[0-9]*">
				
				<br><label>Direcci&oacute;n:</label>
				<input type="text" name="direccion"  placeholder="Direccion">
				
				<br><label>Login:</label>
				<input type="text" name="login" placeholder="Nombre de usuario" required>
				
				<br><label>Password:</label>
				<input type="password" name="password"  placeholder="Contraseña" required>

				<br><label>Confirmar Password:</label>
				<input type="password" name="confirmPassword"  placeholder="Confirmar Contraseña" required>
				
				<input type="hidden" name="rol" value="vendendor">

				<input type="submit" name="" value="Registrar">
			</form>
			
<?php require('../footer.php') ?>