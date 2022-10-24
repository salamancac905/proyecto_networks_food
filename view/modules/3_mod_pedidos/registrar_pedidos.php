
	<div class="titulo row">
<div class="col p-2 border-bottom d-flex">
	<div class="col-7 p-0 d-flex justify-content-start align-items-center">
		<h1 class="m-0">Crear Pedido</h1>
	</div>
	<div class="col-5 d-flex justify-content-end align-items-center p-0">
		<a href="?c=Users&a=readPedido" class="btn btn-outline-dark rounded-pill">Consultar Pedido</a>
	</div>				
</div>
</div>
 <form action="?c=Users&a=createPedido" method="post"> 
    <div class="form-group"> 
     <label for="exampleFormControlSelect1">id Cliente</label> 
      <select class="form-control" name="idCliente" id="exampleFormControlSelect1"> 
        <option value="0">24</option> 
        <option value="1">27</option>         
        <option value="2">28</option>         
        <option value="3">29</option>         
        <option value="4">30</option>         
        <option value="5">31</option>         
        <option value="6">32</option>         
        <option value="7">33</option>         
        <option value="8">34</option>         
        <option value="9">45</option>         
      </select> 

      <label for="exampleFormControlSelect1">Fecha de Pedido</label> 
      <input type="text" class="form-control" name="fechaPedido" id="exampleInputEmail1" > 

      
      <label for="documento">Hora del Pedido </label> 
      <input type="text" class="form-control" name="horaPedido"  > 
      
      <label for="nombre"> Total Del Pedido </label> 
      <input type="text" class="form-control" name="totalPedido"  > 
    </div>
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Estado del Pedido</label> 
      <select class="form-control" name="estadoPedido" id="exampleFormControlSelect1"> 
        <option value="0">Inactivo</option> 
        <option value="1">Activo</option>         
      </select> 
      <label for="nombre"> Pedido a Domicilio </label> 
      <input type="text" class="form-control" name="pedidoDomicilio"  >   
    </div> 
    <button type="submit" class="btn btn-info  btn-lg btn-block rounded-pill">Enviar</button>
  </form> 
