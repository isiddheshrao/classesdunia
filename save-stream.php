<?php

require 'connect.php';
require 'helper.php';


if (isset($_POST['substream_name']) && $_POST['mainstream']){
	//echo $_GET['term'];
	//$_GET['term'] = '%i%';
	//$return_arr = array();

    $substream = $_POST['substream_name'];
    $mainstream = $_POST['mainstream'];

    $substream = cleanStringCap($substream);
    $mainstream = cleanStringCap($mainstream);

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('INSERT INTO `substream`(`ssname`, `msname`) VALUES (:substream_name,:mainstream_name)');
	    $res = $stmt->execute(array('substream_name' => $substream,'mainstream_name' => $mainstream));
	    
        if($res)
        {
            $arr = array('status' => 'success', 'substream' => $substream);

            echo json_encode($arr);
        }
        else
        {
            $arr = array('status' => 'failure', 'substream' => $substream);

            echo json_encode($arr);
        }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
 
}


?>