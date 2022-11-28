<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="any">
    <title>SMIEP</title>

    <link rel="stylesheet" type="text/css" href="public/css/login.css">


    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <main>
        <div class="container-form sign-UP contact-form">

            <div class="formualrio_1">
                <form action="controller/loginCtrl.php" method="POST" id="forma" name="forma" class="formulario" autocomplete="off">

                    <h2 class="create-account">Iniciar Sesion</h2>

                    <div class="space">
                        <div class="passR">
                            <a href="recoveryPass/recoveryPass.php" target="_blank" rel="noopener noreferrer">¿Olvidó su contraseña? <svg viewbox="0 0 70 36">
                                    <path d="M6.9739 30.8153H63.0244C65.5269
                        30.8152 75.5358 -3.68471 35.4998 2.81531C-16.1598
                        11.2025 0.894099 33.9766 26.9922 34.3153C104.062 35.3153
                        54.5169 -6.68469 23.489 9.31527" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <br />
                    <br />
                    <div class="userBox">
                        <input type="email" id="email" name="email" placeholder=" " required />
                        <label>Email</label>
                    </div>
                    <div class="userBox">
                        <input type="text" id="userName" name="userName" placeholder=" " required />
                        <label>Usuario</label>
                    </div>
                    <div class="userBox">
                        <input type="password" id="pass" name="pass" placeholder=" " required />
                        <label>Contraseña</label>
                    </div>
                    <div>
                        <input name="ingresar" id="btn" type="submit" value="Iniciar Sesion">

                    </div>
                </form>

            </div>

            <div class="welcome-back">
                <div class="message">
                    <img src="img/favicon.png" id="imagen" width="400rem">
                    <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>

                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include_once("view/plantillas/btnModOsc.html"); ?>
        <?php include_once("view/plantillas/footer.html") ?>
    </footer>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/js" src="public/js/login.js"></script>
</body>

</html>