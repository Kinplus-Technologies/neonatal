<?php 
require 'initialize.php';

$method = $_SERVER['REQUEST_METHOD'];
$table = 'neonatal_clinic';
$json_fields = ['mat_demo','mat_pat_hist','baby_data', 'created_by', 'modified_by'];
$res = '';

switch($method){
	case 'GET':
		$u = isset($_GET['u']) ? $_GET['u'] : '' ;
		$count = isset($_GET['count']) ? $_GET['count'] : '' ;
		if($u==2){
			if($count == 1){
				echo json_encode(countRecords($table));
			}else {
				echo json_encode(selectRecords($table, $json_fields, "1 ORDER BY created_on ASC"));
			}
		} else{
			echo json_encode([]);
		}
		break;
		
	case 'POST':
		$data = json_decode(file_get_contents("php://input"), true); // Get raw posted data as assoc array
		$id = $data['id'] = uuid();
		$data = encodeJson($data, $json_fields);

			$column = "id, name, hosp_no, mat_demo, mat_pat_hist, baby_data, created_by, modified_by";
			$value = ":id, :name, :hosp_no, :mat_demo, :mat_pat_hist, :baby_data, :created_by, :modified_by";

			$res = insertRecord($table, $column, $value, $data);
			echo $res ? json_encode(selectRecord($table, $json_fields, "id=:id", ['id' => $id])) : 'Unable to create new record';
	 //else{
		// 	$user_already_exists = user_exists($table, $data->biodata);
		// 	if(!$user_already_exists){	
		// 	$raw_passwd = $data->passwd;
		// 	$passwd = sha1($data->passwd);
		// 	$last_no = $setup->lastcode;
		// 	$yr = substr($setup->application_year, -2);
		// 	$last_no += 1;
		// 	$app_no = $last_no < 10 ? "ATI{$yr}-0{$last_no}": "ATI{$yr}-{$last_no}"; // allocate application no
		// 	$column = "id, application_no,passwd, account, action, biodata, education,  parent, referee, spiritual, application_year, application_set";
		// 	$value = "(uuid(),'$app_no','$passwd','$account','$action', '$biodata', '$education', '$parent', '$referee', '$spiritual', '$application_year', $application_set)";
		// 	$res = insertRecord($table, $column, $value); 
		// 	updateRecord('applicants_setup', "lastcode=$last_no", "status=1 LIMIT 1");
		// 	echo $res ? json_encode(selectApplicant($table, '*', "application_no='$app_no'")) : 'Unable to start application';
		// 	} else {
		// 		echo $user_already_exists;
		// 	}
		// }	
		break;

	case 'PUT': 
	case 'PATCH': 
		$data = json_decode(file_get_contents("php://input")); // Get raw posted data
		$id = $data->id;
		$modified_by = json_encode($data->modified_by);
		$modified_on = date('Y-m-d H:i:s');
		$res = '';
		switch ($data->type) {
			case 'mat_demo':
				$mat_demo = json_encode($data->mat_demo);
				$res = updateRecord($table, "mat_demo=:mat_demo, modified_by=:modified_by, modified_on=:modified_on", "id=:id", ['id'=>$id, 'mat_demo'=>$mat_demo, 'modified_by'=>$modified_by, 'modified_on'=>$modified_on]);
				break;
			case 'mat_pat_hist':
				$mat_pat_hist = json_encode($data->mat_pat_hist);
				$res = updateRecord($table, "mat_pat_hist=:mat_pat_hist, modified_by=:modified_by, modified_on=:modified_on", "id=:id", ['id'=>$id, 'mat_pat_hist'=>$mat_pat_hist, 'modified_by'=>$modified_by, 'modified_on'=>$modified_on]);
				break;
			case 'baby_data':
				$baby_data = json_encode($data->baby_data);
				$res = updateRecord($table, "baby_data=:baby_data, modified_by=:modified_by, modified_on=:modified_on", "id=:id", ['id'=>$id, 'baby_data'=>$baby_data, 'modified_by'=>$modified_by, 'modified_on'=>$modified_on]);
				break;			
			case 'name':
				$name = $data->name;
				$res = updateRecord($table, "name=:name, modified_by=:modified_by, modified_on=:modified_on", "id=:id", ['id'=>$id, 'name'=>$name, 'modified_by'=>$modified_by, 'modified_on'=>$modified_on]);
				break;			
			case 'hosp_no':
				$hosp_no = $data->hosp_no;
				$res = updateRecord($table, "hosp_no=:hosp_no, modified_by=:modified_by, modified_on=:modified_on", "id=:id", ['id'=>$id, 'hosp_no'=>$hosp_no, 'modified_by'=>$modified_by, 'modified_on'=>$modified_on]);
				break;			
			default:				
				break;
		}
				
		echo $res ? json_encode(['ok' => 1, 'res' => $res, 'data' => $data]) : json_encode(['ok' => 0, 'res' => $res, 'data' => $data]);
		break;

	case 'DELETE':		
		$id = $_SERVER['QUERY_STRING'];			
		$res = deleteRecord($table, "id= :id",['id'=>$id]) ;
		echo $res ? json_encode(['ok' => 1]) : json_encode(['ok' => 0]);
		// echo $res ? json_encode(selectRecords($table, $json_fields, "1 ORDER BY created_on ASC")) : 'Unable to delete record';
		break;
	default:
		break;
}
?>