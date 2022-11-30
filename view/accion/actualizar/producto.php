<?php
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../");
} else {
	//Se llama la categoría para poder mostrarla en el select
	require_once('model/categoriaCrud_Mdl.php');
	require_once('model/categoriaMdl.php');
	$crud = new CrudCategoria();
	$Categoria = new Categoria();
	$listaCategoria = $crud->mostrar();
	//Se llaman las clases de producto para obtener toda la información
	require_once('model/productoCRUD_Mdl.php');
	require_once('model/productoMdl.php');
	$crud = new CrudProducto();
	$Producto = new Producto();
	$Producto = $crud->obtenerProducto($_GET['id_prod']);


?>
	<section class="initForm">

		<div class="btnMos">
			<a href='?u=accion&action=read&table=producto' class="back"><span><i
						class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
		</div>

		<div class="contForm">
			<form action='controller/productoCtrl.php' id="formulario" name="formulario" method='post'>

				<fieldset class="anuncio movAds">
					<div class="closer"><i class="fa-sharp fa-solid fa-xmark ex"></i></div>

					<legend>Advertencia</legend>
					<div>
						<article>
							<p>Debes llenar los dos campos del formulario, cada campo es necesario y obligaotrio para el
								correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
							<p><strong>ID Categoría:</strong> En este campo se va a ingresar un número que sea
								consecutivo a las categorías anteriores, debe ser diferente a los ya existentes.</p>
							</br>
							<p><strong>Categoría:</strong> Se debe ingresar el nombre de la nueva categoría, no debe ser
								igual a las ya existentes.</p>
						</article>
					</div>
				</fieldset>

				<fieldset class="contact-form">
					<legend>Actualizar Productos</legend>

					<?php include_once("view/plantillas/progres_bar.html"); ?>

					<section class="formularios">
						<div class="slide-page formPage">
							<h4 class="titleSect">Producto</h4>

							<div class="userBox">
								<input type='number' id='id_prod' name='id_prod' placeholder=" "
									value='<?php echo $Producto->getId_prod() ?>' required>
								<label for="id_prod">ID Producto</label>
							</div>

							<div class="userBox">
								<input type='text' id="prod" name='nombreProd' placeholder=" "
									value='<?php echo $Producto->getNombreProd() ?>' required>
								<label for="prod">Producto</label>
							</div>

							<div class="userBox">
								<input type='text' id="img" name='imgProd' placeholder=" "
									value='<?php echo $Producto->getImgProd() ?>'>
								<label for="img">imagen</label>
							</div>
							<div class="btn">
								<button class="firstNext next" id="boton1">Siguiente</button>
							</div>
						</div>

						<div class="page formPage">
							<h4 class="titleSect">Precio Disponibilidad</h4>
							<div class="userBox">
								<input type='number' id="precio" name='precio' placeholder=" "
									value='<?php echo $Producto->getPrecio() ?>' required>
								<label for="precio">Precio</label>
							</div>
				
							<div class="userBox">
								<input type='number' id="cantDisp" name='cantidadDisp' placeholder=" "
									value="<?php echo $Producto->getCantidadDisp(); ?>" required>
								<label for="cantDisp">Cantidad Disponible</label>
							</div>


							<div class="btn">
								<button class="prev-1 prev" id="boton1">Atrás</button>
								<button class="next-1 next" id="boton1">Siguiente</button>
							</div>
						</div>

						<div class="page page1 formPage">

							<div class="userBox">
								<input type='text' id="codBar" name='codBar' placeholder=" "
									value='<?php echo $Producto->getCodBar() ?>'>
								<label for="codBar">Cod Barras</label>
							</div>

							

							<div class="btn">
								<button class="prev-2 prev" id="boton1">Atrás</button>
								<button class="next-2 next" id="boton1">Siguiente</button>
							</div>
						</div>
						<div class="page infTi">

							<div class="userBox">

								<label for="id_cat" class="lSel">Categoria</label><br>
								<select id="id_cat" name='id_cat' required>
									<optgroup label="Seleccionado">
										<option value='<?php echo $Producto->getId_cat(); ?>' selected>
											<?php echo $Producto->getnCategoria(); ?>
										</option>

									</optgroup>
									<optgroup label="Categoria">
										<option value="0">Elige una opción</option>
										<?php foreach ($listaCategoria as $Categoria) { ?>
										<option value="<?php echo $Categoria->getid_Cat(); ?>">
											<?php echo $Categoria->getnCategoria(); ?>
										</option>
										<?php } ?>
									</optgroup>
								</select>
							</div>



							<input type='hidden' name='actualizar' value='actualizar'>

							<div class="btn">
								<button class="prev-3 prev" id="boton1">Atrás</button>
								<button type="submit" class="submit" id="btn-enviar" id="boton1">Enviar</button>
							</div>
						</div>
						<figure class="info add"><i class="fa-duotone fa-question"></i></figure>

					</section>
				</fieldset>
			</form>
		</div>

	</section>
<?php
} ?>