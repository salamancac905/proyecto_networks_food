
	<div class="titulo row">
<div class="col p-2 border-bottom d-flex">
	<div class="col-7 p-0 d-flex justify-content-start align-items-center">
		<h1 class="m-0">Crear Usuario</h1>
	</div>
	<div class="col-5 d-flex justify-content-end align-items-center p-0">
		<a href="?c=Users&a=read" class="btn btn-outline-dark rounded-pill">Consultar Usuarios</a>
	</div>				
</div>
</div>
	

 <form action="?c=Users&a=create" method="post"> 
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Tipo De Documento</label> 
      
      <input type="text" class="form-control" name="tipoDocumentoUsuario" id="exampleInputEmail1" > 
      
      <label for="exampleFormControlSelect1">Perfil</label> 
      <select class="form-control" name="idRol" id="exampleFormControlSelect1"> 
        <option value="1">Administrador</option> 
        <option value="2">Cliente</option> 
        <option value="3">Domiciliario</option> 
      </select>
      <label for="documento">Numero Documento </label> 
      <input type="text" class="form-control" name="numeroDocUsuario"  id="documento"> 
      <label for="nombre"> Nombre </label> 
      <input type="text" class="form-control" name="nombreUsuario"  id="nombre">  
      <label for="apellido"> Apellido </label> 
      <input type="text" class="form-control" name="apellidoUsuario"  id="apellido">  
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Correo electrónico</label> 
      <input type="email" class="form-control" name="correoUsuario" id="exampleInputEmail1" > 
    </div> <div class="form-group"> 
      <label for="exampleInputPassword1">Contraseña</label> 
      <input type="password" class="form-control" name="passwordUsuario" id="exampleInputPassword1"> 
    </div> 
      <div class="form-group"> 
      
      <label for="telefono"> Teléfono </label> 
      <input type="text" class="form-control" name="telefonoUsuario"  id="telefono"> 
    </div>
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Estado</label> 
      <select class="form-control" name="estadoUsuario" id="exampleFormControlSelect1"> 
        <option value="0">Inactivo</option> 
        <option value="1">Activo</option>         
      </select> 
    </div> 
    <button type="submit" class="btn btn-info  btn-lg btn-block rounded-pill">Enviar</button>
  </form> 
