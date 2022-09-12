<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{	require_once('../../model/clienteCrud_mdl.php');	require_once('../../model/ClienteMdl.php');
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
    <link rel="stylesheet" href="stepsForm.css">
    <link rel="stylesheet" href="../../public/css/plantillas/formsnic.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/tablas.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
    <link rel="stylesheet" href="../../public/css/variables.css">
    <link rel="stylesheet" href="../../public/css/plantillas/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <section class="initForm">

            <div class="btnMos">
                <a href='../usuario/mostrarUsu.php' class="back"><span><i
                class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
        	</div>
            
        <div class="contForm">
        <form action='../../controller/usuarioCtrl.php' name="formulario" method='post'>

		<img class="info" src="https://img.icons8.com/hands/100/000000/experimental-question-mark-hands.png"/>

        <fieldset class="anuncio invisible">
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
                    <legend>Actualizar Usuario</legend>

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
                                <p>Paso 3</p>
                                <div class="bullet">
                                    <span>3</span>
                                </div>
                                <div class="check fas fa-check"></div>
                            </div>
                            <div class="step">
                                <p>Fin</p>
                                <div class="bullet">
                                    <span>4</span>
                                </div>
                                <div class="check fas fa-check"></div>
                            </div>
                        </div>
                    </section>
					
					
						
<!-- <body>
	<div class="contenedor">
		<span class="icon">
			<figure class=""><img src="../../img/favicon.png" alt="Logo SMIEP" width="170px"></figure>
		</span>
		<div class="contact-wrapper animated bounceInUp">
			<div class="contact-form">
				<h3>Cambia los datos del Cliente</h3>
				<form action='../../controller/clienteCtrl.php' name="formulario" method='post'>
					<p>
						<label for="nombreCli1">Primer Nombre</label>
						<input type='text' placeholder="Primer Nombre" id="nombreCli1" name='nombreCli1'
							value='<?php echo $Cliente->getNombreCli1()?>'>
							<input type="hidden" name='id_cliDoc' value="<?php echo $Cliente->getId_cliDoc()?>">
					</p>
					<p>
						<label for="nombreCli2">Segundo Nombre</label>
						<input type='text' placeholder="Segundo Nombre" id="nombreCli2" name='nombreCli2'
							value='<?php echo $Cliente->getNombreCli2()?>'>
					</p>
					<p>
						<label for="apellidoCli1">Primer Apellido</label>
						<input type='text' placeholder="Primer Apellido" id="apellidoCli1" name='apellidoCli1'
							value='<?php echo $Cliente->getApellidoCli1()?>'>
					</p>
					<p>
						<label for="apellidoCli2">Segundo Apellido</label>
						<input type='text' placeholder="Segundo Apellido" id="apellidoCli2" name='apellidoCli2'
							value='<?php echo $Cliente->getApellidoCli2()?>'>
					</p>
					<p>
						<label for="direc">Dirección</label>
						<input type='text' id="direc" placeholder="Dirección" name='direccionCli'
							value='<?php echo $Cliente->getDireccionCli()?>'>
					</p>
					<p>
						<label for="tel">Telefono</label>
						<input type='number' id="tel" placeholder="telefono" name='telCli'
							value='<?php echo $Cliente->getTelCli()?>'>
					</p>
					<p>
						<label for="email">Correo</label>
						<input type='email' id="email" placeholder="ejemplo@smiep.com.co" name='emailCli'
							value='<?php echo $Cliente->getEmailCli()?>'>
					</p>
					<p>
						<label for="FecNac">Fecha de Nacimiento</label>
						<input type='date' id="FecNac" placeholder="fecha de nacimineto" name='fechaNac'
							value='<?php echo $Cliente->getFechaNac()?>'>
					</p>

					<input type='hidden' name='actualizar' value='actualizar'>

					<p class='block'>
						<button type='submit' id="btn" name="btn" value='Guardar'>
							Guardar
						</button>
					</p>
					<p class='block'>
						<a href="mostrarCli.php"><button type="button">Volver</button></a>
					</p>

				</form>
			</div>
		</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../../public/js/cliente/actializarCliente.js"></script>
</body> -->

</html>
<?php
}?>