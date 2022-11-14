<?php
/**
 * Genera inputs invisibles para enviar datos a la BD
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


    <div class="invisiblesH">
    
        <?php echo "<input type='hidden' name='qty' id='qty' value='" . $carrito_mio[$i]['cantidad'] . "'/>"; ?>
        <?php echo "<input type='hidden' name='id_prod' id='id_prod' value='" . $carrito_mio[$i]['ref'] . "'/>"; ?>
      
        <?php
                  $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
              }
          }
      }
  }
  ?>
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
      } ?>
        <?php echo "<input type='hidden' name='total' id='total' value='" . $total . "'/>"; ?>

    </div>