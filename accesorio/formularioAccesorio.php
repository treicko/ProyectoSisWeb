
		<div name="contenido">

			<form action="insertarAccesorio.php" method="POST" enctype="multipart/form-data">
				<label>Marca:</label>
				<input type="text" name="marca"  placeholder="INGRESE LA MARCA" AUTOFOCUS>
				
				<br><label>Modelo:</label>
				<input type="text" name="modelo"  placeholder="Para que vehiculo es ">
				
				<br><label>Anio:</label>
				<input type="number" name="anio" min="2000" max="2015" placeholder="anio :D">
								
				<br><label>Descripcion:</label>
				<textarea name="descripcion" placeholder="Descripcion del Accesorio"></textarea>
				
				<br><label>Categoria:</label>
				<input type="text" name="categoria"  placeholder="volante/aro/radio...">
				

				<br><label>Precio Oferta:</label>
				<input type="text" name="preciooferta"  placeholder="lo que se ofrece">
				<br><label>Precio Venta:</label>
				<input type="text" name="precioventa"  placeholder="preco de venta con la rebaja">
				
				<br><label>Elige imagen</label>
				<input type="file" name="foto"  placeholder="ingrese imagen">
				<input type="submit" name="" value="enviar">
			</form>
			
		</div>
