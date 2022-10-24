<?php 
class UserDao{
	private $pdo;
	public function __construct(){
		try{
			$this->pdo = DataBase::conexion();
		} catch (Exeption $e) {
			die ($e->getMessage());
		}
	}
#INICIAR SESION  
	public function LoginStart($userDto){		
		$sql = "SELECT * FROM usuarios WHERE
		correoUsuario = :userEmailLog AND
		passwordUsuario = sha1(:userPassLog)";
		$dbh = $this->pdo->prepare($sql);		
		$dbh->bindValue ("userEmailLog", $userDto->getCorreoUsuario());
		$dbh->bindValue ("userPassLog", $userDto->getPasswordUsuario());
		$dbh->execute();
		$userDb = $dbh->fetch();		
		if ($userDb) {
			$userDto = new UserDto (
				$userDb['idRol'],
				$userDb['idUsuario'],
				$userDb['tipoDocumentoUsuario'],
				$userDb['numeroDocUsuario'],
				$userDb['nombreUsuario'],
				$userDb['apellidoUsuario'],
				$userDb['telefonoUsuario'],
				$userDb['correoUsuario'],
				$userDb['passwordUsuario'],
				$userDb['estadoUsuario']
			);
			return $userDto;
		} else{
			return false;
		}
	}
		#CREAR CONSSULTA
		public function create ($userDto){
			try {
				$sql = 'INSERT INTO usuarios VALUES (
				:idRol,
				:idUsuario,
				:tipoDocumentoUsuario,
				:numeroDocUsuario,
				:nombreUsuario,
				:apellidoUsuario,
				:telefonoUsuario,
				:correoUsuario,
				sha1(:passwordUsuario),
				:estadoUsuario
			)';
			#Preparar la bbdd para la consulta
			$dbh =$this->pdo->prepare($sql);
			#Ejecutar la consulta
			$dbh->bindValue('idRol',$userDto->getIdRol());
			$dbh->bindValue('idUsuario',$userDto->getIdUsuario());
			$dbh->bindValue('tipoDocumentoUsuario',$userDto->getTipoDocumentoUsuario());
			$dbh->bindValue('numeroDocUsuario',$userDto->getNumeroDocUsuario());
			$dbh->bindValue('nombreUsuario',$userDto->getNombreUsuario());
			$dbh->bindValue('apellidoUsuario',$userDto->getApellidoUsuario());
			$dbh->bindValue('telefonoUsuario',$userDto->getTelefonoUsuario());
			$dbh->bindValue('correoUsuario',$userDto->getCorreoUsuario());
			$dbh->bindValue('passwordUsuario',$userDto->getPasswordUsuario());
			$dbh->bindValue('estadoUsuario', $userDto->getEstadoUsuario());
			// ejecutar la consulta
			$dbh->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}	
	}


// consulta o listar usuarios 
	public function read () {
		try {
			$userList = [];
			$sql = 'SELECT * FROM usuarios';
			$dbh = $this->pdo->query($sql);
			foreach ($dbh->fetchAll() as $user) {
				$userList[] = new UserDto(
					$user['idRol'],
					$user['idUsuario'],
					$user['tipoDocumentoUsuario'],
					$user['numeroDocUsuario'],
					$user['nombreUsuario'],
					$user['apellidoUsuario'],
					$user['telefonoUsuario'],
					$user['correoUsuario'],
					$user['passwordUsuario'],
					$user['estadoUsuario']
				);
			}			
			return $userList;
		} catch (Exeption $e) {
			die ($e -> getMessage());
		}
	}

