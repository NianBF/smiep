<?php
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../../");
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="any"><!-- Favicon SMIEP -->
    <meta name="theme-color" content="#339999">
    <!--Color para navegador móvil-->
    <title>SMIEP</title><!-- Título de página -->
    <?php
    switch ($_GET['action']) {
        case "read": ?>            
            <link rel="stylesheet" href="public/css/mostarAll.css">
            <?php
            break;
        case "create": ?>
            <link rel="stylesheet" href="public/css/formularios.css">
            <?php
            break;
    } ?><!-- Archivo de estilos -->
    <!--Fuentes de iconos-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <?php include_once("view/plantillas/header.html"); ?>
    </header>
    <!-- <main> -->
        <?php
       switch ($_GET['action']) {
          case "read":
             include_once("view/accion/mostrar/index.php");
                break;
          case "create":
             include_once("view/accion/agregar/index.php");
                break;
        }
        ?>
    <!-- </main> -->
    <footer>
        <?php include_once("view/plantillas/footer.html"); ?>
    </footer>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/usuario/stepsFormusu.js"></script>
<script type="module" src="public/js/usuario/validarDatosUsu.js"></script>
<!-- Filtros en tablas de datos -->
<script type="module" src="public/js/usuario/filtrarUsuarios.js"></script>
<script type="module" src="public/js/proveedor/filtrarCliente.js"></script>
<script type="module" src="public/js/proveedor/filtrarProveedor.js"></script>
<script type="text/javascript" src="public/js/darkMode/darkMode.js"></script>
<!-- Librerias para iconos (Ion-Icon y Kit-Fontawesome) -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</html>
<?php
}
?>