<?php  session_start();

require_once"model/model_dto/UserDto.php";
require_once"model/model_dao/UserDao.php";

class Users {
	private $userDao;
	private $module;
	public function __construct(){
		$this->userDao = new UserDao;
		$this->module = $_SESSION['module'];
	}
		public function index(){
			if (isset($_SESSION['userDto']) && $userDto->getIdRol() != 2) {
				require_once 'view/roles/'.$this->module.'/header.php';
				require_once 'view/modules/1_mod_usuarios/regis_us.php';
				require_once 'view/roles/'.$this->module.'/footer.php';
			} else {
				header('Location: ?');	
			}
		}
//Crear usuario
		public function create(){
			$userDto = unserialize($_SESSION['userDto']);
			if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)) {
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					require_once 'view/roles/'.$this->module.'/header.php';
					require_once 'view/modules/1_mod_usuarios/regis_us.php';
					require_once 'view/roles/'.$this->module.'/footer.php';
				} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$userDto = new UserDto;
				$userDto -> setIdRol ($_POST ['idRol']);
				$userDto -> setIdUsuario ($_POST ['idUsuario']);
				$userDto -> setTipoDocumentoUsuario ($_POST ['tipoDocumentoUsuario']);
				$userDto -> setNumeroDocUsuario ($_POST ['numeroDocUsuario']);
				$userDto -> setNombreUsuario ($_POST ['nombreUsuario']);
				$userDto -> setApellidoUsuario ($_POST ['apellidoUsuario']);
				$userDto -> setTelefonoUsuario($_POST ['telefonoUsuario']);
				$userDto -> setCorreoUsuario($_POST ['correoUsuario']);
				$userDto -> setPasswordUsuario($_POST ['passwordUsuario']);
				$userDto -> setEstadoUsuario($_POST ['estadoUsuario']);
					$this->userDao->create($userDto);
					header('Location: ?c=Users&a=read');				
				}
			} else {
				 header('Location: ?');
			}
		}
	

//Consultar usuario
	public function read(){
		$userDto = unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$users = $this->userDao->read();			
			require_once "view/roles/".$this->module."/header.php";
			require_once "view/modules/1_mod_usuarios/usuario_consultar.php";
			require_once "view/roles/".$this->module."/footer.php";
		} else {
			header('Location: ?');
		}
	}

//Actualizar usuario

	public function update(){
		$userDto= unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$user = $this->userDao->getById($_GET['idUsuario']);
				$perfil = ['admin', 'cliente', 'domiciliario'];
				$estado = ['inactivo', 'activo'];
				$doc_id = ['Cédula de Ciudadania', 'Tarjeta de Identidad', 'Cédula de Extranjería', 'Pasaporte'];
				require_once "view/roles/".$this->module."/header.php";
				require_once "view/modules/1_mod_usuarios/act_us.php";
				require_once "view/roles/".$this->module."/footer.php";
			} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$userDto = new UserDto;
				$userDto -> setIdRol ($_POST ['idRol']);
				$userDto -> setIdUsuario ($_POST ['idUsuario']);
				$userDto -> setTipoDocumentoUsuario ($_POST ['tipoDocumentoUsuario']);
				$userDto -> setNumeroDocUsuario ($_POST ['numeroDocUsuario']);
				$userDto -> setNombreUsuario ($_POST ['nombreUsuario']);
				$userDto -> setApellidoUsuario ($_POST ['apellidoUsuario']);
				$userDto -> setTelefonoUsuario($_POST ['telefonoUsuario']);
				$userDto -> setCorreoUsuario($_POST ['correoUsuario']);
				$userDto -> setPasswordUsuario($_POST ['passwordUsuario']);
				$userDto -> setEstadoUsuario($_POST ['estadoUsuario']);
				$this->userDao->update($userDto);
				header ('Location: ?c=Users&a=read');
			}
		} else {
			header('Location: ?');
		}

	}

//Eliminar usuario
	public function delete (){
		$userDto= unserialize($_SESSION ["userDto"]);
		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$this->userDao->delete($_GET["idUsuario"]);
			header("Location:?c=Users&a=read");
		}else {
			header('Location: ?');
		} 
	}
