<?php

/*Inclusión del Modelo */
include_once('../Models/mdl_ventas.php');

/*
    cod1: ID de proyecto.
    cod2: ID de solicitud inicial.
    cod3: ID de solicitud específica.
    sup: ID de asignado para hacer eliminación.
    sol: ID de solicitud para hacer eliminación.
    pry: ID de proyecto para hacer eliminación.
*/

/* Inicialización variables  */
$idProd = (isset($_POST['idProd'])) ? $_POST['idProd'] : null;
$cantidad = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : null;
/* Procesamiento peticiones al controlador  */

$ventas =Ventas::listVentas();
if(isset($_POST['idProd']) ){
    return Ventas::sendProduct($idProd, $cantidad);  
}
?>
