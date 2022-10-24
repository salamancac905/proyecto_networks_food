<?php session_start();
	class LandingPage {
		public function __construct(){}
		public function index(){
			require_once 'view/roles/business/header.php';
			require_once 'view/business/index.php';
			require_once 'view/roles/business/footer.php';
		}
	}
?>