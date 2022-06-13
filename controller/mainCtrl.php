
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>	
<body>

<?php

session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["userName"]) && isset($_SESSION["pass"]))
{
        
    require_once("model/validarMdl.php");
    $validar = new Validar();
    $validar->validarDatos();

    include_once("view/inicio/menu.php");

}
else
{

    if (isset($_SESSION["error"]))
    {

        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ususario, correo o contraseña incorrectos!'
          })</script>";
        unset($_SESSION["error"]);

    }

    include_once("view/index.php");
}

?>


</body>
</html>