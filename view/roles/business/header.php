<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shorcut icon" href="assets/img/foto.png">
  <link rel="stylesheet" href="assets/CSS/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/CSS/all.css">
  <link rel="stylesheet" href="assets/css/styles_view.css">
  <title>Mexican Food</title>
</head>
<body>

  <nav class="navegacion d-flex navbar fixed-top navbar-light sticky-top row " style="width: 100%; height: 100%;">
    <div class=" col-2 d-flex justify-content-center p-0" >
      <img src="assets/img/foto.png" class="logo" alt="" >
    </div>
    <div class="col-10   p-0">
      <div class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-light"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link " href="#"><span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link  ocul-navbar text-white" href="#"> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav">             
            <li class="nav-item">
              <a class="nav-link  ocul-navbar text-white"  href="#inicio" >Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ocul-navbar text-white"  href="#interes">De Tu Interes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ocul-navbar text-white"  href="#nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ocul-navbar text-white"  href="#contactenos">Contáctenos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ingreso
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item ocul-navbar" data-toggle="modal" data-target="#registro" href="#"><p>Registro</p></a>
                <a class="dropdown-item ocul-navbar" href="#" data-toggle="modal" data-target="#exampleModal"> <p>
                  Iniciar Sesión
                </p></a>
              </div>
            </li>            
          </ul>           
        </div>
      </div>
    </div>
  </nav>
  <!-- modal registro -->

  <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Nombres</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Apellidos</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Tipo de Documento</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Cédula de Ciudadania</option>
                <option>Tarjeta de Identidad</option>
                <option>Cédula de Extranjería</option>
                <option>Pasaporte</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Numero de Documento</label>
              <input type="number " id="numero de documento" class="form-control">
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword2">Confirmar Su Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <div class="form-group">
              <label for="phone">Teléfono:</label>
              <input type="tel" id="phone" name="phone" aria-describedby="telHelp" class="form-control">
            </div>
            <div class="form-group">
              <label for="date">Fecha de Nacimiento:</label>
              <input type="date" id="date" name="date" class="form-control">
            </div>



            <button type="button" class="btn btn-outline-dark rounded-pill" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-outline-primary rounded-pill">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- modal ingreso -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicio de sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="enviar" action="?c=Login" method="post">
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="email" class="form-control" name="userEmailLog" id="usuario" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" class="form-control" name="userPassLog" id="contrasena">
          </div>
          <div><a href="#" data-toggle="modal" data-target="#olvido">Olvidó su contraseña</a></div> <br>
          <button type="button" class="btn btn-outline-dark rounded-pill" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-primary rounded-pill">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- modal de olvido su contraseña -->
<div class="modal fade" id="olvido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Olvidó Su Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <button type="button" class="btn btn-outline-dark rounded-pill" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-primary rounded-pill">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>