//Modulo Producto
         //Crear producto 
		public function createProducto(){
			$userDto = unserialize($_SESSION['userDto']);
			if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)) {
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					require_once 'view/roles/'.$this->module.'/header.php';
					require_once 'view/modules/2_mod_productos/registrar_producto.php';
					require_once 'view/roles/'.$this->module.'/footer.php';
				} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$userDto = new UserDto;
				$userDto -> setIdProducto ($_POST ['idProducto']);
				$userDto -> setNombreProducto ($_POST ['nombreProducto']);
				$userDto -> setPrecioProducto ($_POST ['precioProducto']);
				$userDto -> setCategoriaProducto ($_POST ['categoriaProducto']);
				$userDto -> setEstadoProducto($_POST ['estadoProducto']);
					$this->userDao->createProducto($userDto);
					header('Location: ?c=Users&a=readProducto');				
				}
			} else {
				 header('Location: ?');
			}
		}
		//Consultar 
	public function readProducto(){
		$userDto = unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$users = $this->userDao->readProducto();			
			require_once "view/roles/".$this->module."/header.php";
			require_once "view/modules/2_mod_productos/consultar_producto.php";
			require_once "view/roles/".$this->module."/footer.php";
		} else {
			header('Location: ?');
		}
	}

//Actualizar 

	public function updateProducto(){
		$userDto= unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$user = $this->userDao->getByIdProducto($_GET['idProducto']);
				$estado = ['inactivo', 'activo'];
				require_once "view/roles/".$this->module."/header.php";
				require_once "view/modules/2_mod_productos/actualizar_producto.php";
				require_once "view/roles/".$this->module."/footer.php";
			} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$userDto = new UserDto;
				$userDto -> setIdProducto ($_POST ['idProducto']);
				$userDto -> setNombreProducto ($_POST ['nombreProducto']);
				$userDto -> setPrecioProducto ($_POST ['precioProducto']);
				$userDto -> setCategoriaProducto ($_POST ['categoriaProducto']);
				$userDto -> setEstadoProducto($_POST ['estadoProducto']);
				$this->userDao->updateProducto($userDto);
				header ('Location: ?c=Users&a=readProducto');
			}
		} else {
			header('Location: ?');
		}

	}

//Eliminar Producto
	public function deleteProducto (){
		$userDto= unserialize($_SESSION ["userDto"]);
		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$this->userDao->deleteProducto($_GET["idProducto"]);
			header("Location:?c=Users&a=readProducto");
		}else {
			header('Location: ?');
		} 
	}

	//Modulo Pedido
         //Crear pedido 
		public function createPedido(){
			$userDto = unserialize($_SESSION['userDto']);
			if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)) {
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					require_once 'view/roles/'.$this->module.'/header.php';
					require_once 'view/modules/3_mod_pedidos/registrar_pedidos.php';
					require_once 'view/roles/'.$this->module.'/footer.php';
				} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$userDto = new UserDto;
				 $userDto -> setIdPedido($_POST ['idPedido']);
				$userDto -> setFechaPedido ($_POST ['fechaPedido']);
				$userDto -> setHoraPedido ($_POST ['horaPedido']);
				$userDto -> setTotalPedido ($_POST ['totalPedido']);
				$userDto -> setEstadoPedido($_POST ['estadoPedido']);
				$userDto -> setPedidoDomicilio($_POST ['pedidoDomicilio']);
					$this->userDao->createPedido($userDto);
					header('Location: ?c=Users&a=readPedido');				
				}
			} else {
				 header('Location: ?');
			}
		}
		//Consultar Pedido
	public function readPedido(){
		$userDto = unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$users = $this->userDao->readPedido();			
			require_once "view/roles/".$this->module."/header.php";
			require_once "view/modules/3_mod_pedidos/consultar_pedidos.php";
			require_once "view/roles/".$this->module."/footer.php";
		} else {
			header('Location: ?');
		}
	}

