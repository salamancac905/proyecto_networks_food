<?php session_start();
	class Modules {
		private $module;
		public function __construct(){
			$this->module = $_SESSION['module'];
		}
		public function index(){			
			if (isset($_SESSION['userDto'])) {
				require_once 'view/roles/'.$this->module.'/header.php';
				require_once 'view/modules/0_mains/'.$this->module.'_view.php';
				require_once 'view/roles/'.$this->module.'/footer.php';				
			}
		}
	}
?>