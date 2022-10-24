<?php session_start();
require_once 'model/model_dto/UserDto.php';
require_once 'model/model_dao/UserDao.php';
class Login {
	private $userDao;
	public function __construct(){
		$this->userDao = new UserDao;
	}
	public function index(){
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$userLog = $_POST['userEmailLog'];
			$passLog = $_POST['userPassLog'];
			$userDto = new UserDto($userLog, $passLog);
			// print_r($userDto);
			
			$userDto = $this->userDao->LoginStart($userDto);
			if ($userDto) {
			 	if ($userDto->getEstadoUsuario() == 1) {			 		
			 		if ($userDto->getIdRol() == 1) {
			 			$_SESSION['module'] = 'admin';			 			
			 		}
			 		  elseif ($userDto->getIdRol() == 2) {
			 		  	$_SESSION['module'] = 'cliente';
			 		  }elseif ($userDto->getIdRol() == 3) {
			 		  	$_SESSION['module'] = 'domiciliario';
			 		  }			 		
			 		$userDto = serialize($userDto);
			 		$_SESSION['userDto'] = $userDto;
			 		header ('Location: ?c=Dashboard');	
			 	} else{
				 		   header('Location: ?');
			 	} 
			 }else {
		 		echo "No existe";
			 	   header('Location: ?');
			 }
			 
		}

	}
}
?>