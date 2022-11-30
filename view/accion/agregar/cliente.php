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
                <a href='?u=accion&action=read&table=cliente' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
            </div>

            <div class="contForm">
                <form action='controller/clienteCtrl.php' name="formulario" method='post'>

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
                        <legend>Agregar Cliente</legend>

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
                                    <input type='text' id="doc" name='id_cliDoc' placeholder=" ">
                                    <label for="id_cat">ID Usuario</label>
                                </div>
                                <div class="btn">
                                    <button class="firstNext next" id="boton1">Siguiente</button>
                                </div>
                            </div>
                            <div class="page formPage">
                                <h4 class="titleSect">Nombres y Apellidos</h4>
                                <div class="userBox">
                                    <input type='text' id="nombreCli1" name='nombreCli1' placeholder=" ">
                                    <label for="nombreCli1">Primer Nombre</label>
                                </div>
                                <div class="userBox">
                                    <input type='text' id="nombreCli2" name='nombreCli2' placeholder=" ">
                                    <label for="nombreCli2">Segundo Nombre</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="apellidoCli1" name='apellidoCli1' placeholder=" ">
                                    <label for="apellidoCli1">Primer Apellido</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="apellidoCli2" name='apellidoCli2' placeholder=" ">
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
                                    <input type='text' id="direc" name='direccionCli' placeholder=" ">
                                    <label for="direc">Dirección</label>
                                </div>

                                <div class="userBox">
                                    <input type='text' id="tel" name='telCli' placeholder=" ">
                                    <label for="tel">Telefono</label>
                                </div>
                                
                                <div class="userBox">
                                    <input type='email' id="email" name='emailCli' placeholder=" ">
                                    <label for="tel">Correo</label>
                                </div>

                                <div class="userBox">
                                    <input type='date' id="FecNac" name='fechaNac' placeholder=" ">
                                    <label for="FecNac">Fecha de Nacimiento</label>
                                </div>

                                <input type='hidden' name='insertar' value='insertar'>
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
<?php
} ?>