<?php
$isDarkModeOn = $_COOKIE["isDarkModeOn"] === "true";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>SMIEP</title>
    
    <link rel="stylesheet" type="text/css" href="public/login.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <div class="container-form sign-UP contact-form">
        <form action="../../controller/loginCtrl.php" method="POST" id="forma" name="forma" class="formulario">
            
        <h2 class="create-account">Iniciar Sesion</h2>

            <div class="space">
                <div class="passR">
                    <a href="#" target="_blank" rel="noopener noreferrer">¿Olvidó su contraseña? <svg viewbox="0 0 70 36">
                        <path d="M6.9739 30.8153H63.0244C65.5269
                        30.8152 75.5358 -3.68471 35.4998 2.81531C-16.1598
                        11.2025 0.894099 33.9766 26.9922 34.3153C104.062 35.3153
                        54.5169 -6.68469 23.489 9.31527" /> </svg>
                    </a>
                </div>
            </div>
            <!--<p class="cuenta-gratis">S.M.I.E.P</p>-->
            <br/>
            <br/>
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

        <div class="welcome-back">
            <div class="message">
                <img src="public/img/favicon.png" id="imagen" width="500rem">
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>

            </div>

        </div>

    </div>

    <a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i
                class="fas fa-sun"></i></span>/<span id="id-sun" class="btn-mode sun active"><i
                class="fas fa-moon"></i></span></a>
    <script type="text/javascript" src="public/js/darkMode/darkMode.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/js" src="public/js/login.js"></script>
</body>

</html>