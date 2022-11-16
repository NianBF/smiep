<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../index.php");
}
else
{
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <!--Color para navegador móvil-->
    <meta name="theme-color" content="#339999">
    <title>SMIEP</title>
    <!--Se llaman estilos para el documento-->
    <link rel="stylesheet" href="../../public/css/categoria.css">
    <!--Estilos generales para SMIEP-->
    <link rel="stylesheet" href="../../public/css/plantillas/btns.css">
    <link rel="stylesheet" href="../../public/css/mostrar.css">
    <link rel="stylesheet" href="../../public/css/searchBar.css">
    <link rel="stylesheet" href="../../public/css/plantillas/footer.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
    <link rel="stylesheet" href="../../public/css/variables.css">
    <!--Fuente de iconos-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <section class="contentList">
        <fieldset>
            <legend>Listado de Gráficas</legend>
            <div class="btnMos">
                <a href='../inicio/menu.php' class="back"><span><i
                            class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
            </div>
            <div class="searchNav">
                <div class="darkMode">
                    <a id="mod" class="mod" onclick="cambiarModo()">
                        <span id="id-moon" class="btn-mode moon">
                            <i class="fas fa-sun"></i>
                        </span>/
                        <span id="id-sun" class="btn-mode sun active">
                            <i class="fas fa-moon"></i>
                        </span>
                    </a>
                </div>
            </div>
            <section class="listElements">
                <div class="contentTable">
                    <div class="row">
                        <div class="colName">
                            Productos
                        </div>
                        <div class="btnOpt">
                            <div class="btnOptDel2">
                            <a class="eliminar" type="button" href="../../module/reportes/graficas/index.php?type=1">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            </div>
                        </div>
                    </div>                
                
            </section>
        </fieldset>
    </section>

    <footer class="footer">
    <p>© S.M.I.E.P | 2022</p>
    </footer>
</body>
</html>
<?php
}?>