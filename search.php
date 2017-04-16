<?php
require 'connect.php';


if (isset($_GET['term'])){
	//echo $_GET['term'];
	//$_GET['term'] = '%i%';
	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('SELECT tag FROM tags WHERE tag LIKE :term LIMIT 0,5');
	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));

	    while($row = $stmt->fetch()) {
	    	//echo '"' . $row['tag'] . '",';
	        $return_arr[] =  $row['tag'];
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}


?>
