<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../index.php");
}
else
{
    require_once('../../model/categoriaCrud_Mdl.php');
    require_once('../../model/categoriaMdl.php');
    $crud = new CrudCategoria();
    $Categoria = new Categoria();
    $listaCategoria = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <!--Se llaman estilos para el documento-->
    <link rel="stylesheet" href="../../public/css/categoria.css">
    <!--Estilos generales para SMIEP-->
    <link rel="stylesheet" href="../../public/css/plantillas/footer.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
    <!--Fuente de iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <section>
        <fieldset>
            <legend>Listado de Categoría</legend>
            <div class="btnMos">
                <a href='ingresar.php'><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
                <a href='../inicio/menu.php'><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
            </div>
            <div class="searchNav">
                <label for="filtrar-tabla"></label>
                <input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Categoria" class="buscar1">
                <label for="filtrar-tabla"></label>
                <input type="text" name="filtrar-tabla" id="buscar2" placeholder="Nombre Categoria" class="buscar1">
                <span class="darkMode">
                    <a id="mod" class="mod" onclick="cambiarModo()">
                        <span id="id-moon" class="btn-mode moon">
                            <i class="fas fa-sun"></i>
                        </span>/
                        <span id="id-sun" class="btn-mode sun active">
                            <i class="fas fa-moon"></i>
                        </span>
                    </a>
                </span>
            </div>
            <section class="listElements">
                <div class="titleList">
                    <h3>ID</h3>
                    <h3>Categoría</h3>
                    <h3>Eliminar</h3>
                </div>
                <div class="contentList">
                    <?php foreach ($listaCategoria as $Categoria) { ?>
                    <div class="id">
                        <?php echo $Categoria->getid_Cat() ?>
                    </div>
                    <div class="colName">
                        <?php echo $Categoria->getnCategoria() ?>
                    </div>
                    <div class="btnOpt">
                        <a class="eliminar" type="submit"
                            href="../../controller/categoriaCtrl.php?id_Cat=<?php echo $Categoria->getid_Cat()?>&accion=e">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </section>
        </fieldset>
    </section>
    <?php include_once("../plantillas/footer.html"); ?>
    <script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
    <script src="../../public/js/categoria/filtrarCategoria.js"></script>
</body>

</html>
<?php
}?>