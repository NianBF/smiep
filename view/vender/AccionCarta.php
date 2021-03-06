<?php
date_default_timezone_set("America/Bogota");
// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

// include database configuration file
include 'Configuracion.php';
if (isset($_REQUEST['action']) && !empty($_REQUEST['action']))
{
    if ($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id_prod']))
    {
        $productID = $_REQUEST['id_prod'];
        // get product details
        $query = $db->query("SELECT * FROM producto WHERE id_prod = " . $productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id_prod' => $row['id_prod'],
            'nombreProd' => $row['nombreProd'],
            'precio' => $row['precio'],
            'qty' => 1
        );

        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem ? 'VerCarta.php' : 'index.php';
        header("Location: " . $redirectLoc);
    }
    elseif ($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id_prod']))
    {
        $itemData = array(
            'rowid' => $_REQUEST['id_prod'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem ? 'ok' : 'err';
        die;
    }
    elseif ($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id_prod']))
    {
        $deleteItem = $cart->remove($_REQUEST['id_prod']);
        header("Location: VerCarta.php");
    }
    elseif ($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID']))
    {
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orden (id_cliDoc, total, creadoEn, modificadoEn) VALUES ('" . $_SESSION['sessCustomerID'] . "', '" . $cart->total() . "', '" . date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s") . "')");

        if ($insertOrder)
        {
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach ($cartItems as $item)
            {
                $sql .= "INSERT INTO venta VALUES ('" . $orderID . "', '" . $item['qty'] . "', '" . $item['id_prod'] . "', '" . date("Y-m-d H-i-s") . "', 1001, '" . $_SESSION['sessCustomerID'] . "', 1002563489);";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);

            if ($insertOrderItems)
            {
                $cart->destroy();
                header("Location: OrdenExito.php?id_venta=$orderID");
            }
            else
            {
                header("Location: Pagos.php");
            }
        }
        else
        {
            header("Location: Pagos.php");
        }
    }
    else
    {
        header("Location: index.php");
    }
}
else
{
    header("Location: index.php");
}