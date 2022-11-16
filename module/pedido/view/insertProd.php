<?php
require_once('../model/productMdl.php');
require_once('../model/productoMdl.php');
$crud = new Product();
$Producto = new ProductMdl();
$listaProducto = $crud->getProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMIEP</title>
    <link rel="stylesheet" href="../../public/css/formularios.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <form action="../controller/prodCtrl.php" method="POST">
        <div class="userBox">
            <input list="id_prod" name="id_prod" placeholder=" " required>
            <label for="id_prod">Producto</label><br>
            <datalist id="id_prod" name='id_prod'>
                <?php foreach ($listaProducto as $Producto) { ?>
                <option value="<?php echo $Producto->getId_Prod(); ?>">
                    <?php echo $Producto->getNombreProd(); ?>
                </option>
                <?php } ?>
            </datalist>
        </div>
        <div class="userBox">
            <input type='number' id="cantidad" name='cantidad' placeholder=" " required>
            <label for="docUsu">
                Cantidad
            </label>
        </div>
        <button type="submit">Agregar</button>
        <input type="hidden" name="insertar" value="1">
    </form>
    <a href="../vender/?u=v&action=buy"><button>Finalizar</button></a>


</body>

</html>