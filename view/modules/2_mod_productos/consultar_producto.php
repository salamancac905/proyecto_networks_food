
	<title>Consultar Productos</title>
</head>
<body>
  <div class="col p-2  border-bottom d-flex">
    <div class="col-7 p-0 d-flex justify-content-start align-items-center">
      <h1 class="m-0">Consultar Productos</h1>
    </div>
    <div class="col-5 d-flex justify-content-end align-items-center p-0">
      <a href="?c=Users&a=createProducto" class="btn btn-outline-dark rounded-pill">Crear Producto</a>
    </div>
  </div>
		<table id="tbl_consultar" class="table table-striped table-bordered table-responsive text-center">
          <thead class="fondo">
            <tr>
              <th scope="col">Id Producto</th>
              <th scope="col">Nombre Producto</th>
              <th scope="col">Precio Producto</th>
              <th scope="col">Categoria Producto</th>
              <th scope="col">Estado Producto</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
              <th class="font-weight-normal"><?php echo $user->getIdProducto(); ?></th>
              <th class="font-weight-normal"><?php echo $user->getNombreProducto(); ?></th>
              <td><?php echo $user->getPrecioProducto(); ?></td>
              <td><?php echo $user->getCategoriaProducto(); ?></td>
              <td><?php echo $user->getEstadoProducto(); ?></td>
              <td class="d-flex flex-row pt-2 justify-content-center">
            <a href="?c=Users&a=updateProducto&idProducto=<?php echo $user->getIdProducto() ?>" class="btn btn-info btn-sm mx-1"><i class="fas fa-pencil-alt"></i></a>
            <a href="?c=Users&a=deleteProducto&idProducto=<?php echo $user->getIdProducto() ?>" class="btn btn-danger btn-sm mx-1"><i class="fas fa-trash-alt"></i></a>
          </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
    

	
	<script src="../../../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../../../js/popper.min.js" ></script>
    <script src="../../../js/bootstrap.min.js"></script>
</body>
</html>