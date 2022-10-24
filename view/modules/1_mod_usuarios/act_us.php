
	<div class="titulo row">
<div class="col p-2 border-bottom d-flex">
	<div class="col-7 p-0 d-flex justify-content-start align-items-center">
		<h1 class="m-0">Actualizar Usuario</h1>
	</div>
	<div class="col-5 d-flex justify-content-end align-items-center p-0">
		<a href="?c=Users&a=read" class="btn btn-outline-dark rounded-pill">Consultar Usuarios</a>
	</div>				
</div>
</div>
	
		<form action="?c=Users&a=update" method="post"> 
    <div class="form-group"> 
    	<input type="hidden" name="idUsuario" id="idUsuario" class="form-control" value="<?php echo $user->getidUsuario(); ?>">
      <label for="exampleFormControlSelect1">Perfil</label> 
      				<select class="form-control" name="idRol" id="perfil">
		     	<?php 
					for ($i=1; $i <= 3; $i++) { 
						if ($user->getIdRol() == $i) {
							echo '<option value="' . ($i) . '" selected>' . $perfil[$i-1] . '</option>';
						} else {
							echo '<option value="' . ($i) . '">' . $perfil[$i-1] . '</option>';
						}
					}
				?>
			    </select>
      <label for="exampleFormControlSelect1">Tipo De Documento</label> 
      <input type="text" class="form-control" name="tipoDocumentoUsuario"  id="tipo_doc" value=" <?php echo $user->getTipoDocumentoUsuario(); ?>" > 
      <label for="documento">Numero Documento </label> 
      <input type="text" class="form-control" name="numeroDocUsuario"  id="documento" value=" <?php echo $user->getNumeroDocUsuario(); ?>" > 
      <label for="nombre"> Nombre </label> 
      <input type="text" class="form-control" name="nombreUsuario"  id="nombre"  value=" <?php echo $user->getNombreUsuario(); ?>">  
      <label for="apellido"> Apellido </label> 
      <input type="text" class="form-control" name="apellidoUsuario"  id="apellido" value=" <?php echo $user->getApellidoUsuario(); ?>" >  
    </div>
      <div class="form-group"> 
      
      <label for="telefono"> Teléfono </label> 
      <input type="text" class="form-control" name="telefonoUsuario"  id="telefono" value=" <?php echo $user->getTelefonoUsuario(); ?>" > 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Correo electrónico</label> 
      <input type="email" class="form-control" name="correoUsuario" id="exampleInputEmail1" value=" <?php echo $user->getCorreoUsuario(); ?>" > 
    </div> <div class="form-group"> 
      <label for="exampleInputPassword1">Contraseña</label> 
      <input type="password" class="form-control" name="passwordUsuario" id="exampleInputPassword1" value=" <?php echo $user->getPasswordUsuario(); ?>" > 
    </div> 
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Estado</label> 
      <select class="form-control" name="estadoUsuario" id="estado">
		      		<?php 
						for ($i=0; $i <= 1; $i++) { 
							if ($user->getEstadoUsuario() == $i) {
								echo '<option value="' . ($i) . '" selected>' . $estado[$i] . '</option>';
							} else {
								echo '<option value="' . ($i) . '">' . $estado[$i] . '</option>';
							}
						}
					?>
			    </select> 
    </div> 
    <button type="submit" class="btn btn-info  btn-lg btn-block rounded-pill">Enviar</button>
  </form> 

	