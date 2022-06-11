<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>Reportes</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/producto.css">   
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <table>
        <header>
            <div class="logo">
                <img src="../../img/favicon.png" alt="Logo SMIEP" width="150rem">
                <h1 class="titulo">S.M.I.E.P</h1>
                <h3 class="subtitulo">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
            </div>
        </header>
        <br>
        <hr>
        <div id="main-container">
        <thead>
            <tr>
                <th colspan="7">Listado de Reportes <a href='../inicio/menu.php'><button type="button" id="volver"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a></th>
            </tr>

        <tr>
            <th>Nombre</th>
            <th colspan="2">Opciones</th>
        </tr>
        </thead>

        <tr>
            <td>Productos</td>
            <td><a href='../../module/reportes/product.php' target="_BLANK"><button type="button"><i class="fa-solid fa-eye"></i></button></a></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td><a href='../../module/reportes/categoria.php' target="_BLANK"><button type="button"><i class="fa-solid fa-eye"></i></button></a></td>
        </tr>
        <tr>
            <td>Usuarios</td>
            <td><a href='../../module/reportes/usuario.php' target="_BLANK"><button type="button"><i class="fa-solid fa-eye"></i></button></a></td>
        </tr>
        <tr>
            <td>Clientes</td>
            <td><a href='../../module/reportes/cliente.php' target="_BLANK"><button type="button"><i class="fa-solid fa-eye"></i></button></a></td>
        </tr>
        <tr>
            <td>Proveedores</td>
            <td><a href='../../module/reportes/provee.php' target="_BLANK"><button type="button"><i class="fa-solid fa-eye"></i></button></a></td>
        </tr>
        <tr>
            <td>Ventas</td>
            <td><a href='../../module/reportes/venta.php' target="_BLANK"><button type="button"><i class="fa-solid fa-eye"></i></button></a></td>
        </tr>
        </div>

    </table>
        <script src="../../public/js/producto/filtrarProducto.js"></script>
</body>

</html>
<?php } ?>