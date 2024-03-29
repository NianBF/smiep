<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null){
    header("location:../../index.php");
} else { ?>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    //Se incluye el modelo de Insertar
    require_once("../model/PedidoCrud_Mdl.php");
    require_once("../model/PedidoMdl.php");

    $Compra = new PedidoMdl();
    $create = new PedidoCrud_Mdl();
    $Compra->setId_Pedido($_POST['id_compra']);
    $Compra->setId_doc($_SESSION['docUsu']);
    $Compra->setTotalPrice($_POST['cantidadCP']);
    $Compra->setId_docProv($_POST['docProv']);
    $Compra->setCreadoEn($_POST['creadoEn']);

    if ((isset($_POST['insertar'])) && ($create->verificacion($Compra->getId_pedido())) == 0) {
        $create->insertar($Compra);
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
                        window.location.href = '../view/insertProd.php?id_pedido=" . $_POST['id_compra'] . "';					
                        }
                    });
             </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'ID Repetido',
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
    ?>
</body>

</html>