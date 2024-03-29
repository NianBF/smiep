<?php
session_start();
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../../../");
} else {
    require_once('../../../model/usuarioCrud_Mdl.php');
    require_once('../../../model/usuarioMdl.php');
    $crud = new CrudUsuario();
    $Usuario = new Usuario();

    $dato = $_GET['id_doc'];
    $Usuario = $crud->obtenerUsuario($_GET['id_doc']);
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../../../img/favicon.png" sizes="any">
        <!--Color para navegador móvil-->
        <meta name="theme-color" content="#339999">
        <title>SMIEP</title>
        <link rel="stylesheet" href="../../../public/css/formularios.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">

    </head>

    <body>
        <header>
            <?php include_once("../../plantillas/header.html"); ?>
        </header>
        <section class="initForm">

            <div class="btnMos">
                <a href='../../../?u=accion&action=read&table=usuario' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
            </div>

            <div class="contForm">


                <form action='../../../controller/usuarioCtrl.php' id="formulario" name="formulario" method='post'>

                    <fieldset class="anuncio movAds">
                        <div class="closer"><i class="fa-sharp fa-solid fa-xmark ex"></i></div>

                        <legend>Advertencia</legend>
                        <div>
                            <article>
                                <p>Debes actualizar correctmaente los campos del formulario, cada campo es necesario y obligatorio para el
                                    correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
                                <p><strong>Documento de Identidad:</strong> El Documento del Usuario no puede ser modificado.</p>
                                </br>
                                <p><strong>Nombres y Apellidos:</strong> En estos cuatro campos se pueden actualizar los nombres y apellidos.</p>
                                </br>
                                <p><strong>Información Usuario</strong> En estos campos se podra Actualizar el Nombre del Usuario, Correo y contraseña.</p>
                                </br>
                                <p><strong>Información Tienda</strong> En Estos campos se podra Actualizar el Rol, Estado y Tienda.</p>
                            </article>
                        </div>
                    </fieldset>

                    <fieldset class="contact-form">
                        <legend>Actualizar Usuario</legend>

                        <?php include_once("../../plantillas/progres_bar.html"); ?>

                        <section class="formularios">
                            <div class="slide-page formPage">
                                <h4 class="titleSect">Documento de Identidad</h4>
                                <div class="userBox">
                                    <input type='number' name='id_doc' id="id_doc" placeholder=" " value='<?php echo $Usuario->getId_doc() ?>' readonly>
                                    <label for="id_doc">ID Usuario</label>

                                </div>
                                <div class="btn">
                                    <button class="firstNext next" id="boton1">Siguiente</button>
                                </div>
                            </div>
                            <div class="page formPage">
                                <h4 class="titleSect">Nombres y Apellidos</h4>
                                <div class="userBox">
                                    <input type='text' id="nombre1" name='nombre1' placeholder=" " value='<?php echo $Usuario->getNombre1() ?>' required>
                                    <label for="nombre1">Primer Nombre</label>
                                </div>
                                <div class="userBox">
                                    <input type='text' id="nombre2" name='nombre2' placeholder=" " value='<?php echo $Usuario->getNombre2() ?>'>
                                    <label for="nombre2">Segundo Nombre</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="apellido1" name='apellido1' placeholder=" " value='<?php echo $Usuario->getApellido1() ?>' required>
                                    <label for="apellido1">Primer Apellido</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="apellido2" name='apellido2' placeholder=" " value='<?php echo $Usuario->getApellido2() ?>'>
                                    <label for="apellido2">Segundo Apellido</label>
                                </div>
                                <div class="btn">
                                    <button class="prev-1 prev" id="boton1">Atrás</button>
                                    <button class="next-1 next" id="boton1">Siguiente</button>
                                </div>
                            </div>
                            <div class="page page1 formPage">
                                <h4 class="titleSect">Información de Usuario</h4>
                                <div class="userBox">
                                    <input type='text' id="userName" name='userName' placeholder=" " value='<?php echo $Usuario->getUserName() ?>' required>
                                    <label for="userName">Nombre de Usuario</label>
                                </div>

                                <div class="userBox">
                                    <input type='email' id="email" name='email' placeholder=" " value='<?php echo $Usuario->getEmail() ?>' required>
                                    <label for="email">Correo</label>
                                </div>

                                <div class="userBox">
                                    <input type='password' id="pass" name='pass' placeholder=" " value='<?php echo $Usuario->getPass() ?>' required>
                                    <label for="pass">Contraseña</label>
                                </div>
                                <div class="btn">
                                    <button class="prev-2 prev" id="boton1">Atrás</button>
                                    <button class="next-2 next" id="boton1">Siguiente</button>
                                </div>
                            </div>
                            <div class="page infTi">
                                <h4 class="titleSect">Información de Tienda</h4>
                                <div class="userBox">
                                    <!-- <input type='text' id="nCategoria" name='nCategoria' placeholder=" "> -->
                                    <label for="rol" class="lSel">Rol</label><br>
                                    <select name="rol" id="rol" required>
                                        <optgroup label="Seleccionado">
                                            <option value='<?php echo $Usuario->getRol() ?>' selected><?php switch ($Usuario->getRol()) {
                                                                                                            case "Administrador":
                                                                                                                echo "Administrador";
                                                                                                                break;
                                                                                                            case "Empleado":
                                                                                                                echo "Empleado";
                                                                                                                break;
                                                                                                        } ?></option>
                                        </optgroup>
                                        <optgroup label="Rol">
                                            <option value="0">Elige una opción</option>
                                            <option value="Administrador">Administrador</option>
                                            <option value="Empleado">Empleado</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="userBox">
                                    <label for="id_estado" class="lSel">Estado</label><br>
                                    <select name="id_estado" id="estado" required>
                                        <optgroup label="Seleccionado">
                                            <option value='<?php echo $Usuario->getId_estado() ?>' selected>
                                                <?php switch ($Usuario->getId_estado()) {
                                                    case 1:
                                                        echo "Disponible";
                                                        break;
                                                    case 2:
                                                        echo "No Disponible";
                                                        break;
                                                } ?></option>
                                        </optgroup>
                                        <optgroup label="Estado">
                                            <option value="0">Elige una opción</option>
                                            <option value="1">Disponible</option>
                                            <option value="2">No Disponible</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="userBox">
                                    <!-- <input type='text' id="nCategoria" name='nCategoria' placeholder=" "> -->
                                    <label for="id_ti" class="lSel">Tienda</label><br>
                                    <select name="id_ti" id="idTi" required>
                                        <optgroup label="Seleccionado">
                                            <option value='<?php echo $Usuario->getId_ti() ?>' selected><?php switch ($Usuario->getId_ti()) {
                                                                                                            case 1:
                                                                                                                echo "Tienda Express";
                                                                                                                break;
                                                                                                        } ?></option>
                                        </optgroup>
                                        <optgroup label="Tienda">
                                            <option value="0">Elige una opción</option>
                                            <option value="1">Tienda Express</option>
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
        <footer>

            <?php include_once("../../plantillas/footer.html"); ?>
        </footer>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../../../public/js/usuario/stepsFormusu.js"></script>
        <script type="module" src="../../../public/js/usuario/validarDatosUsu.js"></script>
    </body>

    </html>
<?php
} ?>