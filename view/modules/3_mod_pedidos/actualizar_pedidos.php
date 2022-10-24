
  <div class="titulo row">
<div class="col p-2 border-bottom d-flex">
  <div class="col-7 p-0 d-flex justify-content-start align-items-center">
    <h1 class="m-0">Actualizar Pedido</h1>
  </div>
  <div class="col-5 d-flex justify-content-end align-items-center p-0">
    <a href="?c=Users&a=readPedido" class="btn btn-outline-dark rounded-pill">Consultar Pedido</a>
  </div>        
</div>
</div>
 <form action="?c=Users&a=updatePedido" method="post"> 
    <div class="form-group"> 
      <input type="hidden" name="idPedido"  class="form-control" value="<?php echo $user->getIdPedido(); ?>">
   

      <label for="exampleFormControlSelect1">Fecha de Pedido</label> 
      <input type="text" class="form-control" name="fechaPedido" id="exampleInputEmail1" value="<?php echo $user->getFechaPedido(); ?>" > 

      
      <label for="documento">Hora del Pedido </label> 
      <input type="text" class="form-control" name="horaPedido" value="<?php echo $user->getHoraPedido(); ?>" > 
      
      <label for="nombre"> Total Del Pedido </label> 
      <input type="text" class="form-control" name="totalPedido"  value="<?php echo $user->getTotalPedido(); ?>"> 
    </div>
    <div class="form-group"> 
      <label for="exampleFormControlSelect1">Estado del Pedido</label> 
      <select class="form-control" name="estadoPedido" id="exampleFormControlSelect1"> 
         <?php 
            for ($i=0; $i <= 1; $i++) { 
              if ($user->getEstadoPedido() == $i) {
                echo '<option value="' . ($i) . '" selected>' . $estado[$i] . '</option>';
              } else {
                echo '<option value="' . ($i) . '">' . $estado[$i] . '</option>';
              }
            }
          ?>         
      </select> 
      <label for="nombre"> Pedido a Domicilio </label> 
      <input type="text" class="form-control" name="pedidoDomicilio" value="<?php echo $user->getPedidoDomicilio(); ?>" >   
    </div> 
    <button type="submit" class="btn btn-info  btn-lg btn-block rounded-pill">Enviar</button>
  </form> 
