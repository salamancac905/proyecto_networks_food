
	<title>Consultar Domicilios</title>
</head>
<body>
  <div class="col p-2  border-bottom d-flex">
    <div class="col-7 p-0 d-flex justify-content-start align-items-center">
      <h1 class="m-0">Consultar Domicilios</h1>
    </div>
    <div class="col-5 d-flex justify-content-end align-items-center p-0">
      <a href="?c=Users&a=createDomicilio" class="btn btn-outline-dark rounded-pill">Crear Domicilio</a>
    </div>
  </div>
		<table id="tbl_consultar" class="table table-striped table-bordered table-responsive text-center">
          <thead class="fondo">
            <tr>
              <th scope="col">Id Domicilio</th>
              <th scope="col">Estado Del Domicilio</th>
              <th scope="col">id pedido fk</th>
              <th scope="col">id domiciliario fk</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
              <th class="font-weight-normal"><?php echo $user->getIdDomicilio(); ?></th>
              <th class="font-weight-normal"><?php echo $user->getEstadoDomicilio(); ?></th>
              <th class="font-weight-normal"><?php echo $user->getIdPedidoFk(); ?></th>
              <th class="font-weight-normal"><?php echo $user->getIdDomiciliarioFk(); ?></th>
              <td class="d-flex flex-row pt-2 justify-content-center">
            <a href="?c=Users&a=updateDomicilio&idDomicilio=<?php echo $user->getIdDomicilio() ?>" class="btn btn-info btn-sm mx-1"><i class="fas fa-pencil-alt"></i></a>
            <a href="?c=Users&a=deleteDomicilio&idDomicilio=<?php echo $user->getIdDomicilio() ?>" class="btn btn-danger btn-sm mx-1"><i class="fas fa-trash-alt"></i></a>
          </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>