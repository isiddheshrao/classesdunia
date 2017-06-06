<?php

require 'connect.php';
require 'helper.php';


if (isset($_POST['substream_name']) && $_POST['mainstream']){

    $displaysubstream = genDisplayValue($_POST['substream_name']);
    $substream = cleanStringLow($_POST['substream_name']);
    $mainstream = cleanStringLow($_POST['mainstream']);

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('INSERT INTO `substream`(`ssname`,`dsubstream`, `msname`) VALUES (:substream_name,:display,:mainstream_name)');
	    $res = $stmt->execute(array('substream_name' => $substream, 'display' => $displaysubstream, 'mainstream_name' => $mainstream));

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