// capturar el id y traer el registro
	public function getById($idUsuario){
		try {
#Consulta
			$sql = "SELECT * FROM usuarios WHERE idUsuario = :idUsuario";
#Preparar la BBDD
			$dbh = $this->pdo->prepare($sql);
#Vincular los datos
			$dbh->bindValue('idUsuario', $idUsuario);
#Ejecutar la consulta
			$dbh->execute();
#Crear un objeto del registro la BBDD
			$userDb = $dbh->fetch();
#Crear el objeto del modelo
			if ($userDb) {   
				$userDto = new UserDto(
					$userDb['idRol'],
					$userDb['idUsuario'],
					$userDb['tipoDocumentoUsuario'],
					$userDb['numeroDocUsuario'],
					$userDb['nombreUsuario'],
					$userDb['apellidoUsuario'],
					$userDb['telefonoUsuario'],
					$userDb['correoUsuario'],
					$userDb['passwordUsuario'],
					$userDb['estadoUsuario']
				);
				return $userDto;
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

// actualizar usuaruio
	public function update($userDto){
		try {
			$sql = 'UPDATE usuarios SET
			idRol = :idRol,
			tipoDocumentoUsuario = :tipoDocumentoUsuario,
			numeroDocUsuario = :numeroDocUsuario,
			nombreUsuario = :nombreUsuario,
			apellidoUsuario = :apellidoUsuario,
			telefonoUsuario = :telefonoUsuario,
			correoUsuario = :correoUsuario,
			passwordUsuario = sha1(:passwordUsuario),
			estadoUsuario = :estadoUsuario
			WHERE idUsuario = :idUsuario';
// prepara la bbbdd
			$dbh= $this ->pdo->prepare($sql);
// vincula los datos
			$dbh->bindValue('idRol',$userDto->getIdRol());
			$dbh->bindValue('idUsuario',$userDto->getIdUsuario());
			$dbh->bindValue('tipoDocumentoUsuario',$userDto->getTipoDocumentoUsuario());
			$dbh->bindValue('numeroDocUsuario',$userDto->getNumeroDocUsuario());
			$dbh->bindValue('nombreUsuario',$userDto->getNombreUsuario());
			$dbh->bindValue('apellidoUsuario',$userDto->getApellidoUsuario());
			$dbh->bindValue('telefonoUsuario',$userDto->getTelefonoUsuario());
			$dbh->bindValue('correoUsuario',$userDto->getCorreoUsuario());
			$dbh->bindValue('passwordUsuario',$userDto->getPasswordUsuario());
			$dbh->bindValue('estadoUsuario',$userDto->getEstadoUsuario());
// ejecuta
			$dbh->execute();
		}catch (Exeption $e){
			die($e-> getMessage());
		}
	}

// eliminar usuario
	public function delete($idUsuario){
		try{
			$sql = "DELETE FROM usuarios WHERE idUsuario= :idUsuario";
			$dbh = $this->pdo->prepare($sql);
			$dbh->bindValue(":idUsuario",$idUsuario);
			$dbh->execute();
		}catch (Exception $e) {
			die ($e->getMessage());
		}
	}

//productos


			#CREAR CONSSULTA de productos
		public function createProducto ($userDto){
			try {
				$sql = 'INSERT INTO producto VALUES (
				:idProducto,
				:nombreProducto,
				:precioProducto,
				:categoriaProducto,
				:estadoProducto
			)';
			#Preparar la bbdd para la consulta
			$dbh =$this->pdo->prepare($sql);
			#Ejecutar la consulta
			$dbh->bindValue('idProducto',$userDto->getIdProducto());
			$dbh->bindValue('nombreProducto',$userDto->getNombreProducto());
			$dbh->bindValue('precioProducto',$userDto->getPrecioProducto());
			$dbh->bindValue('categoriaProducto',$userDto->getCategoriaProducto());
			$dbh->bindValue('estadoProducto', $userDto->getEstadoProducto());
			// ejecutar la consulta
			$dbh->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}	
	}
// consulta o listar producto 
	public function readProducto () {
		try {
			$userList = [];
			$sql = 'SELECT * FROM producto';
			$dbh = $this->pdo->query($sql);
			foreach ($dbh->fetchAll() as $user) {
				$userList[] = new userDto(
					$user['idProducto'],
					$user['nombreProducto'],
					$user['precioProducto'],
					$user['categoriaProducto'],
					$user['estadoProducto']
				);
			}			
			return $userList;
		} catch (Exeption $e) {
			die ($e -> getMessage());
		}
	}

// capturar el id y traer el registro
	public function getByIdProducto($idProducto){
		try {
#Consulta
			$sql = "SELECT * FROM producto WHERE idProducto = :idProducto";
#Preparar la BBDD
			$dbh = $this->pdo->prepare($sql);
#Vincular los datos
			$dbh->bindValue('idProducto', $idProducto);
#Ejecutar la consulta
			$dbh->execute();
#Crear un objeto del registro la BBDD
			$userDb = $dbh->fetch();
#Crear el objeto del modelo
			if ($userDb) {   
				$userDto = new UserDto(
					$userDb['idProducto'],
					$userDb['nombreProducto'],
					$userDb['precioProducto'],
					$userDb['categoriaProducto'],
					$userDb['estadoProducto']
				);
				return $userDto;
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

// actualizar Producto
	public function updateProducto($userDto){
		try {
			$sql = 'UPDATE producto SET
			nombreProducto = :nombreProducto,
			precioProducto = :precioProducto,
			categoriaProducto = :categoriaProducto,
			estadoProducto = :estadoProducto
			WHERE idProducto = :idProducto';
// prepara la bbbdd
			$dbh= $this ->pdo->prepare($sql);
// vincula los datos
			$dbh->bindValue('idProducto',$userDto->getIdProducto());
			$dbh->bindValue('nombreProducto',$userDto->getNombreProducto());
			$dbh->bindValue('precioProducto',$userDto->getPrecioProducto());
			$dbh->bindValue('categoriaProducto',$userDto->getCategoriaProducto());
			$dbh->bindValue('estadoProducto',$userDto->getEstadoProducto());
// ejecuta
			$dbh->execute();
		}catch (Exeption $e){
			die($e-> getMessage());
		}
	}

// eliminar Producto
	public function deleteProducto($idProducto){
		try{
			$sql = "DELETE FROM producto WHERE idProducto= :idProducto";
			$dbh = $this->pdo->prepare($sql);
			$dbh->bindValue(":idProducto",$idProducto);
			$dbh->execute();
		}catch (Exception $e) {
			die ($e->getMessage());
		}
	}
//pedido


			#CREAR CONSULTA de pedidos
		public function createPedido ($userDto){
			try {
				$sql = 'INSERT INTO pedido VALUES (
				:idPedido,
				:idCliente,
				:fechaPedido,
				:horaPedido,
				:totalPedido,
				:estadoPedido,
				:pedidoDomicilio
			)';
			#Preparar la bbdd para la consulta
			$dbh =$this->pdo->prepare($sql);
			#Ejecutar la consulta
			$dbh->bindValue('idPedido',$userDto->getIdPedido());
			$dbh->bindValue('idCliente',$userDto->getIdCliente());
			$dbh->bindValue('fechaPedido',$userDto->getFechaPedido());
			$dbh->bindValue('horaPedido',$userDto->getHoraPedido());
			$dbh->bindValue('totalPedido',$userDto->getTotalPedido());
			$dbh->bindValue('estadoPedido', $userDto->getEstadoPedido());
			$dbh->bindValue('pedidoDomicilio', $userDto->getPedidoDomicilio());
			// ejecutar la consulta
			$dbh->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}	
	}
// consulta o listar pedido 
	public function readPedido () {
		try {
			$userList = [];
			$sql = 'SELECT * FROM pedido';
			$dbh = $this->pdo->query($sql);
			foreach ($dbh->fetchAll() as $user) {
				$userList[] = new userDto(
					$user['idPedido'],
					$user['idCliente'],
					$user['fechaPedido'],
					$user['horaPedido'],
					$user['totalPedido'],
					$user['estadoPedido'],
					$user['pedidoDomicilio']
				);
			}			
			return $userList;
		} catch (Exeption $e) {
			die ($e -> getMessage());
		}
	}

// capturar el id y traer el registro
	public function getByIdPedido($idPedido){
		try {
#Consulta
			$sql = "SELECT * FROM pedido WHERE idPedido = :idPedido";
#Preparar la BBDD
			$dbh = $this->pdo->prepare($sql);
#Vincular los datos
			$dbh->bindValue('idPedido', $idPedido);
#Ejecutar la consulta
			$dbh->execute();
#Crear un objeto del registro la BBDD
			$userDb = $dbh->fetch();
#Crear el objeto del modelo
			if ($userDb) {   
				$userDto = new UserDto(
					$userDb['idPedido'],
					$userDb['idCliente'],
					$userDb['fechaPedido'],
					$userDb['horaPedido'],
					$userDb['totalPedido'],
					$userDb['estadoPedido'],
					$userDb['pedidoDomicilio']
				);
				return $userDto;
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

// actualizar Producto
	public function updatePedido($userDto){
		try {
			$sql = 'UPDATE pedido SET
			idCliente = :idCliente,
			fechaPedido = :fechaPedido,
			horaPedido = :horaPedido,
			totalPedido = :totalPedido,
			estadoPedido = :estadoPedido,
			pedidoDomicilio = :pedidoDomicilio
			WHERE idPedido = :idPedido';
// prepara la bbbdd
			$dbh= $this ->pdo->prepare($sql);
// vincula los datos
			$dbh->bindValue('idPedido',$userDto->getIdPedido());
			$dbh->bindValue('idCliente',$userDto->getIdCliente());
			$dbh->bindValue('fechaPedido',$userDto->getFechaPedido());
			$dbh->bindValue('horaPedido',$userDto->getHoraPedido());
			$dbh->bindValue('totalPedido',$userDto->getTotalPedido());
			$dbh->bindValue('estadoPedido',$userDto->getEstadoPedido());
			$dbh->bindValue('pedidoDomicilio',$userDto->getPedidoDomicilio());
// ejecuta
			$dbh->execute();
		}catch (Exeption $e){
			die($e-> getMessage());
		}
	}

// eliminar Pedido
	public function deletePedido($idPedido){
		try{
			$sql = "DELETE FROM pedido WHERE idPedido= :idPedido";
			$dbh = $this->pdo->prepare($sql);
			$dbh->bindValue(":idPedido",$idPedido);
			$dbh->execute();
		}catch (Exception $e) {
			die ($e->getMessage());
		}
	}

//domicilio


			#CREAR CONSULTA de domicilio
		public function createDomicilio ($userDto){
			try {
				$sql = 'INSERT INTO domicilio VALUES (
				:idDomicilio,
				:estadoDomicilio,
				:idPedidoFk,
				:idDomiciliarioFk
			)';
			#Preparar la bbdd para la consulta
			$dbh =$this->pdo->prepare($sql);
			#Ejecutar la consulta
			$dbh->bindValue('idDomicilio',$userDto->getIdDomicilio());
			$dbh->bindValue('estadoDomicilio', $userDto->getEstadoDomicilio());
			$dbh->bindValue('idPedidoFk',$userDto->getIdPedidoFk());
			$dbh->bindValue('idDomiciliarioFk',$userDto->getIdDomiciliarioFk());
			// ejecutar la consulta
			$dbh->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}	
	}
// consulta o listar domicilio
	public function readDomicilio () {
		try {
			$userList = [];
			$sql = 'SELECT * FROM domicilio';
			$dbh = $this->pdo->query($sql);
			foreach ($dbh->fetchAll() as $user) {
				$userList[] = new userDto(
					$user['idDomicilio'],
					$user['estadoDomicilio'],
					$user['idPedidoFk'],
					$user['idDomiciliarioFk']
				);
			}			
			return $userList;
		} catch (Exeption $e) {
			die ($e -> getMessage());
		}
	}

// capturar el id y traer el registro
	public function getByIdDomicilio($idDomicilio){
		try {
#Consulta
			$sql = "SELECT * FROM domicilio WHERE idDomicilio = :idDomicilio";
#Preparar la BBDD
			$dbh = $this->pdo->prepare($sql);
#Vincular los datos
			$dbh->bindValue('idDomicilio', $idDomicilio);
#Ejecutar la consulta
			$dbh->execute();
#Crear un objeto del registro la BBDD
			$userDb = $dbh->fetch();
#Crear el objeto del modelo
			if ($userDb) {   
				$userDto = new UserDto(
					$userDb['idDomicilio'],
					$userDb['estadoDomicilio'],
					$userDb['idPedidoFk'],
					$userDb['idDomiciliarioFk']
				);
				return $userDto;
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

// actualizar Producto
	public function updateDomicilio($userDto){
		try {
			$sql = 'UPDATE domicilio SET
			estadoDomicilio = :estadoDomicilio,
			idPedidoFk = :idPedidoFk,
			idDomiciliarioFk = :idDomiciliarioFk,
			WHERE idDomicilio = :idDomicilio';
// prepara la bbbdd
			$dbh= $this ->pdo->prepare($sql);
// vincula los datos
			$dbh->bindValue('idDomicilio',$userDto->getIdDomicilio());
			$dbh->bindValue('estadoDomicilio', $userDto->getEstadoDomicilio());
			$dbh->bindValue('idPedidoFk',$userDto->getIdPedidoFk());
			$dbh->bindValue('idDomiciliarioFk',$userDto->getIdDomiciliarioFk());
// ejecuta
			$dbh->execute();
		}catch (Exeption $e){
			die($e-> getMessage());
		}
	}

// eliminar domicilio
	public function deleteDomicilio($idDomicilio){
		try{
			$sql = "DELETE FROM Domicilio WHERE idDomicilio= :idDomicilio";
			$dbh = $this->pdo->prepare($sql);
			$dbh->bindValue(":idDomicilio",$idDomicilio);
			$dbh->execute();
		}catch (Exception $e) {
			die ($e->getMessage());
		}
	}


}

?>