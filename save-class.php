<?php

require 'connect.php';
require 'helper.php';

if (isset($_POST['classtitle']) &&
    isset($_POST['city']) &&
    isset($_POST['astreams']) &&
    isset($_POST['logo_url']) &&
    isset($_POST['page_url']) &&
    !empty($_POST['classtitle']) &&
    !empty($_POST['city']) &&
    !empty($_POST['logo_url']) &&
    !empty($_POST['page_url']) &&
    !empty($_POST['astreams'])) {

    $results = array(
                        "class" => false,
                        "mapClassStream" => false,
                        "mapClassSubject" => false
                    );

    $arr = array('status' => 'failure');

    $classtitle = cleanStringLow($_POST['classtitle']);
    $displayName = genDisplayValue($_POST['classtitle']);
    $city = cleanStringCap($_POST['city']);
    $logourl = cleanUrl($_POST['logo_url']);
    $pageurl = cleanUrl($_POST['page_url']);
    if(is_array($_POST['astreams'])){
      $astreams = $_POST['astreams'];
    }

    // echo 'classtitle: '.$classtitle.'<br/>';
    // echo 'city: '.$city.'<br/>';

    //var_dump($results);

    try {

	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // check whether similar values exist in our db

      $stmt = $conn->prepare('SELECT classid FROM classes WHERE cname LIKE :term');
      $stmt->execute(array('term' => '%'.$classtitle.'%'));
      $stmt->execute();

      if($stmt->rowCount()>=1) {

          // echo there exists a same vale in the db exit the program
          echo json_encode($arr);
          return;

      }

    $stmt = $conn->prepare('INSERT INTO `classes`(`cname`, `dclass`, `location`, `logourl`, `pageurl`) VALUES (:classname,:display,:location,:logourl,:pageurl)');
	    $res = $stmt->execute(array('classname' => $classtitle, 'display' => $displayName, 'location' => $city, 'logourl' => $logourl, 'pageurl' => $pageurl));

        if($res)
        {
            //echo "Class Insertion Sucessfull";
            $results["class"] = true;
        }
        else
        {
            echo json_encode($arr);
            return;
        }

        foreach ($astreams as $subStreamName => $subjects) {

            // perform class to substream mapping and class to subject here

            // echo '<br><br>Stream: '.$subStreamName.'<br>';

            $stmt = $conn->prepare('SELECT classid FROM classes WHERE cname LIKE :term');
            $stmt->execute(array('term' => '%'.$classtitle.'%'));
            $stmt->execute();

            if($stmt->rowCount()==1)
            {

                // get the class id
                $row = $stmt->fetch();
                $classid = $row['classid'];

                $stmt = $conn->prepare('SELECT ssid FROM substream WHERE ssname LIKE :term');
                $stmt->execute(array('term' => '%'.$subStreamName.'%'));
                $stmt->execute();

                if($stmt->rowCount()==1)
                {
                    // get the substream id
                    $row = $stmt->fetch();
                    $substreamid = $row['ssid'];
                    // echo 'substreamid: '+$substreamid;

                    $stmt = $conn->prepare('INSERT INTO `map_class_stream`(`class_id`, `stream_id`) VALUES (:classid,:streamid)');
                    $res = $stmt->execute(array('classid' => $classid,'streamid' => $substreamid));

                    if($res)
                    {
                        $results["mapClassStream"] = true;
                        //echo "Insertion in map_class_stream successfull";
                    }
                    else
                    {
                        //echo "Insertion in map_class_stream not successfull";
                        echo json_encode($arr);
                        return;
                    }

                }
                else
                {
                    //echo 'Row count more than one';
                    echo json_encode($arr);
                    return;
                }


                // get the subject id

                // echo 'Subjects: ';

                foreach ($subjects as $subject) {

                    // perform class to subject mapping here

                    //echo '<br>'.$subject;

                    $stmt = $conn->prepare('SELECT subjectid FROM subject WHERE sname LIKE :term');
                    $stmt->execute(array('term' => '%'.$subject.'%'));
                    $stmt->execute();

                    if($stmt->rowCount()==1)
                    {
                        // get the substream id
                        $row = $stmt->fetch();
                        $subjectid = $row['subjectid'];

                        $stmt = $conn->prepare('INSERT INTO `map_class_subject`(`class_id`, `subject_id`) VALUES (:classid,:subjectid)');
                        $res = $stmt->execute(array('classid' => $classid,'subjectid' => $subjectid));

                        if($res)
                        {
                            $results["mapClassSubject"] = true;
                            //echo "Insertion in map_class_stream successfull";
                        }
                        else
                        {
                            echo json_encode($arr);
                            return;
                        }

                    }
                    else
                    {
                        echo json_encode($arr);
                        return;
                    }


                }



            }
            else
            {
                echo json_encode($arr);
                return;
            }


        }




        foreach($results as $key => $value)
        {
            //echo $key.'<br>'.$value;

            if($results[$key])
            {
                $arr = array('status' => 'success');
            }
            else
            {
                $arr = array('status' => 'failure');
            }
        }

        echo json_encode($arr);

	} catch(PDOException $e) {
	    //echo 'ERROR: ' . $e->getMessage();
        echo "Some Error occured";
	}

}


?>
