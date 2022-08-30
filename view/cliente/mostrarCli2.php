<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../index.php");
}
else
{
    require_once('../../model/clienteCrud_mdl.php');
    require_once('../../model/ClienteMdl.php');
    $crud = new CrudCliente();
    $Cliente = new Cliente();
    $listaCliente = $crud->mostrar();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../img/favicon.png" sizes="any">
    <title>Mostrar Cliente</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/cliente2.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/plantillas/footer.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
    <link rel="stylesheet" href="../../public/css/variables.css">


    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header><?php include_once("../plantillas/header.html"); ?></header>
    <main class="contentList">
        <fieldset>

        <legend>
            <p>Listado de Clientes</p>
        </legend>
    
        <div class="btn_main">
             <a href='ingresar.php' class="add"><span><i class="fa-solid fa-plus"></i></span>Agregar</a>
             <a href='../inicio/menu.php' class="back"><span><i class="fa-solid fa-arrow-rotate-left"></i></span>Volver</a>
		</div>

        <div class="filtro">
			<div class="campos_filtro">
				<label for="filtrar-tabla"></label>
                <input type="text" name="filtrar-tabla" id="buscar1" placeholder="ID Clientes" class="buscar1">
			</div>

			<div class="btn-mod">
				<a id="mod" class="mod" onclick="cambiarModo()"><span id="id-moon" class="btn-mode moon"><i
							class="fas fa-sun"></i></span>/<span id="id-sun" class="btn-mode sun active"><i
							class="fas fa-moon"></i></span></a>
			</div>
		</div>

        <div class="table-contenedor">
            <table class="tabla">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th class="tl">Correo</th>
                        <th>Fecha de Nacimiento</th>
                        <th colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaCliente as $Cliente) {?>
                    <tr class="cliente">

                <td class="idCli">
                    <?php echo $Cliente->getId_CliDoc(); ?>
                </td>
                <td class="nombCli">
                    <?php echo $Cliente->getNombreCli1() . " " . $Cliente->getNombreCli2() . " " . $Cliente->getApellidoCli1() . " " . $Cliente->getApellidoCli2(); ?>
                </td>
                <td class="numbCli">
                    <?php echo $Cliente->getTelCli(); ?>
                </td>
                <td class="emailCli">
                    <?php echo $Cliente->getEmailCli(); ?>
                </td>
                <td class="fechNacCli">
                    <?php echo $Cliente->getFechaNac(); ?>
                </td>


                <td class="btn-cli">
                    <a class="editar" id="btnActualizar" name="btnActualizar"
                        href="actualizar.php?id_cliDoc=<?php echo $Cliente->getId_cliDoc();?>&accion=a">
                        <button type="button">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                    </a>
                </td>
                <td class="btn-cli">
                    <a type="submit" class="eliminar" id="btnEliminar" name="btnEliminar"
                        href="../../controller/clienteCtrl.php?id_cliDoc=<?php echo $Cliente->getId_CliDoc()?>&accion=e">
                        <button type="button" id="eliminar">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </a>
                </td>
            </tr>
            <?php }?>
                </tbody>
            </table>
        </div>
        </fieldset>
    </main>

    <footer>
aaa
    </footer>
    
    <script src="../../public/js/cliente/filtrarCliente.js"></script>
    <script type="text/javascript" src="../../public/js/darkMode/darkMode.js"></script>
</body>
</html>

<?php
}?>