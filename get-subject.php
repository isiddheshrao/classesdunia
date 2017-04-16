<?php
require 'connect.php';
require 'helper.php';

if (isset($_GET['substream'])){
	
	//echo $_GET['substream'].'\n';

	$substream = $_GET['substream'];
	$substream = cleanStringLow($substream);
	$return_arr = array();

	try {

	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('SELECT ssname FROM substream WHERE ssname LIKE :term');
	    $stmt->execute(array('term' => '%'.$substream.'%'));
	    $stmt->execute();
	    // check whether no. of subjects is equal to one
	    // if not then the request is malformed, someone is tricking us
	    // lets return him nil (^_^)
	    if($stmt->rowCount()==1)
	    {
	    	$row = $stmt->fetch();
	    	$substream=$row['ssname'];
	    	//$substream=lower($substream);
	    }
	    else
	    {
	    	return;
	    }

		    $stmt = $conn->prepare('SELECT sname FROM subject WHERE fstream LIKE :term');
		    $stmt->execute(array('term' => '%'.$substream.'%'));
		    $stmt->execute();

		echo '
			<div id="'.$substream.'-container" class="substream-container">
			  <div class="checkbox pad-bottom-10">
				<input class="substream-checkbox" id="'.$substream.'" type="checkbox" value="'.$substream.'" checked>
				<label for="'.$substream.'">Select Subjects for stream <bold>'.$substream.'</bold></label>
			  </div>
			  <div class="featuresDataContainer">
				<div class="featuresData" >';


		while($row = $stmt->fetch()) {
	    
	    	echo   '<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="checkbox pad-bottom-10">
							<input class="subject-checkbox" id="'.$row['sname'].'" type="checkbox" name="'.$substream.'" value="'.$row['sname'].'">
							<label for="'.$row['sname'].'">'.$row['sname'].'</label>
						</div>
					</div>';

	        //$return_arr[] = $row['sname'];
	    }
					
				
		echo 	'</div>
			  </div>
			</div>';



	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    //echo json_encode($return_arr);
}


?>