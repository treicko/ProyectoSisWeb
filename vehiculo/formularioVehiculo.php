<?php require('../header.php'); ?>


			<form action="insertarVehiculo.php" method="POST" enctype="multipart/form-data">
				<div id="column1">
				<label>Marca:</label>
				<input type="text" name="marca"  placeholder="Toyota/Nissan...">
				
				<br><label>Modelo:</label>
				<input type="text" name="modelo"  placeholder="Celica/Murano...">
				
				<br><label>Anio:</label>
				<input type="number" name="anio" min="2000" max="2015" placeholder="...">
				
				<br><label>Chasis:</label>
				<input type="text" name="chasis"  placeholder="...">
				
				<br><label>Descripcion:</label>
				<textarea name="descripcion" placeholder="una breve descripcion"></textarea>
				
				<br><label>Tipo:</label>
				<input type="text" name="tipo"  placeholder="4x4/Familiar/deportivo...">
				</div>
				<div id="column2">
				<br><label>Estado:</label>
				<select name="estado" >
					<option value="1">disponible</option>
					<option value="0">No disponible</option>
				</select>

				<br><label>Precio Oferta:</label>
				<input type="text" name="preciooferta"  placeholder="lo que se ofrece">
				<br><label>Precio Venta:</label>
				<input type="text" name="precioventa"  placeholder="preco de venta con la rebaja">
				
				<br><label>Elige imagen</label><br>
				<input type="file" name="foto"  placeholder="ingrese imagen">
				<input type="submit" name="" value="enviar">
				</div>
			</form>
<?php require('../footer.php') ?>