<?php session_start(); 
/**
 * Elimina datos en la variable global del carrito.
 */
unset($_SESSION['carrito']); #Elimina todo lo relacionado al carrito y productos que se estén agregando a este
?>