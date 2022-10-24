
  <div class="titulo row">
<div class="col p-2 border-bottom d-flex">
  <div class="col-7 p-0 d-flex justify-content-start align-items-center">
    <h1 class="m-0">Actualizar Domicilio</h1>
  </div>
  <div class="col-5 d-flex justify-content-end align-items-cent er p-0">
    <a href="?c=Users&a=readDomicilio" class="btn btn-outline-dark rounded-pill">Consultar Domicilio</a>
  </div>        
</div>
</div>
 <form action="?c=Users&a=updateDomicilio" method="post"> 
  <input type="hidden" name="idDomicilio"  class="form-control" value="<?php echo $user->getIdDomicilio(); ?>">
   <label for="exampleFormControlSelect1">Estado del Domicilio</label> 
      <select class="form-control" name="estadoDomicilio" id="exampleFormControlSelect1"> 
        <?php 
            for ($i=0; $i <= 1; $i++) { 
              if ($user->getEstadoDomicilio() == $i) {
                echo '<option value="' . ($i) . '" selected>' . $estado[$i] . '</option>';
              } else {
                echo '<option value="' . ($i) . '">' . $estado[$i] . '</option>';
              }
            }
          ?>   
      </select> 
      <input type="hidden" name="idPedidoFk"  class="form-control" value="<?php echo $user->getIdPedidoFk(); ?>">
      <input type="hidden" name="idDomiciliarioFk"  class="form-control" value="<?php echo $user->getIdDomiciliarioFk(); ?>"> 
    </div>
    <button type="submit" class="btn btn-info  btn-lg btn-block rounded-pill">Enviar</button>
  </form> 
