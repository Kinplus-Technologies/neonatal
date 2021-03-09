<?php

function countRecords($table){
  global $pdo;
  $sql = "SELECT COUNT(*) AS total FROM $table ";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
	return $stmt->fetch();
}

function selectRecords($table, $json_arr=[], $where_clause=1, $data=[], $column="*"){
  global $pdo;
  $sql = "SELECT $column FROM $table WHERE $where_clause ";
  $stmt = $pdo->prepare($sql);
  $stmt->execute($data);
	$res = [];
  while($row = $stmt->fetch()){
    $res[] = decodeJson($row, $json_arr);
  }
	return $res;
}

function selectRecord($table, $json_arr=[], $where_clause=1, $data=[], $column="*"){
  global $pdo;
  $sql = "SELECT $column FROM $table WHERE $where_clause ";
  $stmt = $pdo->prepare($sql);
  $stmt->execute($data);
	$res = $stmt->fetch();
	return decodeJson($res, $json_arr);
}

function insertRecord($table, $column, $value, $data=[]){
  global $pdo;
  $sql ="INSERT INTO $table($column) VALUES ($value) ";
  $stmt = $pdo->prepare($sql);
	return $stmt->execute($data); 
}

function updateRecord($table, $column, $where_clause, $data=[]){
  global $pdo;
  $sql ="UPDATE $table SET $column WHERE $where_clause ";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute($data);
}

function deleteRecord($table, $where_clause, $data=[]){
  global $pdo;
  $sql ="DELETE FROM $table WHERE $where_clause ";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute($data);
}

function truncateRecord($table){
  global $pdo;
  $sql ="TRUNCATE TABLE $table ";
  $stmt = $pdo->prepare($sql);
  return $stmt->execute();
}

function decodeJson($record, $json_arr){
  foreach ($json_arr as $field) {
    $record[$field] = json_decode($record[$field]);
  }
  return $record;
}

function encodeJson($record, $json_arr){
  foreach ($json_arr as $field) {
    $record[$field] = json_encode($record[$field]);
  }
  return $record;
}

/*function mail_applicant($mail, $applicant){
	$app_no = $applicant['application_no'];
	$loan_type = $applicant['loan_type'];
	$app_name = $applicant[$loan_type]->name;
	$app_email = $applicant[$loan_type]->email;
	// $app_name = 'Ololade James';
	// $app_email = 'lekanojulowo@gmail.com';
	
		
	$host = 'mail.fethiobgyn.com';
	$username = 'meda@fethiobgyn.com';
	$passwd   = 'mailmeda2020';
	$mailfrom = 'meda@fethiobgyn.com';
	$sendername = 'Ekiti State Microfinance and Enterprise Development Agency';
	$img_link = 'meda.fethiobgyn.com/assets/images/';
	// $img_link = '../assets/images/';
	// $mail->SMTPDebug = 3;                            // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = $host;                                  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;   															 // Enable SMTP authentication
	$mail->SMTPKeepAlive = true;  // SMTP connection will not close after each email sent, reduces SMTP overhead
	$mail->Username = $username;                          // SMTP username
	$mail->Password = $passwd;                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom($mailfrom, $sendername);

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = "Application Submitted Successfully";
	
	$mail->addAddress($app_email, ucwords($app_name));     // Add a recipient
	$mail->Body = '
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style>
		html, body {				
				margin: 0px;
				padding: 0px;
			}
			.text-center {
				text-align: center;
			}
			.thm-text {
				color:  #ff5722;
			}
			.bg-dark {
				background-color:  #000;
			}
			.row {
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				align-items: center;
			}
			.col {
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}
			img {
				max-width: 100%;
			}			
			.container{
				margin-left: auto;
				margin-right: auto;
				padding-left: 1rem;
				padding-right: 1rem;
			}
      .link {
        color: blue;
      }
		</style>
		<title>Application Submitted Successfully</title>
		</head>
		<body>
			<header class="bg-dark text-center">
				<img src="'.$img_link.'logo.png" alt="MEDA LOGO">
				<h4 class="thm-text">Ekiti State Microfinance and Enterprise Development Agency</h4>
			</header>
			<main class="container">
				<h4>Dear '.ucwords($app_name).',</h4>

				<p>Your application for the Ekiti State Microfinance and Enterprise Development Agency (MEDA) loan has been submitted successfully.</p> 
				<p>Your <b>Application Number </b> is: <b class="thm-text">'. $app_no .'</b>.</p>
				<p>Thank you.</p>
		<h4><b>Ekiti MEDA Team</b></h4>
			</main>
			</body>
		</html>

    ';
		$mail->AltBody = "Your application for the Ekiti State Microfinance and Enterprise Development Agency (MEDA) loan has been submitted successfully. Your Application Number is: ".$app_no.". Thank you.";

    if(!$mail->send()) {
        $msg = 'Mail could not be sent.';
        $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
        $mailsent = 0;
    } else {
      $msg = 'Mail Sent Successfully.';
      $mailsent = 1;
    }
		return ['mailsent'=>$mailsent, 'message'=>$msg];
    // echo $mail->Body;
	}

function message_applicant($applicant){
	$loan_type = $applicant['loan_type'];
	$message = 'Your application to Ekiti MEDA has been submitted successfuly. Application No is: '. $applicant['application_no'];
	$senderid = 'MEDA';
	$to = $applicant[$loan_type]->phone_no;
	$token = 'WbRYKduHQ8ESpKAN8REx4fBPVIrtfECn3BAdEy2Si0DhYNGeoiN6pCLUVZXTzoFZg2SH3EqXeavwNF2Efqw6xj4JRTMokI3qName'; // ACCESS_TOKEN
	$baseurl = 'https://smartsmssolutions.com/api/json.php?';

	$sms_array = array 
		(
		'sender' => $senderid,
		'to' => $to,
		'message' => $message,
		'type' => '0',
		'routing' => 3,
		'token' => $token
	);

	$params = http_build_query($sms_array);
	$ch = curl_init(); 

	curl_setopt($ch, CURLOPT_URL,$baseurl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

	$response = curl_exec($ch);

	curl_close($ch);

	return $response; // response code
}*/


function user_exists($table, $bd1){
	$applicants = selectRecords($table, "biodata, application_no, submitted");
	$res = false;
		foreach ($applicants as $a) {
			$bd2 = json_decode($a->biodata);
			if(($bd1->surname == $bd2->surname && $bd1->other_names == $bd2->other_names) || ($bd1->mobile_no == $bd2->mobile_no) || ($bd1->email == $bd2->email)){
				$res = json_encode(['biodata' => $a->biodata, 'application_no' =>$a->application_no, 'submitted' => $a->submitted]);
				break;
			}
		}
	return $res;
}


function uuid() {
	return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

		// 32 bits for "time_low"
		mt_rand(0, 0xffff), mt_rand(0, 0xffff),

		// 16 bits for "time_mid"
		mt_rand(0, 0xffff),

		// 16 bits for "time_hi_and_version",
		// four most significant bits holds version number 4
		mt_rand(0, 0x0fff) | 0x4000,

		// 16 bits, 8 bits for "clk_seq_hi_res",
		// 8 bits for "clk_seq_low",
		// two most significant bits holds zero and one for variant DCE1.1
		mt_rand(0, 0x3fff) | 0x8000,

		// 48 bits for "node"
		mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
	);
}
?>

