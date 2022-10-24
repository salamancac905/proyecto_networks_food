<?php 
	class DataBase {
	public function __construct(){}
	public static function conexion(){
		$pdo = new PDO('mysql:host=localhost;dbname=proyecto_networks_food;charset=utf8', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}
?>