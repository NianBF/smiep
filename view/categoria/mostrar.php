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
    <title>Mostrar Categoria</title>
    <link rel="stylesheet" href="../../public/css/categoria.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <table>
            <?php include_once("../plantillas/header.html"); ?>
    </header>
    </div>
    </div>
    <br>
    <hr>
    <br>
    <div id="main-container">
        <thead>
            <tr>
                <th>Listado de Categoria</th>
                <th colspan="2" class="bot1"><a href='ingresar.php'><button type="button" id="agregar"><i
                                class="fa-solid fa-plus"></i> Agregar</button></a>
                    <a class="bot1" href='../inicio/menu.php'><button type="button" id="volver"><i
                                class="fa-solid fa-arrow-rotate-left"></i> Volver</button></a>
                </th>
            </tr>
            <tr id="lis">
                <th colspan="2">
                    <div class="buscar">
                        <label for="filtrar-tabla"></label>
                        <input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Categoria" class="buscar1">

                        <label for="filtrar-tabla"></label>
                        <input type="text" name="filtrar-tabla" id="buscar2" placeholder="Nombre Categoria"
                            class="buscar1">
                    </div>
                </th>
                <th colspan="1">
                    <a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i
                                class="fas fa-sun"></i></span>/<span id="id-sun" class="btn-mode sun active"><i
                                class="fas fa-moon"></i></span></a>
                    <script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
                </th>
            </tr>
            <tr>
                <th class="categoria">Categoria</th>
                <th class="opc" colspan="1">Nombre</th>
                <th class="opc" colspan="1">Eliminar</th>
            </tr>
        </thead>
        <?php foreach ($listaCategoria as $Categoria)
    { ?>
        <tr class="categoria">

            <td class="idCat">
                <?php echo $Categoria->getid_Cat() ?>
            </td>
            <td class="nombCat">
                <?php echo $Categoria->getnCategoria() ?>
            </td>
            <td><a class="eliminar" type="submit"
                    href="../../controller/categoriaCtrl.php?id_Cat=<?php echo $Categoria->getid_Cat()?>&accion=e"><button
                        type="button" id="eliminar"><i class="fa-solid fa-trash-can"></i></button></a></td>
        </tr>
    </div>
    <?php }?>
    </table>
    <footer class="footer">
        <p>© S.M.I.E.P | 2022</p>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../public/js/categoria/filtrarCategoria.js"></script>
</body>

</html>
<?php
}?>