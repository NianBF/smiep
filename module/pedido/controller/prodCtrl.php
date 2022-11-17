<?php
session_start();
if (isset($_POST['insertar'])) {
    require_once('../model/productMdl.php');
    require_once('../model/productoMdl.php');
    $id_pedido = $_POST['id_pedido'];
    $id_prod = $_POST['id_prod'];
    $cantNew = $_POST['cantidad'];
    $id_usu = $_SESSION['docUsu'];
    $Producto = new Product();
    $obtener = new ProductMdl();
    $obtener = $Producto->obtenerProd($id_prod);
    $update= $Producto->UpdateProd($obtener->getCantidadDisp(), $cantNew, $id_prod);
    $taProd= $Producto->InstzProd($obtener->getCantidadDisp(), $cantNew, $id_prod, $id_usu, $id_pedido);
    if($update===true and $taProd ===true){
    echo "<script>
    Swal.fire({
        title: 'Éxito',
        text: 'Registro guardado con éxito ',
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok'
     }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../view/insertProd.php?id_pedido=" . $id_pedido . "';					
        }
            });
     </script>";
    }else{
        echo "<script>
        Swal.fire({
            title: '¡Ups!',
            text: 'No se guardó el registro ',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
         }).then((result) => {
            if (result.isConfirmed) {
                    window.location.href = '../';					
                    }
                });
         </script>";
    }
}