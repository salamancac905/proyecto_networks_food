<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="shorcut icon" href="assets/img/foto.png">
	<link rel="stylesheet" href="assets/CSS/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/CSS/all.css">
  <link rel="stylesheet" href="assets/CSS/admin_view.css">

	<title></title>
</head>
<body class="">
	<h1 class="text-center">Módulos</h1>
	<div class="card-deck">
  <div class="card  p-2 border-dark">
      <h5 class="card-title card-header text-center">Gestión de Usuarios</h5>
    <div class="card-body ">
    <img src="assets/img/usuario.png" class="card-img-top iconos " alt="...">
      <ul >
      	<ol><a class="btn btn-outline-dark" href="?c=Users&a=create">Registrar Usuario</a></ol>
      	<ol><a class="btn btn-outline-dark" href="?c=Users&a=read">Consultar Usuario</a></ol>
      	<ol><a class="btn btn-outline-dark" href="?c=Users&a=update">Actualizar Perfil</a></ol>
      </ul>
    </div>
    
  </div>
  <div class="card  p-2 border-dark">
      <h5 class="card-title card-header text-center">Gestión de Productos</h5>
    <div class="card-body ">
    <img src="assets/img/productos.png" class="card-img-top iconos " alt="...">
      <ul>
      	<ol><a class="btn btn-outline-dark" href="?c=Users&a=createProducto">Registrar Productos</a></ol>
      	<ol><a class="btn btn-outline-dark" href="?c=Users&a=readProducto">Consultar Productos</a></ol>
      </ul>
    </div>
    
  </div>
  <div class="card  p-2 border-dark">
      <h5 class="card-title card-header text-center">Gestión de Pedidos</h5>
    <div class="card-body ">
    <img src="assets/img/pedidos.png" class="card-img-top iconos " alt="...">
     <ul>
     	<ol><a class="btn btn-outline-dark" href="?c=Users&a=createPedido">Registrar Pedido</a></ol>
     	<ol><a class="btn btn-outline-dark" href="?c=Users&a=readPedido">Consultar Pedido</a></ol>
     </ul>
    </div>
    
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card  p-2 border-dark">
      <h5 class=" text-center card-header">Gestión de Domicilios</h5>
    <div class="card-body ">
    <img src="assets/img/domicilio.jpg" class="card-img-top iconos " alt="...">
      <ul>
      	<ol><a class="btn btn-outline-dark" href="?c=Users&a=createDomicilio">Registrar Entrega</a></ol>
      	<ol><a class="btn btn-outline-dark" href="?c=Users&a=readDomicilio">Consultar Domicilio</a></ol>
      </ul>
    </div>
    
  </div>
  <div class="card  p-2 border-dark ">
      <h5 class="card-title card-header text-center">Reporte de Pedidos por Domicilio</h5>
    <div class="card-body ">
    <img src="assets/img/reportes.png" class="card-img-top iconos " alt="...">
      <ul>
      	<ol><a class="btn btn-outline-dark" href="">Reporte Grafico</a></ol>
      </ul>
    </div>

    
  </div>
</div>






	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/popper.min.js" ></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>