<?php 
require 'initialize.php';

$method = $_SERVER['REQUEST_METHOD'];
$table = 'users';
$json_fields = [];
$res = '';

switch($method){
	case 'GET':
		$id = isset($_GET['id']) ? $_GET['id'] : '' ;
		if($id && strlen($id) > 30){			
				echo json_encode(selectRecord($table, $json_fields, "user_id=:id", ['id' => $id]));
		} else{
			print_r(null);
		}
		break;
	default:
		break;
}
?>
