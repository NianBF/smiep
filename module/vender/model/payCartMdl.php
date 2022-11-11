<?php
/**
 * Se encarga de mostrar los datos de los productos agregados al carrito organizados en la vista de pagos para enviar estos datos organizados a la DB.
 */
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
      <div class="prod" style="text-align: left; color: #000000;">
        <h4 class="tiProd">
          <img class="imgProd" src="<?php echo $carrito_mio[$i]['imagen']; ?>" alt="Producto">
          (<?php echo $carrito_mio[$i]['cantidad'] ?> ud.)
          —
          <?php echo $carrito_mio[$i]['titulo']; ?>
        </h4>
        <sub>$
          <?php echo $carrito_mio[$i]['precio']; ?> c/u
        </sub>
      </div>
      <div class="col-2 p-0" style="text-align: right; color: #000000;">
        <span class="text-muted" style="text-align: right; color: #000000;">
          <b>
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
  <li class="total">
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