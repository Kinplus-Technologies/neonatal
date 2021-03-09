<?php  
/* Online Connection Details */
	$host = "localhost";
	$user = "fethipae";
	$password = "#aer2$35Q%";
	$dbname = "fethipae_portal";

# PDO CONNECTION
// Set DSN
	$dsn = "mysql:host=$host;dbname=$dbname";
	// $dsn = 'mysql:host='. $host. ';dbname='. $dbname;

	// Create a PDO instance
	$pdo = new PDO($dsn, $user, $password);
if(!$pdo){
	echo "Unable to connect to database";
}
	# DEFAULT FETCH_MODE = FETCH_OBJ
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>


