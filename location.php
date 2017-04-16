<?php
require 'connect.php';


//if (isset($_GET['term'])){
	//echo $_GET['term'];
	//$_GET['term'] = '%i%';
	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('SELECT loc FROM locations');
	    //$stmt->execute(array('term' => '%'.$_GET['term'].'%'));
	    $stmt->execute();

	    while($row = $stmt->fetch()) {
	    	//echo '"' . $row['loc'] . '",';
	        //echo '"<option value="'.$row['loc'].'">'.$row['loc'].'</option>"';
	        //$return_arr[] =  '"<option value="'.$row['loc'].'">'.$row['loc'].'</option>"';
	        $return_arr[] = $row['loc'];
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
//}


?>
