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
    require('../Controllers/ctrl_ventas.php');
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
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-12">
        <h2 class="text-center">Listado de Ventas</h2>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor</th>
            <th scope="col">fecha</th>
          </tr>
        </thead>
        <tbody>
    <?php
    foreach($ventas as $datos) {
        echo '  
          <tr>
            <th scope="row">'.$datos['producto'].'</th>
            <td>'.$datos['cantidad'].'</td>
            <td>'.$datos['precio'].'</td>
            <td>'.$datos['fecha'].'</td>
          </tr>
          
          ';
        }
        ?>
        </tbody>
      </table>

  </div>
</div>
</body>
<script src="../Assets/Js/jquery-3.1.0.min.js"></script>
<script src="../Assets/Js/master.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>