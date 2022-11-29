<?php
session_start();
if($_SESSION['email']==null or $_SESSION['userName']==null or $_SESSION['pass']==null){
    header('Location: ../../../view/index.php');
}else{
    require_once("../model/PedidoCrud_Mdl.php");
    require_once("../model/PedidoMdl.php");
    $Compra = new PedidoMdl();
    $create = new PedidoCrud_Mdl();
    $id_pedido=$_POST['id_pedido'];
    $Compra->setId_Pedido($id_pedido);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
<?php
if (isset($_POST['insertar']) && $create->verificacion($Compra->getId_pedido()) == 1) {
    require_once('../model/productMdl.php');
    require_once('../model/productoMdl.php');
    $id_prod = $_POST['id_prod'];
    $cantNew = $_POST['cantidad'];
    $id_usu = $_SESSION['docUsu'];
    $price=$_POST['price'];
    $Producto = new Product();
    $obtener = new ProductMdl();
    $obtener = $Producto->obtenerProd($id_prod);
    $update = $Producto->UpdateProd($obtener->getCantidadDisp(), $cantNew, $id_prod);
    $taProd = $Producto->InstzProd($obtener->getCantidadDisp(), $cantNew, $id_prod, $id_usu, $id_pedido,$price);
    if($taProd === true and $update===true){
        echo "<script>
        Swal.fire({
            toast: true,
            title: 'Éxito',
            text: 'Registro guardado con éxito ',
            icon: 'success',
            showConfirmButton:true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok',
            timer:800
         }).then((result) => {
            if (result) {
                    window.location.href = '../view/insertProd.php?id_pedido=".$id_pedido."';					
                    }
                });
         </script>";
    }else{
        echo "<script>
        Swal.fire({
            title: '¡UPS!',
            text: 'No se guardó el registro ',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
         }).then((result) => {
            if (result.isConfirmed) {
                    window.location.href = '../view/insertProd.php?id_pedido=".$id_pedido."';					
                    }
                });
         </script>";
    }

}else{
echo "<script>
    Swal.fire({
        toast: true,
        title: '¡Ups!',
        text: 'Acceso Denegado',
        icon: 'warning',
        showConfirmButton:true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok',
        timer:1500
     }).then((result) => {
        if (result) {
                window.location.href = '../';					
                }
            });
     </script>";
}
}
?>
</body>
</html>