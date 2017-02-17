<?php

include_once 'connection.php';
header('Content-Type application/json ');
	
	class Spatialdata {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
		
		
		public function sendtodb($gyroscope,$accelerometer)
		{
			$query = "UPDATE mysensordata SET gyroscope = '$gyroscope', accelerometer = '$accelerometer' WHERE idmysensor = 0";
			
			
		}
		
	
	$spatialdata = new Spatialdata();
	if(isset($_POST['gyroscope'],$_POST['accelerometer'])) {
		$gyroscope = $_POST['gyroscope'];
		$accelerometer = $_POST['accelerometer'];
		
		if(!empty($gyroscope) && !empty($accelerometer)){
			
		
		$spatialdata -> sendtodb($gyroscope,$accelerometer);
			
			
		}else{
			echo json_encode("could not send to DB");
		}
		
	}














?>
