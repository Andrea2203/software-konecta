<?php

/*Inclusión del Modelo */
include_once('../Models/mdl_productos.php');

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
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
$referencia = (isset($_POST['referencia'])) ? $_POST['referencia'] : null;
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : null;
$peso = (isset($_POST['peso'])) ? $_POST['peso'] : null;
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : null;
$stock = (isset($_POST['stock'])) ? $_POST['stock'] : null;
$delete = (isset($_POST['btnUpdate'])) ? $_POST['btnUpdate'] : null;
$delete = (isset($_POST['delete'])) ? $_POST['delete'] : null;
$create = (isset($_POST['btnCreate'])) ? $_POST['btnCreate'] : null;
/* Procesamiento peticiones al controlador  */
if($delete == true  && isset($_POST['idProd'])){
    return $producto =Productos::deleteProduct($idProd);  
}
else if(isset($_POST['btnCreate'])){
    return $producto =Productos::createProduct( $nombre, $referencia, $precio, $peso, $categoria, $stock);
}else if(isset($_POST['btnUpdate'])){
    return $producto =Productos::updateProduct($idProd, $nombre, $referencia, $precio, $peso, $categoria, $stock);
}else if(isset($_POST['idProd'])){
    return $producto =Productos::infoProduct($idProd);
}else{
    return $productos =Productos::listProduct();
}
?>
