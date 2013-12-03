<?php require('../header.php'); ?>
			
					
					<form action="login.php" method="POST" >

						<label>Nombre De Usuario:</label>
						<input type="text" name="login"  placeholder="Nombre de usuario" required>
						
						<br><label>Contraseña:</label>
						<input type="password" name="password"  placeholder="Contraseña" required>
						
						<input type="submit" name="" value="Ingresar">

					</form>
				

					<label>
						<?php 
							if(isset($msj_error)){
								session_start();
								echo $_SESSION['msj_error']; 
								unset ($msj_error);
							}		
						?>
					</label>

					<a href="../usuarios/insertarUsuarioFormulario.php">Registrarse</a>
			
				</div>


<?php require('../footer.php') ?>