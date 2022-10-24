
  <div class="titulo row">
<div class="col p-2 border-bottom d-flex">
  <div class="col-7 p-0 d-flex justify-content-start align-items-center">
    <h1 class="m-0">Actualizar Producto</h1>
  </div>
  <div class="col-5 d-flex justify-content-end align-items-center p-0">
    <a href="?c=Users&a=readProducto" class="btn btn-outline-dark rounded-pill">Consultar Producto</a>
  </div>        
</div>
</div>
  

 <form action="?c=Users&a=updateProducto" method="post"> 
    <div class="form-group"> 
      <input type="hidden" name="idProducto"  class="form-control" value="<?php echo $user->getIdProducto(); ?>">
      <label for="exampleFormControlSelect1">Nombre Del Producto</label> 
      <input type="text" class="form-control" name="nombreProducto" value="<?php echo $user->getNombreProducto(); ?>" > 
      
      <label for="documento">Precio del producto </label> 
      <input type="number" class="form-control" name="precioProducto" value="<?php echo $user->getPrecioProducto(); ?>"  > 
      
      <label for="nombre"> Categoria del Producto </label> 
      <input type="text" class="form-control" name="categoriaProducto" value="<?php echo $user->getCategoriaProducto(); ?>" >   
    </div>
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Estado del Producto</label> 
      <select class="form-control" name="estadoProducto" id="estado">
              <?php 
            for ($i=0; $i <= 1; $i++) { 
              if ($user->getEstadoProducto() == $i) {
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
