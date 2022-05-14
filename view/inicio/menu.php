<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>SMIEP</title>
    <link rel="icon" type="image/png" href="../home/img/favicon.png" sizes="any">
    <link rel="stylesheet" type="text/css" href="../../public/css/stylesIndex.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/fonts.css">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/js" src="../../public/js/main.js"></script>
    
</head>
<body>

    <header class="header">
    <div class="contenedor">
            <section class="titulito">
                <h1 class="title">S.M.I.E.P</h1>
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
            </section>
        </div>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-menu"></span><img src="../home/img/favicon.png" alt="Logo SMIEP" width="80px"></a>
        </div>
        <nav>
            <ul>
                <li><a href="../producto/mostrar.php"><span class="icon-truck"></span>Productos</a></li>
                <li><a href="../categoria/vista/mostrar.php"><span class="icon-briefcase"></span>Categoria</a></li>
                <li><a href="../tienda/vista/mostrar.php"><span class="icon-cart"></span>Tienda</a></li>
                <li class="submenu">
                    <a href="#"><span class="icon-user"></span>Personas<span class="caret icon-arrow-down2"></span></a>
                    <ul class="children">
                        <li><a href="../usuario/vista/mostrar.php">Usuarios<span class="icon-user-tie"></span></a></li>
                        <li><a href="../cliente/vista/mostrar.php">Clientes<span class="icon-user-tie"></span></a></li>
                        <li><a href="../proveedor/vista/mostrar.php">Proveedor<span class="icon-user-tie"></span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="icon-earth"></span>Acerca de</a></li>
                <li><a href="#"><span class="icon-mail2"></span>Contacto</a></li>
                <li><a href="../../controller/salirCtrl.php"><span class="icon-exit"></span>Salir</a></li>
            </ul>
        </nav>
    </header>

    <section class="main">
            <article>
                <h2 class="titulo">Lorem ipsum dolor, sit amet</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia accusantium nisi,
                     obcaecati ducimus ullam modi blanditiis? Magni officiis, recusandae assumenda voluptas
                     harum nemo eligendi quaerat, dicta laborum eaque nobis deserunt.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, rerum magnam velit repellat
                     odit pariatur repellendus mollitia commodi rem, autem, soluta saepe culpa in nam blanditiis eaque perferendis aliquam nesciunt?
                </p>
            </article>

            <article>
                <h2 class="titulo">Lorem ipsum dolor, sit amet</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia accusantium nisi,
                     obcaecati ducimus ullam modi blanditiis? Magni officiis, recusandae assumenda voluptas
                     harum nemo eligendi quaerat, dicta laborum eaque nobis deserunt.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, rerum magnam velit repellat
                     odit pariatur repellendus mollitia commodi rem, autem, soluta saepe culpa in nam blanditiis eaque perferendis aliquam nesciunt?
                </p>
            </article> 
        </section>

        
        <aside>
            <div class="widget">
                <div class="imagen"></div>
            </div>
            
            <div class="widget">
                <div class="imagen"></div>
            </div>
        </aside>
       
        <footer class="footer">
        <p>© S.M.I.E.P | 2022 <a href="#">Acerca de S.M.I.E.P</a></p>
    </footer>
</body>
</html>