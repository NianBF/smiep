

<?php


session_start();
//Se incluye el archivo encargado de la conexion a BD
include_once ("../bd/conexion2.php");
//Se declaran las variables y se llaman los inputs que reciben información
$usua = $_POST["email"];
$nombre = $_POST["userName"];
$pass = $_POST["pass"];

//Validar datos con BD e ingresar
$query = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$usua' AND userName = '$nombre' AND pass = MD5('$pass')");
$nr = mysqli_num_rows($query);
if ($nr == 1) {
    $_SESSION["userName"] = $nombre;
	header("location: ../view/inicio/menu.php");
    //if ($rol == 'empleado') {
        /*echo "<script>window.location='private/normUser.html'</script>";*/
       // header("location: ../index.php");
    //}
    //else if ($rol == 'administrador') {
        /*echo "<script>window.location='private/admin.php'</script>";*/
      //  header("location: ../vistas/homa.php");
    //}
	
}
else {
    echo "<script>alert('Usuario o contraseña incorrecto.'); window.location= '../index.php';</script>";
}



?>