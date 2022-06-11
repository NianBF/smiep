<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="public/img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <link rel="stylesheet" type="text/css" href="public/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container-form sign-UP">
        <form action="../../controller/loginCtrl.php" method="POST" id="forma" name="forma" class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bx-phone'></i>
                </div>
            </div>
            <p class="cuenta-gratis">S.M.I.E.P</p>
            <input type="email" id="email" name="email" placeholder="Email" required />
            <input type="text" id="userName" name="userName"  placeholder="Nombre de Usuario" required />
            <input type="password" id="pass" name="pass" placeholder="Contraseña" required />
            <input name="ingresar" id="btn" type="submit" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <img src="../../img/favicon.png" id="imagen"width="400rem">
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>

            </div>

        </div>
        
    </div>
    

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/js" src="public/js/login.js"></script>
</body>

</html>