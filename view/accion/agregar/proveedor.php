<?php
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../");
} else {
?>
		<section class="initForm">

			<div class="btnMos">
				<a href='?u=accion&action=read&table=proveedor' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
			</div>
			<div class="contForm">
				<form action='controller/ProveedorCtrl.php' id="formulario" name="formulario" method='post'>

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
						<legend>Agregar Proveedor</legend>

						<?php include_once("view/plantillas/progres_bar.html"); ?>

						<section class="formularios">
							<div class="slide-page formPage">
								<h4 class="titleSect">Documento de Identidad</h4>
								
								<div class="userBox">
									<input type='date' name='creadoEn' id="creadoEn" placeholder=" " required>
									<label for="id_doc">Fecha vinculación</label>
								</div>
								<div class="userBox">
									<input type='number' name='id_DocProv' id="id_Prov" placeholder=" " required>
									<label for="id_doc">ID Usuario</label>
								</div>
								<div class="btn">
									<button class="firstNext next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page formPage">
								<h4 class="titleSect">Nombres y Apellidos</h4>
								<div class="userBox">
									<input type='text' id="nombre1" name='nombProv1' placeholder=" " required>
									<label for="nombre1">Primer Nombre</label>
								</div>
								<div class="userBox">
									<input type='text' id="nombProv2" name='nombProv2' placeholder=" ">
									<label for="nombre2">Segundo Nombre</label>
								</div>

								<div class="userBox">
									<input type='text' id="apeProv1" name='apeProv1' placeholder=" " required>
									<label for="apellido1">Primer Apellido</label>
								</div>

								<div class="userBox">
									<input type='text' id="apeProv2" name='apeProv2' placeholder=" ">
									<label for="apellido2">Segundo Apellido</label>
								</div>
								<div class="btn">
									<button class="prev-1 prev" id="boton1">Atrás</button>
									<button class="next-1 next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page page1 formPage">
								<h4 class="titleSect">Información Empresa</h4>
								<div class="userBox">
									<input type='text' name='empresa' id="empresa" placeholder=" " required>
									<label for="userName">Empresa</label>
								</div>

								<div class="userBox">
									<input type='file' id="img" name='imgEmpresa' placeholder=" ">
									<label for="email">Imagen Empresa</label>
								</div>

								<div class="userBox">
									<input type='text' id="direc" name='direccion1' placeholder=" " required>
									<label for="direc">Direccion</label>
								</div>

								<div class="userBox">
									<input type='text' name='direccion2' placeholder=" " >
									<label for="direccion">Direccion (opcional)</label>
								</div>
								<div class="btn">
									<button class="prev-2 prev" id="boton1">Atrás</button>
									<button class="next-2 next" id="boton1">Siguiente</button>
								</div>
							</div>
							<div class="page infTi">
								<h4 class="titleSect">Información Empresa</h4>
								
								<div class="userBox">
									<input type='tel' id="tel" name='numTel1' placeholder=" " required>
									<label for="direc">Telefono</label>
								</div>

								<div class="userBox">
									<input type='tel' id="" name='numTel2' placeholder=" " >
									<label for="direccion">Telefono (opcional)</label>
								</div>
					
								<div class="userBox">
									<input type='email' id="email" name='email1' placeholder=" " required>
									<label for="direc">correo</label>
								</div>

								<div class="userBox">
									<input type='email' id="" name='email2' placeholder=" " >
									<label for="direccion">correo (opcional)</label>
								</div>
								<input type='hidden' name='insertar' value='insertar'>

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