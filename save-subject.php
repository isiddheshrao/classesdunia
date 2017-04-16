<?php

require 'connect.php';
require 'helper.php';

if (isset($_POST['subject_name']) && $_POST['semester'] && $_POST['university'] && $_POST['substream']){
	//echo $_GET['term'];
	//$_GET['term'] = '%i%';
	//$return_arr = array();

    $subject = $_POST['subject_name'];
    $semester = $_POST['semester'];
    $substream = $_POST['substream'];
    $university = $_POST['university']; 

    $subject = cleanStringCap($subject);
    $semester = cleanStringCap($semester);
    $substream = cleanStringCap($substream);
    $university = cleanStringCap($university);

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('INSERT INTO `subject`(`sname`, `semester`, `university`, `fstream`) VALUES (:subject,:semester,:university,:substream)');
	    $res = $stmt->execute(array('subject' => $subject,'semester' => $semester, 'university' => $university, 'substream' => $substream));
	    
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