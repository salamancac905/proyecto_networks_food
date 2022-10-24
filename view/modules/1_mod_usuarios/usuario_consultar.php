
	<title>Consultar Usuarios</title>
</head>
<body>
  <div class="col p-2  border-bottom d-flex">
    <div class="col-7 p-0 d-flex justify-content-start align-items-center">
      <h1 class="m-0">Consultar Usuarios</h1>
    </div>
    <div class="col-5 d-flex justify-content-end align-items-center p-0">
      <a href="?c=Users&a=create" class="btn btn-outline-dark rounded-pill">Crear Usuario</a>
    </div>
  </div>
		<table id="tbl_consultar" class="table table-striped table-bordered table-responsive text-center">
          <thead class="fondo">
            <tr>
              <th scope="col">Id Rol</th>
              <th scope="col">Id Usuario</th>
              <th scope="col">Tipo de Documento</th>
              <th scope="col">Numero de Documento</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Telefono</th>
              <th scope="col">Correo</th>
              <th scope="col">Contraseña</th>
              <th scope="col">Estado</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
              <th class="font-weight-normal"><?php echo $user->getIdRol(); ?></th>
              <th class="font-weight-normal"><?php echo $user->getIdUsuario(); ?></th>
              <td><?php echo $user->getTipoDocumentoUsuario(); ?></td>
              <td><?php echo $user->getNumeroDocUsuario(); ?></td>
              <td><?php echo $user->getNombreUsuario(); ?></td>
              <td><?php echo $user->getApellidoUsuario(); ?></td>
              <td><?php echo $user->getTelefonoUsuario(); ?></td>
              <td><?php echo $user->getCorreoUsuario(); ?></td>
              <td><?php echo $user->getPasswordUsuario(); ?></td>
              <td><?php echo $user->getEstadoUsuario(); ?></td>
              <td class="d-flex flex-row pt-2 justify-content-center">
            <a href="?c=Users&a=update&idUsuario=<?php echo $user->getIdUsuario() ?>" class="btn btn-info btn-sm mx-1"><i class="fas fa-pencil-alt"></i></a>
            <a href="?c=Users&a=delete&idUsuario=<?php echo $user->getIdUsuario() ?>" class="btn btn-danger btn-sm mx-1"><i class="fas fa-trash-alt"></i></a>
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