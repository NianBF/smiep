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
    <link rel="stylesheet" href="../../public/css/usuario2.css">
    <link rel="stylesheet" href="../../public/css/plantillas/header1.css">
    <link rel="stylesheet" href="../../public/css/plantillas/footer.css">
    <link rel="stylesheet" href="../../public/css/fonts.css">
    <link rel="stylesheet" href="../../public/css/variables.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include_once("../plantillas/header.html"); ?>
    </header>
    <footer>
		<?php include_once("../plantillas/footer.html"); ?>
	</footer>
</body>

</html>
<?php
}?>