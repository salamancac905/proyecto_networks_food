<?php session_start();
class Dashboard {
	private $module;
	public function __construct(){
		$this->module = $_SESSION['module'];
	}
	public function index(){
		// $userDto = unserialize($_SESSION['userDto']);
		if (isset($_SESSION['userDto'])){
			require_once 'view/roles/'.$this->module.'/header.php';
				require_once 'view/modules/6_otros/'.$this->module.'_calendario.php';
				require_once 'view/roles/'.$this->module.'/footer.php';		
		}else{
			header('Location: ?');
		}
	}
}
?>