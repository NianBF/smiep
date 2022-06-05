<?php
session_start();
if($_SESSION['email'] == null or $_SESSION["userName"]== null or
$_SESSION["pass"] == null ){
    header("location:../../index.php");
}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>SMIEP</title>
    <link rel="icon" type="image/png" href="../home/img/favicon.png" sizes="any">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/fonts.css">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    
</head>
<body>

<header>
        <div class="header__superior">
            <div class="logo">
                <img src="../../img/favicon.png" alt="">
            </div>
            <div class="contenedor">
            <section class="titulito">
                <h1 class="title">S.M.I.E.P</h1>
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
                <h3 class="nameEmp2">Software de Manejo <br>de Inventarios <br>para Empresas Pequeñas</h3>
            </section>
        </div>
        </div>

        <div class="container__menu">

            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label for="check__menu" id="label__check">
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="#" id="selected"></a></li>
                        <li><a href="#"><span class="icon-user"></span>Personas</a>
                            <ul>
                                <li><a href="../usuario/mostrar.php"><span class="icon-user-tie"></span>Usuarios</a></li>
                                <li><a href="../cliente/mostrar.php"><span class="icon-user-tie"></span>Clientes</a></li>
                                <li><a href="../proveedor/mostrar.php"><span class="icon-user-tie"></span>Proveedores</a></li>
                            </ul>
                        </li>
                        <li><a href="../producto/mostrar.php"><span class="icon-truck"></span>Productos</a></li>
                        <li><a href="../categoria/mostrar.php"><span class="icon-briefcase"></span>Categoria</a></li>
                        <li><a href="../tienda/mostrar.php"><span class="icon-cart"></span>Tienda</a></li>
                        <li><a href="../../module/vender/index.php"><span><i class="fa-solid fa-sack-dollar"></i></></span>Vender</a></li>
                        <li><a href="../../module/reportes/product.php"><span><i class="fa-solid fa-square-poll-horizontal"></i></span>Reportes</a></li>
                        <li><a href="../about/about.html"><span class="icon-earth"></span>Acerca de</a></li>
                        <li><a href="#"><span class="icon-mail2"></span>Contacto</a></li>
                        <li><a href="../../controller/salirCtrl.php"><span class="icon-exit"></span> Salir</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>
    <main>
        <article>
            <h2>Smiep</h2>
            <h4>Software de Manejo de Inventarios para Empresas Pequeñas</h4>
            <p>En este lugar se puede observar que, el poco control que se intenta llevar acerca del inventario de los productos, se hace en unos cuadernos y estos no permiten realizar un análisis profundo de los productos que se tienen y se deben pedir, situación que ha dado paso a pérdidas económicas, pues productos que exceden la fecha de caducidad no son contados y cambiados oportunamente. De igual forma, se observa que a falta de un buen sistema, ellos se han visto en la necesidad de hacer las cosas más esenciales a instinto y sin ninguna herramienta plausible para la tarea.</p>
        </article>
        
        

    </main>
       
    <footer class="footer">
        <p>© S.M.I.E.P | 2022 <a href="#">Acerca de S.M.I.E.P</a></p>
    </footer>

    <script src="../../public/js/main.js"></script>
</body>
</html>
<?php } ?>