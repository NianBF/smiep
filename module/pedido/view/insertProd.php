<?php
session_start();
if (
    $_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null
) {
    header("location:../../../index.php");
} else if ($_GET['id_pedido'] == null) {
    header('location:../');
} else {
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
    <link rel="stylesheet" href="../../../public/css/formularios.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="icon" type="image/png" href="http://smiep.herokuapp.com/img/favicon.png" sizes="any">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <header>
        <?php
    include_once("plantillas/header/headerAd.html");
        ?>
    </header>
    <div class="contForm">
        <section class="initForm">
            <?php
    if ($_SESSION['rol'] == 'Administrador') {
        echo "<div class='btnMos'>
                <a href='../../../view/inicio/menu.php' class='back'><span><i
                            class='fa-solid fa-arrow-rotate-left'></i></span>Finalizar</a>
            </div>";
    } else if ($_SESSION['rol'] == 'Empleado') {
        echo "<div class='btnMos'>
                <a href='../../vender/?u=v&action=buy' class='back'><span><i
                            class='fa-solid fa-arrow-rotate-left'></i></span>Finalizar</a>
            </div>";
    }
            ?>
            <form action="../controller/prodCtrl.php" method="POST">
                <fieldset class="anuncio movAds">
                    <div class="closer"><i class="fa-sharp fa-solid fa-xmark ex"></i></div>

                    <legend>Advertencia</legend>
                    <div>
                        <article>
                            <p>Debes llenar los dos campos del formulario, cada campo es necesario y obligaotrio para el
                                correcto manejo de este nuevo dato a agregar en la base de datos.</p></br>
                            <p><strong>Producto</strong> En este campo encontrará los productos existentes en el
                                sistema,
                                debe escribir el nombre y seleccionar el producto correspondiente. (No modifique el
                                número que seleccionó, en caso de que no encuentre el producto en la lista desplegable,
                                solicite a un Administrador que lo agregue como un nuevo producto)</p>
                            </br>
                            <p><strong>Cantidad:</strong> Debe ingresar la cantidad de unidades que llegaron en el
                                pedido.</p> </br>

                            <p><strong>Precio de Llegada:</strong> Debe ingresar el valor por el cual llegó el produtco
                            </p>
                        </article>
                    </div>
                </fieldset>
                <fieldset class="contact-form">
                    <legend>Agregar Producto</legend>
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
                        <label for="cantidad">
                            Cantidad
                        </label>
                    </div>
                    <div class="userBox">
                        <input type='number' id="price" name='price' placeholder=" " required>
                        <label for="price">
                            $ Precio de Llegada
                        </label>
                    </div>
                    <div class="btn">
                        <button type="submit" class="submit" id="btn-enviar">Agregar</button>
                        <input type="hidden" name="insertar" value="1">
                        <input type="hidden" name="id_pedido" value="<?php echo $_GET['id_pedido'] ?>">
                    </div>
                    <figure class="info add"><i class="fa-duotone fa-question"></i></figure>
            </form>
        </section>
        </fieldset>

    </div>
    <footer>

        <?php include_once("plantillas/footer/footer.html"); ?>
    </footer>

</body>

</html>
<?php } ?>