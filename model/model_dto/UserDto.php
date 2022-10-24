<?php 
	class UserDto{
		private $idRol;
		private $idUsuario;
		private $tipoDocumentoUsuario;
		private $numeroDocUsuario;		
		private $nombreUsuario;
		private $apellidoUsuario;
		private $telefonoUsuario;
		private $correoUsuario ;
		private $passwordUsuario;	
		private $estadoUsuario;
		//productos
		private $idProducto;
		private $nombreProducto;
		private $precioProducto;
		private $categoriaProducto;		
		private $estadoProducto;
		//pedidos
		private $idPedido;
		private $idCliente;
		private $fechaPedido;
		private $horaPedido;		
		private $totalPedido;		
		private $estadoPedido;		
		private $pedidoDomicilio;
		//domicilio
		private $idDomicilio;
		private $estadoDomicilio;
		private $idPedidoFk;
		private $idDomiciliarioFk;

		// constructores
		public function __construct(){
			$a= func_get_args();
			$i= func_num_args();
			if (method_exists($this,  $f="__construct".$i))	{
				call_user_func_array(array($this, $f), $a);
			}
		}
		//inicio de sesion
		public function __construct2($userEmailLog, $userPassLog){
			$this->correoUsuario = $userEmailLog;
			$this->passwordUsuario = $userPassLog;
		}
		//Usuarios
		public function __construct10($idRol, $idUsuario, $tipoDocumentoUsuario, $numeroDocUsuario, $nombreUsuario, $apellidoUsuario, $telefonoUsuario, $correoUsuario, $passwordUsuario, $estadoUsuario) {
			$this->idRol = $idRol;
			$this->idUsuario = $idUsuario;
			$this->tipoDocumentoUsuario = $tipoDocumentoUsuario;
			$this->numeroDocUsuario = $numeroDocUsuario;				
			$this->nombreUsuario = $nombreUsuario;
			$this->apellidoUsuario = $apellidoUsuario;
			$this->telefonoUsuario = $telefonoUsuario;
			$this->correoUsuario  = $correoUsuario;
			$this->passwordUsuario = $passwordUsuario;	
			$this->estadoUsuario = $estadoUsuario;
		}	
		//productos
		public function __construct5($idProducto, $nombreProducto, $precioProducto, $categoriaProducto, $estadoProducto) {
			$this->idProducto = $idProducto;
			$this->nombreProducto = $nombreProducto;
			$this->precioProducto = $precioProducto;
			$this->categoriaProducto = $categoriaProducto;				
			$this->estadoProducto = $estadoProducto;
		}
		//pedidos	
		public function __construct7($idPedido, $idCliente, $fechaPedido, $horaPedido, $totalPedido, $estadoPedido, $pedidoDomicilio) {
			$this->idPedido = $idPedido;
			$this->idCliente = $idCliente;
			$this->fechaPedido = $fechaPedido;
			$this->horaPedido = $horaPedido;
			$this->totalPedido = $totalPedido;				
			$this->estadoPedido = $estadoPedido;		
			$this->pedidoDomicilio = $pedidoDomicilio;
			
		}		
		//domicilio
		public function __construct4($idDomicilio, $estadoDomicilio, $idPedidoFk, $idDomiciliarioFk) {
			$this->idDomicilio = $idDomicilio;
			$this->estadoDomicilio = $estadoDomicilio;
			$this->idPedidoFk = $idPedidoFk;
			$this->idDomiciliarioFk = $idDomiciliarioFk;				
		}
		// Métodos set y get
//Usuarios
		// idRol
		public function setIdRol ($idRol){
			$this->idRol = $idRol;
		}
		public function getIdRol (){
			return $this->idRol;
		}
		// idUsuario
		public function setIdUsuario ($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		public function getIdUsuario (){
			return $this->idUsuario;
		}
		// tipoDocUsuario
		public function setTipoDocumentoUsuario ($tipoDocumentoUsuario){
			$this->tipoDocumentoUsuario = $tipoDocumentoUsuario;
		}
		public function getTipoDocumentoUsuario (){
			return $this->tipoDocumentoUsuario;
		}
		// numeroDocUsuario
		public function setNumeroDocUsuario ($numeroDocUsuario){
			$this->numeroDocUsuario = $numeroDocUsuario;
		}
		public function getNumeroDocUsuario (){
			return $this->numeroDocUsuario;
		}
		// nombreUsuario
		public function setNombreUsuario ($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getNombreUsuario (){
			return $this->nombreUsuario;
		}
		// apellidoUsuario
		public function setApellidoUsuario ($apellidoUsuario){
			$this->apellidoUsuario = $apellidoUsuario;
		}
		public function getApellidoUsuario (){
			return $this->apellidoUsuario;
		}
		// telefonoUsuario
		public function setTelefonoUsuario ($telefonoUsuario){
			$this->telefonoUsuario = $telefonoUsuario;
		}
		public function getTelefonoUsuario (){
			return $this->telefonoUsuario;
		}
		// correoUsuario
		public function setCorreoUsuario ($correoUsuario){
			$this->correoUsuario = $correoUsuario;
		}
		public function getCorreoUsuario (){
			return $this->correoUsuario;
		}
		// passwordUsuario
		public function setPasswordUsuario ($passwordUsuario){
			$this->passwordUsuario = $passwordUsuario;
		}
		public function getPasswordUsuario (){
			return $this->passwordUsuario;
		}
		// estadoUsuario
		public function setEstadoUsuario ($estadoUsuario){
			$this->estadoUsuario = boolval($estadoUsuario);
		}
		public function getEstadoUsuario (){
			return $this->estadoUsuario;
		}	

//productos
		// id Producto
		public function setIdProducto ($idProducto){
			$this->idProducto = $idProducto;
		}
		public function getIdProducto (){
			return $this->idProducto;
		}
		// nombre Producto
		public function setNombreProducto ($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}
		public function getNombreProducto (){
			return $this->nombreProducto;
		}
		// precio Producto
		public function setPrecioProducto ($precioProducto){
			$this->precioProducto = $precioProducto;
		}
		public function getPrecioProducto (){
			return $this->precioProducto;
		}
		// categoria Producto
		public function setCategoriaProducto ($categoriaProducto){
			$this->categoriaProducto = $categoriaProducto;
		}
		public function getCategoriaProducto (){
			return $this->categoriaProducto;
		}
		// estado Producto
		public function setEstadoProducto ($estadoProducto){
			$this->estadoProducto = boolval($estadoProducto);
		}
		public function getEstadoProducto (){
			return $this->estadoProducto;
		}	
	
//pedidos
		// id Pedido
		public function setIdPedido ($idPedido){
			$this->idPedido = $idPedido;
		}
		public function getIdPedido (){
			return $this->idPedido;
		}
		// id Cliente
		public function setIdCliente ($idCliente){
			$this->idCliente = $idCliente;
		}
		public function getIdCliente (){
			return $this->idCliente;
		}
		// fecha pedido
		public function setFechaPedido ($fechaPedido){
			$this->fechaPedido = $fechaPedido;
		}
		public function getFechaPedido (){
			return $this->fechaPedido;
		}
		// hora pedido
		public function setHoraPedido ($horaPedido){
			$this->horaPedido = $horaPedido;
		}
		public function getHoraPedido (){
			return $this->horaPedido;
		}
		// total pedido
		public function setTotalPedido ($totalPedido){
			$this->totalPedido = $totalPedido;
		}
		public function getTotalPedido (){
			return $this->totalPedido;
		}
		// estado pedido
		public function setEstadoPedido ($estadoPedido){
			$this->estadoPedido = boolval($estadoPedido);
		}
		public function getEstadoPedido (){
			return $this->estadoPedido;
		}	
		// pedido Domicilio
		public function setPedidoDomicilio ($pedidoDomicilio){
			$this->pedidoDomicilio = $pedidoDomicilio;
		}
		public function getPedidoDomicilio (){
			return $this->pedidoDomicilio;
		}
//domicilio
	 // id domicilio
		public function setIdDomicilio ($idDomicilio){
			$this->idDomicilio = $idDomicilio;
		}
		public function getIdDomicilio (){
			return $this->idDomicilio;
		}
		// estado domicilio
		public function setEstadoDomicilio ($estadoDomicilio){
			$this->estadoDomicilio = boolval($estadoDomicilio);
		}
		public function getEstadoDomicilio (){
			return $this->estadoDomicilio;
		}	
		// pedido fk
		public function setIdPedidoFk ($idPedidoFk){
			$this->idPedidoFk = $idPedidoFk;
		}
		public function getIdPedidoFk (){
			return $this->idPedidoFk;
		}
		// domiciliario fk
		public function setIdDomiciliarioFk ($idDomiciliarioFk){
			$this->idDomiciliarioFk = $idDomiciliarioFk;
		}
		public function getIdDomiciliarioFk (){
			return $this->idDomiciliarioFk;
		}
	}

?>