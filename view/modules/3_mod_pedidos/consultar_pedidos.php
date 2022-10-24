
	<title>Consultar Pedidos</title>
</head>
<body>
  <div class="col p-2  border-bottom d-flex">
    <div class="col-7 p-0 d-flex justify-content-start align-items-center">
      <h1 class="m-0">Consultar Pedidos</h1>
    </div>
    <div class="col-5 d-flex justify-content-end align-items-center p-0">
      <a href="?c=Users&a=createPedido" class="btn btn-outline-dark rounded-pill">Crear Pedido</a>
    </div>
  </div>
		<table id="tbl_consultar" class="table table-striped table-bordered table-responsive text-center">
          <thead class="fondo">
            <tr>
              <th scope="col">Id Pedido</th>
              <th scope="col">Id Cliente</th>
              <th scope="col">Fecha del Pedido</th>
              <th scope="col">Hora del Pedido</th>
              <th scope="col">Total del Pedido</th>
              <th scope="col">Estado Pedido</th>
              <th scope="col">Pedido a Domicilio</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
              <th class="font-weight-normal"><?php echo $user->getIdPedido(); ?></th>
              <th class="font-weight-normal"><?php echo $user->getIdCliente(); ?></th>
              <td><?php echo $user->getFechaPedido(); ?></td>
              <td><?php echo $user->getHoraPedido(); ?></td>
              <td><?php echo $user->getTotalPedido(); ?></td>
              <td><?php echo $user->getEstadoPedido(); ?></td>
              <td><?php echo $user->getPedidoDomicilio(); ?></td>
              <td class="d-flex flex-row pt-2 justify-content-center">
            <a href="?c=Users&a=updatePedido&idPedido=<?php echo $user->getIdPedido() ?>" class="btn btn-info btn-sm mx-1"><i class="fas fa-pencil-alt"></i></a>
            <a href="?c=Users&a=deletePedido&idPedido=<?php echo $user->getIdPedido() ?>" class="btn btn-danger btn-sm mx-1"><i class="fas fa-trash-alt"></i></a>
          </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>