
	<div class="titulo row">
<div class="col p-2 border-bottom d-flex">
	<div class="col-7 p-0 d-flex justify-content-start align-items-center">
		<h1 class="m-0">Crear Producto</h1>
	</div>
	<div class="col-5 d-flex justify-content-end align-items-center p-0">
		<a href="?c=Users&a=readProducto" class="btn btn-outline-dark rounded-pill">Consultar Producto</a>
	</div>				
</div>
</div>
 <form action="?c=Users&a=createProducto" method="post"> 
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Nombre Del Producto</label> 
      <input type="text" class="form-control" name="nombreProducto" id="exampleInputEmail1" > 
      
      <label for="documento">Precio del producto </label> 
      <input type="number" class="form-control" name="precioProducto"  > 
      
      <label for="nombre"> Categoria del Producto </label> 
      <input type="text" class="form-control" name="categoriaProducto"  >   
    </div>
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Estado del Producto</label> 
      <select class="form-control" name="estadoProducto" id="exampleFormControlSelect1"> 
        <option value="0">Inactivo</option> 
        <option value="1">Activo</option>         
      </select> 
    </div> 
    <button type="submit" class="btn btn-info  btn-lg btn-block rounded-pill">Enviar</button>
  </form> 