//Actualizar pedido

	public function updatePedido(){
		$userDto= unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$user = $this->userDao->getByIdPedido($_GET['idPedido']);
				$estado = ['inactivo', 'activo'];
				$cliente = ['24', '27', '28', '29', '30', '31', '32', '33', '34', '45'];
				require_once "view/roles/".$this->module."/header.php";
				require_once "view/modules/3_mod_pedidos/actualizar_pedidos.php";
				require_once "view/roles/".$this->module."/footer.php";
			} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$userDto = new UserDto;
				$userDto -> setIdPedido ($_POST ['idPedido']);
				$userDto -> setIdCliente ($_POST ['idCliente']);
				$userDto -> setFechaPedido ($_POST ['fechaPedido']);
				$userDto -> setHoraPedido ($_POST ['horaPedido']);
				$userDto -> setTotalPedido ($_POST ['totalPedido']);
				$userDto -> setEstadoPedido($_POST ['estadoPedido']);
				$userDto -> setPedidoDomicilio($_POST ['pedidoDomicilio']);
				$this->userDao->updatePedido($userDto);
				header ('Location: ?c=Users&a=readPedido');
			}
		} else {
			header('Location: ?');
		}

	}

//Eliminar Pedido
	public function deletePedido (){
		$userDto= unserialize($_SESSION ["userDto"]);
		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$this->userDao->deletePedido($_GET["idPedido"]);
			header("Location:?c=Users&a=readPedido");
		}else {
			header('Location: ?');
		} 
	}


//domicilio
	 //crear domicilio
			public function createDomicilio(){
			$userDto = unserialize($_SESSION['userDto']);
			if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)) {
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					require_once 'view/roles/'.$this->module.'/header.php';
					require_once 'view/modules/4_mod_domicilios/registrar_domicilio.php';
					require_once 'view/roles/'.$this->module.'/footer.php';
				} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$userDto = new UserDto;
				 $userDto -> setIdDomicilio($_POST ['idDomicilio']);
				$userDto -> setEstadoDomicilio($_POST ['estadoDomicilio']);
				$userDto -> setIdPedidoFk ($_POST ['idPedidoFk']);
				$userDto -> setIdDomiciliarioFk ($_POST ['idDomiciliarioFk']);
					$this->userDao->createDomicilio($userDto);
					header('Location: ?c=Users&a=readDomicilio');				
				}
			} else {
				 header('Location: ?');
			}
		}
		//Consultar domicilio
	public function readDomicilio(){
		$userDto = unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$users = $this->userDao->readPedido();			
			require_once "view/roles/".$this->module."/header.php";
			require_once "view/modules/4_mod_domicilios/consultar_domicilio.php";
			require_once "view/roles/".$this->module."/footer.php";
		} else {
			header('Location: ?');
		}
	}

//Actualizar domicilio

	public function updateDomicilio(){
		$userDto= unserialize($_SESSION ['userDto']);
		if (isset($_SESSION['userDto']) && ($userDto->getIdRol() == 1 || $userDto->getIdRol() == 3)){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$user = $this->userDao->getByIdDomicilio($_GET['idDomicilio']);
				$estado = ['inactivo', 'activo'];
				require_once "view/roles/".$this->module."/header.php";
				require_once "view/modules/4_mod_domicilios/actualizar_domicilio.php";
				require_once "view/roles/".$this->module."/footer.php";
			} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$userDto = new UserDto;
				$userDto -> setIdDomicilio ($_POST ['idDomicilio']);
				$userDto -> setEstadoDomicilio($_POST ['estadoDomicilio']);
				$userDto -> setIdPedidoFk ($_POST ['idPedidoFk']);
				$userDto -> setIdDomiciliarioFk ($_POST ['idDomiciliarioFk']);
				$this->userDao->updateDomicilio($userDto);
				header ('Location: ?c=Users&a=readDomicilio');
			}
		} else {
			header('Location: ?');
		}

	}

//Eliminar domicilio
	public function deleteDomicilio (){
		$userDto= unserialize($_SESSION ["userDto"]);
		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==3)){
			$this->userDao->deleteDomicilio($_GET["idDomicilio"]);
			header("Location:?c=Users&a=readDomicilio");
		}else {
			header('Location: ?');
		} 
	}
















}

?>