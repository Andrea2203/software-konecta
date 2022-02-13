<?php
    Class Productos {

        public static function listProduct() {
            require('../Db/connection.php');
            $consulta = "SELECT id, nombreProducto, referencia, precio, peso, stock, categoria FROM productos;";
            $resultado = mysqli_query($connection, $consulta);
            if (mysqli_num_rows($resultado) > 0) {
                while ($datos = mysqli_fetch_array($resultado)) {
                    $rows[] = $datos;
                }
            }
            return $rows;
            mysqli_close($connection);
        }

        public static function infoProduct($idProd) {
            require('../Db/connection.php');
            $consulta = "SELECT id, nombreProducto, referencia, precio, peso, categoria, stock FROM productos WHERE id= $idProd;";
            $resultado = mysqli_query($connection, $consulta);
            if (mysqli_num_rows($resultado) > 0) {
                while ($datos = mysqli_fetch_array($resultado)) {
                    echo  '
                    <form  id="formUpdate" method="post" action="../Controllers/ctrl_productos.php" autocomplete="off">
                    <div class="mb-3">
                    <input type="text" class="form-control" name="idProd" value ="'.$datos['id'].'" hidden >
                        <label for="nombre" class="form-label">Nombre Producto</label>
                        <input type="text" class="form-control" name="nombre" value ="'.$datos['nombreProducto'].'">
                    </div>    
                    <div class="mb-3">
                        <label for="referencia" class="form-label">Referencia Producto</label>
                        <input type="text" class="form-control" name="referencia" value ="'.$datos['referencia'].'">
                    </div>    
                    <div class="mb-3">
                        <label for="precio" class="form-label">precio Producto</label>
                        <input type="number" class="form-control" name="precio" value ="'.$datos['precio'].'">
                    </div>    
                    <div class="mb-3">
                        <label for="categoria" class="form-label">categoria Producto</label>
                        <input type="text" class="form-control" name="categoria" value ="'.$datos['categoria'].'">
                    </div>    
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso del Producto</label>
                        <input type="number" class="form-control" name="peso" value ="'.$datos['peso'].'">
                    </div>    
                    <div class="mb-3">
                        <label for="stock" class="form-label">stock Producto</label>
                        <input type="number" class="form-control" name="stock" value ="'.$datos['stock'].'">
                    </div>    
                    <button type="submit" class="btn btn-primary"  name="btnUpdate">Editar</button>
                    </form>';
                }
            }
            mysqli_close($connection);
        }

        public static function createProduct($nombre, $referencia, $precio, $peso, $categoria, $stock){
            require('../Db/connection.php');
            $consulta = "INSERT INTO productos VALUES (NULL, '$nombre', '$referencia', $precio, $peso, '$categoria', $stock, NOW());";
            $resultado = mysqli_query($connection, $consulta);
            if ($resultado) {
                echo "<script> alert('Se guardó correctamente el producto.');</script>";
                echo '<meta http-equiv="Refresh" content="0;url='.$_SERVER['HTTP_REFERER'].'">';
            } else {
                echo "<script> alert('Se presentó un error al intentar guardar la información, por favor intente nuevamente.');</script>";
                echo '<meta http-equiv="Refresh" content="0;url='.$_SERVER['HTTP_REFERER'].'">';
            }
            mysqli_close($connection);
        }

        
        public static function updateProduct($idProd, $nombre, $referencia, $precio, $peso, $categoria, $stock){
            require('../Db/connection.php');
            $consulta = "UPDATE productos SET stock =".$stock.", nombreProducto='".$nombre."', referencia='".$referencia."', precio =".$precio.", peso=".$peso.", categoria='".$categoria."' WHERE id = ".$idProd.";";
            $resultado = mysqli_query($connection, $consulta);

            if ($resultado) {
                echo '<script> alert("Se guardó correctamente el producto.");</script> <meta http-equiv="Refresh" content="0;url='.$_SERVER['HTTP_REFERER'].'">';
            } else {
                echo "<script> alert('Se presentó un error al intentar guardar la información, por favor intente nuevamente.');</script>";
                echo '<meta http-equiv="Refresh" content="0;url='.$_SERVER['HTTP_REFERER'].'">';
            }
            mysqli_close($connection);
        }

        public static function updateStock($idProd,$cantidad){
            require('../Db/connection.php');
            $idProd = mysqli_real_escape_string($connection, $idProd);
            $consulta = "SELECT stock FROM productos where id=".$idProd.";";
            $resultado = mysqli_query($connection, $consulta);
            if ($registros = mysqli_num_rows($resultado) > 0) {
                while ($datos = mysqli_fetch_array($resultado)) {
                    $newStock = $datos['stock']-$cantidad;
                }
                $sql = "UPDATE productos SET stock =".$newStock."  WHERE id = ".$idProd.";";
                $result = mysqli_query($connection, $sql);
                if ($resultado) {
                    return true;
                } else {
                    return false;
                }
            }
            mysqli_close($connection);
        }

        public static function  deleteProduct($idProd){
            require('../Db/connection.php');
            $idProd = mysqli_real_escape_string($connection, $idProd);
            $consulta = "DELETE FROM productos WHERE id=".$idProd.";";
            $resultado = mysqli_query($connection, $consulta);
            if ($resultado) {
                echo "Se ha eliminado exitosamente el Producto";
                
            } else {
                echo 'Se presentó un error al eliminar el producto. Por favor intente nuevamente';
            }
            mysqli_close($connection);
        }

    }
    
    ?>
