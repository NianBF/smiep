<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
	header("location:../../index.php");
}
else
{
	require_once('../../model/proveedorCrud_Mdl.php');
	require_once('../../model/proveedorMdl.php');
	$crud = new CrudProveedor();
	$Proveedor = new Proveedor();
	$listaProveedor = $crud->mostrar();
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
   
    <link rel="stylesheet" href="../../public/css/mostarAll.css">
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

        <legend>Listado de Proveedores</legend>
        <div class="btnMos">
                <a href='ingresar.php' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
                <a href='../../' class="back"><span><i
                            class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
        </div>

        
        <div class="searchNav">
            <div class="buscarOne">
                <input type="text" name="filtrar-tabla1" class="buscar1" id="buscar1" placeholder="ID Clientes"
                    class="buscar1">
                <button type="button" class="searchBtn">
                    <i class="ri-search-2-line"></i>
                </button>
            </div>
            <span class="labelsito">
                <label for="filtrar-tabla1">ID</label>
            </span>

            <div class="buscarTwo">
                    <input type="text" name="filtrar-tabla2" class="buscar1" id="buscar2" placeholder="Empresa"
                        class="buscar1">
                    <button type="button" class="searchBtn">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <span class="labelsito">
                    <label for="filtrar-tabla2">Empresa</label>
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
            <table>
                <thead>
                    <tr class="titleTable">
                        <th>ID Proveedor</th>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th class="opcTitle">Opciones</th>
                    </tr>
                </thead>
                <tbody class="contentTable">
                <?php foreach ($listaProveedor as $Proveedor) {?>
                <tr class="row">

                    <td class="idProv id">
						<?php echo $Proveedor->getId_DocProv() ?>
                    </td>
                    <td class="nombreProv">
						<?php echo $Proveedor->getNombProv1()." ".$Proveedor->getNombProv2()." ".$Proveedor->getApeProv1()." ".$Proveedor->getApeProv2() ?>
                    </td>
                    <td class="empresa">
						<?php echo $Proveedor->getEmpresa() ?>
                    </td>
                    <td class="direccion">
						<?php echo $Proveedor->getDireccion1()." ".$Proveedor->getDireccion2() ?>
                    </td>
                    <td class="numProv">
						<?php echo $Proveedor->getNumTel1() ?>
                    </td>
                    <td class="email">
						<?php echo $Proveedor->getEmail1() ?>
                    </td>

                    <td class="btnOpt">
                        <a class="delete btnOptDel" type="submit"
                        href="../../controller/ProveedorCtrl.php?id_DocProv=<?php echo $Proveedor->getId_DocProv();?>&accion=e">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                
                        <a class="update btnOptUpd" type="submit"
                        href="actualizar.php?id_DocProv=<?php echo $Proveedor->getId_DocProv()?>&accion=a">
                                <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        </fieldset>
    </section>
	<footer>
        <?php include_once("../plantillas/footer.html"); ?>
    </footer>
	<script type="module" src="../../public/js/proveedor/filtrarProveedor.js"></script>
</body>

</html>
<?php
}?>