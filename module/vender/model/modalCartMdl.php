<?php
/**
 * Se encarga de mostrar los datos de los productos agregados al carrito organizados en el modal de la ventana de venta.
 */
session_start();
if (isset($_SESSION['carrito'])) {
  $carrito_mio = $_SESSION['carrito'];
}
if (isset($_SESSION['carrito'])) {
  for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
    if (isset($carrito_mio[$i])) {
      if ($carrito_mio[$i] != NULL) {
        if (!isset($carrito_mio['cantidad'])) {
          $carrito_mio['cantidad'] = '0';
        } else {
          $carrito_mio['cantidad'] = $carrito_mio['cantidad'];
        }
        $total_cantidad = $carrito_mio['cantidad'];
        $total_cantidad;
        $total_cantidad++;
        if (!isset($totalcantidad)) {
          $totalcantidad = '0';
        } else {
          $totalcantidad = $totalcantidad;
        }
        $totalcantidad += $total_cantidad;
      }
    }
  }
}
if (!isset($totalcantidad)) {
  $totalcantidad = '';
} else {
  $totalcantidad = $totalcantidad;
}

?>
<ul class="prodCar">
    <?php
  if (isset($_SESSION['carrito'])) {
    $total = 0;
    for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
      if (isset($carrito_mio[$i])) {
        if ($carrito_mio[$i] != NULL) {
  ?>

    <li class="cart">
        <div class="row">
            <div class="col-10 p-0" style="text-align: left; color: #000000;">
                <h4 class="my-0">
                  <?php echo $carrito_mio[$i]['titulo']; ?>
                  <b>— (<?php echo $carrito_mio[$i]['cantidad'] ?> ud.)</b>
                </h4>
            </div>
            <div class="col-2 p-0" style="text-align: right; color: #000000;">
                <span class="text-muted" style="text-align: right; color: #000000;">
                    <b>
                    <button>Eliminar</button>
                        <h6>Subtotal</h6>
                        $
                        <?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']; ?>
                    </b>
                </span>
            </div>
        </div>
    </li>
    <?php
          $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
        }
      }
    }
  }
  ?>
    <li class="list-group-item d-flex justify-content-between">
        <span style="text-align: left; color: #000000;">Total (COP) </span>
        <strong style="text-align: left; color: #000000;">$
            <?php
      if (isset($_SESSION['carrito'])) {
        $total = 0;
        for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
          if (isset($carrito_mio[$i])) {
            if ($carrito_mio[$i] != NULL) {
              $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
            }
          }
        }
      }
      if (!isset($total)) {
        $total = '0';
      } else {
        $total = $total;
      }
      echo $total; ?>
        </strong>
    </li>
</ul>