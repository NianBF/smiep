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
            <legend>Listado de Categorías</legend>
            <div class="btnMos">
                <a href='ingresar.php' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
                <a href='../inicio/menu.php' class="back"><span><i
                            class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
            </div>
            <div class="searchNav">
                <div class="buscarOne">
                    <input type="text" name="filtrar-tabla1" class="buscar1" id="buscar1" placeholder="ID Categoria"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla1">ID</label>
                </span>
                <div class="buscarTwo">
                    <input type="text" name="filtrar-tabla2" class="buscar1" id="buscar2" placeholder="Categoria"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla2">Categoría</label>
                </span>
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
                <div class="titleList">
                    <h3>Categorías</h3>
                </div>
                <div class="contentTable">
                    <?php foreach ($listaCategoria as $Categoria) { ?> 
                    <div class="row">
                        <div class="id">
                            <?php echo $Categoria->getid_Cat() ?>
                        </div>
                        <div class="colName">
                         <?php echo $Categoria->getnCategoria() ?>
                        </div>
                        <div class="btnOpt">
                            <div class="btnOptDel">
                            <a class="eliminar" type="submit" href="../../controller/categoriaCtrl.php?id_Cat=<?php echo $Categoria->getid_Cat()?>&accion=e">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            </div>
                        </div>
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