<?php
    Class Ventas {


        public static function listVentas() {
            require('../Db/connection.php');
            $consulta = "SELECT nombreProducto as producto, cantidad, ventas.precio as precio, ventas.fecha as fecha FROM ventas INNER JOIN productos ON productos.id = ventas.idProducto;";
            $resultado = mysqli_query($connection, $consulta);
            $datos = mysqli_fetch_array($resultado);
            if (mysqli_num_rows($resultado) > 0) {
                while ($datos = mysqli_fetch_array($resultado)) {
                    $rows[] = $datos;
                }
            }
            return $rows;
            mysqli_close($connection);
        }
        
        public static function sendProduct($idprod,$cantidad) {
            require('../Db/connection.php');
            require('../Models/mdl_productos.php');
            $consulta = "SELECT * FROM productos WHERE id = $idprod;";
            $resultado = mysqli_query($connection, $consulta);
            if ($registros = mysqli_num_rows($resultado) > 0) {
                while($datos = mysqli_fetch_array($resultado)){
                    $newStock = $datos['stock'];
                    if($newStock != 0 && ($newStock-$cantidad)>=0){
                        $precio = $newStock * $datos['precio'];
                        $sql = "INSERT INTO ventas VALUES (NULL, $idprod, $cantidad, $precio, NOW());";
                        $result = mysqli_query($connection, $sql);
                        if ($result) {
                            $updateStock = Productos::updateStock($idprod,$cantidad);
                            echo 'Se guardó correctamente la venta.';
                        } else {
                            echo 'Se presentó un error al intentar guardar la información, por favor intente nuevamente.';
                        }
            
                    }else{
                        echo 'No hay stock disponible.';
                    }

                }
            }
            mysqli_close($connection);
        }
    }   
