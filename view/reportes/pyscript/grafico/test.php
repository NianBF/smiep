<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../index.php");
}
else
{
    require_once('../../../../model/productoCRUD_Mdl.php');
    require_once('../../../../model/productoMdl.php');
    $crud = new CrudProducto();
    $Producto = new Producto();
    $listaProducto = $crud->mostrar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <title>SMIEP</title>
</head>
<body>
    <h1>Me rindo con esto</h1>
    <div>
        <p><py-env>
- numpy
- matplotlib
</py-env>
</head>
<body>
<div id="mpl"></div>
<py-script output="mpl">
import matplotlib.pyplot as plt
import matplotlib.tri as tri
import numpy as np
<?php foreach ($listaProducto as $Producto) {?>
## Declaramos valores para el eje x
eje_x = ['<?php echo $Producto->getNombreProd() ?>']
 
## Declaramos valores para el eje y
eje_y = [<?php echo $Producto->getCantidadDisp() ?>]
<?php }?>
## Creamos Gráfica
plt.bar(eje_x, eje_y)
 
## Legenda en el eje y
plt.ylabel('Cantidad de Producto')
 
## Legenda en el eje x
plt.xlabel('Nombre Producto')
 
## Título de Gráfica
plt.title('Productos')
 
## Mostramos Gráfica
plt
</py-script></p>
    </div>
</body>
</html>
<?php }?>