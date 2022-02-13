<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    require('../Controllers/ctrl_productos.php');
 ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="/Views/productos.php">Productos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/Views/crearProductos.php">Crear Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Views/ventas.php">Carrito de compras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Views/listaVentas.php">Ventas</a>
      </li>
      
    </ul>
  </div>
</nav>
</nav>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-12">
        <h2 class="text-center">Crear Producto</h2>
    </div>
    <div class="col col-12">
    <form  id="formUpdate" method="post" action="../Controllers/ctrl_productos.php" autocomplete="off">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Producto</label>
            <input type="text" class="form-control" name="nombre">
        </div>    
        <div class="mb-3">
            <label for="referencia" class="form-label">Referencia Producto</label>
            <input type="text" class="form-control" name="referencia">
        </div>    
        <div class="mb-3">
            <label for="precio" class="form-label">Precio Producto</label>
            <input type="number" class="form-control" name="precio" >
        </div>    
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria Producto</label>
            <input type="text" class="form-control" name="categoria" >
        </div>    
        <div class="mb-3">
            <label for="peso" class="form-label">Peso del Producto</label>
            <input type="number" class="form-control" name="peso">
        </div>    
        <div class="mb-3">
            <label for="stock" class="form-label">Stock Producto</label>
            <input type="number" class="form-control" name="stock">
        </div>    
        <button type="submit" class="btn btn-primary"  name="btnCreate">Crear Nuevo Producto</button>
        </form>
    </div>

    
    <!-- Modal -->
<div class="modal fade" id="modalProductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalEditar">
        ...
      </div>
      
    </div>
  </div>
</div>
  </div>
</div>
</body>
<script src="../Assets/Js/jquery-3.1.0.min.js"></script>
<script src="../Assets/Js/master.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>