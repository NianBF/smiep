<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{
	require_once('../../model/usuarioCrud_Mdl.php');
	require_once('../../model/usuarioMdl.php');
	$crud = new CrudUsuario();
	$Usuario = new Usuario();
	$listaUsuario = $crud->mostrar();
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
    
    <link rel="stylesheet" href="../../public/css/tablas.css">
    <link rel="stylesheet" href="../../public/css/searchBar.css">
    <link rel="stylesheet" href="../../public/css/mostrar.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/plantillas/footer.css">
    <link rel="stylesheet" href="../../public/css/plantillas/btns.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
    <link rel="stylesheet" href="../../public/css/variables.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <!--Fuente de iconos-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <section class="contentList">
        <fieldset>
            <legend>Listado de Usuarios</legend>
            <div class="btnMos">
                <a href='ingresar.php' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
                <a href='../inicio/menu.php' class="back"><span><i
                            class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
            </div>

            <div class="searchNav">
                <div class="buscarOne">
                    <input type="text" name="filtrar-tabla1" class="buscar1" id="buscar1" placeholder="ID Usuario"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla1">ID</label>
                </span>
                <div class="buscarTwo">
                    <input type="text" name="filtrar-tabla2" class="buscar1" id="buscar2" placeholder="Usuario"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla2">Usuario</label>
                </span>
                <div class="buscarThree">
                    <input type="text" name="filtrar-tabla3" class="buscar1" id="buscar3" placeholder="Rol Usuario"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla3">Rol</label>
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

            <div class="listElements">
                <table >
                    <thead>
                        <tr class="titleTable">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th class="opcTitle">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="contentTable">
                    <?php foreach ($listaUsuario as $Usuario) {?>
                    <tr class="row">
                        <td class="id">
                            <?php echo $Usuario->getId_doc() ?>
                        </td>
                        <td class="colName">
                            <?php echo $Usuario->getNombre1()." ".$Usuario->getNombre2()." ".$Usuario->getApellido1()." ".$Usuario->getapellido2() ?>
                        </td>
                        <td class="userName">
                            <?php echo $Usuario->getUserName() ?>
                        </td>
                        <td class="email">
                            <?php echo $Usuario->getEmail() ?>
                        </td>
                        <td class="rol">
                            <?php echo $Usuario->getRol() ?>
                        </td>
                        <td class="btnOpt">
                            <a class="delete btnOptDel" type="submit"
                                href="../../controller/usuarioCtrl.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=e">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                    
                            <a class="update btnOptUpd" type="submit"
                                href="actualizar.php?id_doc=<?php echo $Usuario->getId_doc()?>&accion=a">
                                    <i class="fa-solid fa-pencil"></i>
                            </a>
                        </td>
                            
                        
                    </tr> 
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </section>
    <footer>
        <?php include_once("../plantillas/footer.html"); ?>
    </footer>
    <script src="../../public/js/usuario/filtrarUsuarios.js"></script>
	<script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
</body>

</html>
<?php
}?>