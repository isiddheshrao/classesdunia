<?php

require 'connect.php';
require 'helper.php';

if (isset($_POST['subject_name']) && $_POST['university'] && $_POST['substream']){


    $displaysubject = genDisplayValue($_POST['subject_name']);
    $subject = cleanStringLow($_POST['subject_name']);
    $substream = cleanStringLow($_POST['substream']);
    $university = cleanStringCap($_POST['university']);

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('INSERT INTO `subject`(`sname`, `dsubject`, `university`, `fstream`) VALUES (:subject,:display,:university,:substream)');
	    $res = $stmt->execute(array('subject' => $subject,'display' => $displaysubject, 'university' => $university, 'substream' => $substream));

        if($res)
        {
            $arr = array('status' => 'success', 'subject' => $subject);

            echo json_encode($arr);
        }
        else
        {
            $arr = array('status' => 'failure', 'subject' => $subject);

            echo json_encode($arr);
        }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

}


?>
