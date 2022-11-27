<?php
session_start();
if (
	$_SESSION['email'] == null or $_SESSION["userName"] == null or
	$_SESSION["pass"] == null
) {
	header("location:../../index.php");
} else {
	require_once('../../model/clienteCrud_mdl.php');
	require_once('../../model/ClienteMdl.php');
	$crud = new CrudCliente();
	$Cliente = new Cliente();

	$dato = $_GET['id_cliDoc'];
	$Cliente = $crud->obtenerCliente($_GET['id_cliDoc']);


?>

	<!DOCTYPE html>
	<html lang="es">

	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
        <!--Color para navegador móvil-->
        <meta name="theme-color" content="#339999">
        <title>SMIEP</title>
        <link rel="stylesheet" href="../../public/css/formularios.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">

    </head>

    <body>
        <header>
            <?php include_once("../plantillas/header.html"); ?>
        </header>


        <section class="initForm">

            <div class="btnMos">
                <a href='../cliente/mostrarCli.php' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
            </div>

            <div class="contForm">
                <form action='../../controller/clienteCtrl.php' name="formulario" method='post'>

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
                        <legend>Actualizar Cliente</legend>

                        <section>
                            <div class="progress-bar">
                                <div class="step">
                                    <p>Paso 1</p>
                                    <div class="bullet">
                                        <span>1</span>
                                    </div>
                                    <div class="check fas fa-check"></div>
                                </div>
                                <div class="step">
                                    <p>Paso 2</p>
                                    <div class="bullet">
                                        <span>2</span>
                                    </div>
                                    <div class="check fas fa-check"></div>
                                </div>
                                <div class="step">
                                    <p>Fin</p>
                                    <div class="bullet">
                                        <span>3</span>
                                    </div>
                                    <div class="check fas fa-check"></div>
                                </div>
                            </div>
                        </section>

                        <section class="formularios">
                            <div class="slide-page formPage">
                                <h4 class="titleSect">Documento de Identidad</h4>
                                <div class="userBox">
                                    <input type='text' id="doc" name='id_cliDoc' placeholder=" " value='<?php echo $Cliente->getId_cliDoc() ?>' readonly>
                                    <label for="id_cat">ID Usuario</label>
                                </div>
                                <div class="btn">
                                    <button class="firstNext next" id="boton1">Siguiente</button>
                                </div>
                            </div>
                            <div class="page formPage">
                                <h4 class="titleSect">Nombres y Apellidos</h4>
                                <div class="userBox">
                                    <input type='text' id="nombreCli1" name='nombreCli1' placeholder=" " value='<?php echo $Cliente->getNombreCli1() ?>'>
                                    <label for="nombreCli1">Primer Nombre</label>
                                </div>
                                <div class="userBox">
                                    <input type='text' id="nombreCli2" name='nombreCli2' placeholder=" " value='<?php echo $Cliente->getNombreCli2() ?>'>
                                    <label for="nombreCli2">Segundo Nombre</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="apellidoCli1" name='apellidoCli1' placeholder=" " value='<?php echo $Cliente->getApellidoCli1() ?>'>
                                    <label for="apellidoCli1">Primer Apellido</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="apellidoCli2" name='apellidoCli2' placeholder=" " value='<?php echo $Cliente->getApellidoCli2() ?>'>
                                    <label for="apellidoCli2">Segundo Apellido</label>
                                </div>
                                <div class="btn">
                                    <button class="prev-1 prev" id="boton1">Atrás</button>
                                    <button class="next-1 next" id="boton1">Siguiente</button>
                                </div>
                            </div>
                            <div class="page page1 formPage">
                                <h4 class="titleSect">Información de Usuario</h4>
                                
                                <div class="userBox">
                                    <input type='text' id="direc" name='direccionCli' placeholder=" " value='<?php echo $Cliente->getDireccionCli() ?>'>
                                    <label for="direc">Dirección</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="tel" name='telCli' placeholder=" " value='<?php echo $Cliente->getTelCli() ?>'>
                                    <label for="tel">Telefono</label>
                                </div>
                                
                                <div class="userBox">
                                    <input type='email' id="email" name='emailCli' placeholder=" " value='<?php echo $Cliente->getEmailCli() ?>'>
                                    <label for="tel">Correo</label>
                                </div>


                                <input type='hidden' name='actualizar' value='actualizar'>
                                <div class="btn">
                                    <button class="prev-2 prev" id="boton1">Atrás</button>
                                    <button type="submit" class="submit" id="btn-enviar" id="boton1">Enviar</button>
                                </div>
                            </div>
                            
                            <figure class="info add"><i class="fa-duotone fa-question"></i></figure>

                        </section>
                    </fieldset>
                </form>
            </div>

        </section>

        <footer>

            <?php include_once("../plantillas/footer.html"); ?>
        </footer>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../../public/js/cliente/stepsFormCli.js"></script>
        <script type="module" src="../../public/js/cliente/validarDatosCli.js"></script>
    </body>

	</html>
<?php
} ?>