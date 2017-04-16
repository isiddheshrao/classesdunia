php documentation


how to make a db call


first decide these 4

------------------------------------------------------ listing.php ---------------------------------------------------------------

<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'best');
define('DB_NAME', 'test');


if (isset($_POST['term']) && isset($_POST['location'])){ 

        $term = $_POST['term'];

        $location = $_POST['location'];

        // cleanStringLow finds all special characters(except whitespace \s) and replaces them with ""(nothing) 

        $term = cleanStringLow($term);

        $location = cleanStringLow($location);


        //check whether location is all location or not

        $result = strcmp($location,"All Location");

        if($result == 0)
        {
            $loc_search = false;
        }
        else
        {
            $loc_search = true;
        }

        //$return_arr = array();

        try {

            $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Case - I : MainStream based search

            $stmt1 = $conn->prepare('SELECT ssname FROM substream WHERE msname LIKE :term');
            $stmt1->execute(array('term' => '%'.$term.'%'));
            if($stmt1->rowCount()>0)
            {
                while($row1 = $stmt1->fetch())
                {
                        $substream_name = $row1['ssname'];

                        if($loc_search)
                        {
                            $stmt2 = $conn->prepare('SELECT a.cname,a.location,b.ssname FROM classes a, substream b, map_class_stream c where a.classid = c.class_id and b.ssid=c.stream_id and b.ssname LIKE :substream and a.location LIKE :loc');
                            $stmt2->execute(array('substream' => '%'.$substream_name.'%', 'loc' => '%'.$location.'%'));

                        }
                        else
                        {
                            $stmt2 = $conn->prepare('SELECT a.cname,a.location,b.ssname FROM classes a, substream b, map_class_stream c where a.classid = c.class_id and b.ssid=c.stream_id and b.ssname LIKE :substream');
                            $stmt2->execute(array('substream' => '%'.$substream_name.'%'));
                        }

                        while($row2 = $stmt2->fetch()) {
                            //$return_arr[] =  array('Classes:' => $row2['cname'], 'Location:' => $row2['location'], 'Stream' => $row2['ssname']);

                        echo	'<div class="col-md-3 col-sm-6 lp-grid-box-contianer lp-grid-box-contianer1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-id="11"  data-posturl="post-detail.html" data-authorurl="author.html">
                                    <div class="lp-grid-box lp-border lp-border-radius-8">
                                        <div class="lp-grid-box-thumb-container" >
                                            <div class="lp-grid-box-thumb">
                                                <img src="images/grid/grid-1.png" alt="grid-1" />
                                            </div><!-- ../grid-box-thumb -->
                                            <div class="lp-grid-box-quick">
                                                <ul class="lp-post-quick-links">
                                                    <li>
                                                        <a class="icon-quick-eye md-trigger" data-modal="modal-2"><i class="fa fa-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div><!-- ../grid-box-quick-->
                                        </div>
                                        <div class="lp-grid-box-description ">
                                            <h4 class="lp-h4">
                                                <a href="post-detail.html">
                                                '.$row2['cname'].'
                                                </a>
                                            </h4>
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Branch: <b>'.$row2['location'].'</b></span>
                                            </p>
                                            <ul class="lp-grid-box-price">
                                                <i class="fa fa-graduation-cap"></i>
                                                <li><span> Stream: <b>'.$row2['ssname'].'</b></span></li>
                                            </ul>
                                        </div><!-- ../grid-box-description-->
                                        <div class="lp-grid-box-bottom">
                                            <div class="pull-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="rating-ratio">4.0</span>
                                            </div>
                                            <div class="pull-right">
                                                <a href="#" class="lp-add-to-fav simptip-position-top simptip-movable" data-tooltip="Add to favorites">
                                                <i></i>
                                                </a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- ../grid-box-bottom-->
                                    </div><!-- ../grid-box -->
                                </div>';

                        }


                }

                    /* Toss back results as json encoded array. */
                    //echo json_encode($return_arr);
            }
            else
            {
                //echo 'no result found in case I<br/>';

                // Case 2: Substream based search

                    if($loc_search)
                    {
                        $stmt1 = $conn->prepare('SELECT a.cname,a.location,b.ssname FROM classes a, substream b, map_class_stream c where a.classid = c.class_id and b.ssid=c.stream_id and b.ssname LIKE :term and a.location LIKE :loc');
                        $stmt1->execute(array('term' => '%'.$term.'%', 'loc' => '%'.$location.'%'));
                    }
                    else 
                    {
                        $stmt1 = $conn->prepare('SELECT a.cname,a.location,b.ssname FROM classes a, substream b, map_class_stream c where a.classid = c.class_id and b.ssid=c.stream_id and b.ssname LIKE :term');
                        $stmt1->execute(array('term' => '%'.$term.'%'));
                    }

                        if($stmt1->rowCount()>0)
                        {
                            while($row1 = $stmt1->fetch())
                            {
                                    //$return_arr[] =  array('Classes:' => $row1['cname'], 'Location:' => $row1['location'], 'stream' => $row1['ssname']);
                            
                                    echo	'<div class="col-md-3 col-sm-6 lp-grid-box-contianer lp-grid-box-contianer1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-id="11"  data-posturl="post-detail.html" data-authorurl="author.html">
                                                <div class="lp-grid-box lp-border lp-border-radius-8">
                                                    <div class="lp-grid-box-thumb-container" >
                                                        <div class="lp-grid-box-thumb">
                                                            <img src="images/grid/grid-1.png" alt="grid-1" />
                                                        </div><!-- ../grid-box-thumb -->
                                                        <div class="lp-grid-box-quick">
                                                            <ul class="lp-post-quick-links">
                                                                <li>
                                                                    <a class="icon-quick-eye md-trigger" data-modal="modal-2"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- ../grid-box-quick-->
                                                    </div>
                                                    <div class="lp-grid-box-description ">
                                                        <h4 class="lp-h4">
                                                            <a href="post-detail.html">
                                                            '.$row1['cname'].'
                                                            </a>
                                                        </h4>
                                                        <p>
                                                            <i class="fa fa-map-marker"></i>
                                                            <span>Branch: '.$row1['location'].'</span>
                                                        </p>
                                                        <ul class="lp-grid-box-price">
                                                            <li><span> Stream:'.$row1['ssname'].'</span></li>
                                                        </ul>
                                                    </div><!-- ../grid-box-description-->
                                                    <div class="lp-grid-box-bottom">
                                                        <div class="pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span class="rating-ratio">4.0</span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <a href="#" class="lp-add-to-fav simptip-position-top simptip-movable" data-tooltip="Add to favorites">
                                                            <i></i>
                                                            </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div><!-- ../grid-box-bottom-->
                                                </div><!-- ../grid-box -->
                                            </div>';


                            }

                                /* Toss back results as json encoded array. */
                                //echo json_encode($return_arr);
                        }
                        else
                        {
                            //echo '<br/>no result found in case II<br/>';
                            //Case 3: Class Based Search

                            if($loc_search)
                            {
                                $stmt1 = $conn->prepare('SELECT cname, location FROM classes where cname LIKE :term and location LIKE :loc');
                                $stmt1->execute(array('term' => '%'.$term.'%', 'loc' => '%'.$location.'%'));
                            }
                            else
                            {
                                $stmt1 = $conn->prepare('SELECT cname, location FROM classes where cname LIKE :term');
                                $stmt1->execute(array('term' => '%'.$term.'%'));
                            }

                                if($stmt1->rowCount()>0)
                                {
                                    while($row1 = $stmt1->fetch())
                                    {
                                            //$return_arr[] =  array('Classes:' => $row1['cname'], 'Location:' => $row1['location']);
                                        echo	'<div class="col-md-3 col-sm-6 lp-grid-box-contianer lp-grid-box-contianer1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-id="11"  data-posturl="post-detail.html" data-authorurl="author.html">
                                                        <div class="lp-grid-box lp-border lp-border-radius-8">
                                                            <div class="lp-grid-box-thumb-container" >
                                                                <div class="lp-grid-box-thumb">
                                                                    <img src="images/grid/grid-1.png" alt="grid-1" />
                                                                </div><!-- ../grid-box-thumb -->
                                                                <div class="lp-grid-box-quick">
                                                                    <ul class="lp-post-quick-links">
                                                                        <li>
                                                                            <a class="icon-quick-eye md-trigger" data-modal="modal-2"><i class="fa fa-eye"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- ../grid-box-quick-->
                                                            </div>
                                                            <div class="lp-grid-box-description ">
                                                                <h4 class="lp-h4">
                                                                    <a href="post-detail.html">
                                                                    '.$row1['cname'].'
                                                                    </a>
                                                                </h4>
                                                                <p>
                                                                    <i class="fa fa-map-marker"></i>
                                                                    <span>Branch: '.$row1['location'].'</span>
                                                                </p>
                                                                <ul class="lp-grid-box-price">
                                                                    <li><span></span></li>
                                                                </ul>
                                                            </div><!-- ../grid-box-description-->
                                                            <div class="lp-grid-box-bottom">
                                                                <div class="pull-left">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <span class="rating-ratio">4.0</span>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <a href="#" class="lp-add-to-fav simptip-position-top simptip-movable" data-tooltip="Add to favorites">
                                                                    <i></i>
                                                                    </a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div><!-- ../grid-box-bottom-->
                                                        </div><!-- ../grid-box -->
                                                    </div>';

                                    }

                                        /* Toss back results as json encoded array. */
                                        //echo json_encode($return_arr);
                                }
                                else 
                                {
                                    //echo '<br/>no result found in case III<br/>';
                                    //Case 3: subject Based Search
                                    // if fstream is also required then query
                                    // SELECT a.cname,a.location,b.sname,b.fstream FROM classes a, subject b, map_class_subject c where a.classid = c.class_id and b.subjectid=c.subject_id and b.sname LIKE :term

                                    if($loc_search)
                                    {
                                        $stmt1 = $conn->prepare('SELECT a.cname,a.location,b.sname FROM classes a, subject b, map_class_subject c where a.classid = c.class_id and b.subjectid=c.subject_id and b.sname LIKE :term and a.location LIKE :loc');
                                        $stmt1->execute(array('term' => '%'.$term.'%', 'loc' => '%'.$location.'%'));
                                    }
                                    else
                                    {
                                        $stmt1 = $conn->prepare('SELECT a.cname,a.location,b.sname FROM classes a, subject b, map_class_subject c where a.classid = c.class_id and b.subjectid=c.subject_id and b.sname LIKE :term');
                                        $stmt1->execute(array(':term' => '%'.$_GET['term'].'%'));
                                    }

                                    if($stmt1->rowCount()>0)
                                    {
                                            while($row1 = $stmt1->fetch())
                                            {
                                                    //$return_arr[] =  array('Classes:' => $row1['cname'],'Subject:' => $row1['sname'], 'Location:' => $row1['location']);
                                            
                                                    echo	'<div class="col-md-3 col-sm-6 lp-grid-box-contianer lp-grid-box-contianer1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-id="11"  data-posturl="post-detail.html" data-authorurl="author.html">
                                                                <div class="lp-grid-box lp-border lp-border-radius-8">
                                                                    <div class="lp-grid-box-thumb-container" >
                                                                        <div class="lp-grid-box-thumb">
                                                                            <img src="images/grid/grid-1.png" alt="grid-1" />
                                                                        </div><!-- ../grid-box-thumb -->
                                                                        <div class="lp-grid-box-quick">
                                                                            <ul class="lp-post-quick-links">
                                                                                <li>
                                                                                    <a class="icon-quick-eye md-trigger" data-modal="modal-2"><i class="fa fa-eye"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div><!-- ../grid-box-quick-->
                                                                    </div>
                                                                    <div class="lp-grid-box-description ">
                                                                        <h4 class="lp-h4">
                                                                            <a href="post-detail.html">
                                                                            '.$row1['cname'].'
                                                                            </a>
                                                                        </h4>
                                                                        <p>
                                                                            <i class="fa fa-map-marker"></i>
                                                                            <span>Branch: '.$row1['location'].'</span>
                                                                        </p>
                                                                        <ul class="lp-grid-box-price">
                                                                            <li><span> Subject:'.$row1['sname'].'</span></li>
                                                                        </ul>
                                                                    </div><!-- ../grid-box-description-->
                                                                    <div class="lp-grid-box-bottom">
                                                                        <div class="pull-left">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <span class="rating-ratio">4.0</span>
                                                                        </div>
                                                                        <div class="pull-right">
                                                                            <a href="#" class="lp-add-to-fav simptip-position-top simptip-movable" data-tooltip="Add to favorites">
                                                                            <i></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div><!-- ../grid-box-bottom-->
                                                                </div><!-- ../grid-box -->
                                                            </div>';


                                        }

                                                /* Toss back results as json encoded array. */
                                                //echo json_encode($return_arr);
                                }
                            }
                        }
                    } 
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
}


?>



-------------------------------location api - built with php, gets all the locations in the db---------------------------------------


<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root7262');
define('DB_PASSWORD', 'Punk@7262');
define('DB_NAME', 'shubham7262');


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



------------------------------search.php returns tags that matched the search strings---------------------------------------


<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root7262');
define('DB_PASSWORD', 'Punk@7262');
define('DB_NAME', 'shubham7262');


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


-----------------------------our very own mail function--------------------------------------------- 

<?php
if(!isset($_POST["first_name"]))
{
    return;
}
$name=$_POST["first_name"]." ".$_POST["last_name"]; 
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["city"]." ".$_POST["state"]." ".$_POST["zip"];
$servername = "localhost";
$username = "root7262";
$password = "Punk@7262";
$dbname = "shubham7262";

//$coupon = random_bytes(7);
//var_dump(bin2hex($coupon));

for ($i = -1; $i <= 4; $i++) {
    $bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $coupon   = bin2hex($bytes);

}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyClients (name,email,phone,address,coupon) VALUES ('$name','$email',$phone,'$address','$coupon')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for your contribution best of luck.!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$msg = "your coupon code is :".$coupon;

$to = $email;
$email_subject = "Your coupon";
$email_body = "You have received a new message from couponcode .\n\n"."Here are the details:\n\nName:".$name."\n\nEmail:".$email."\n\nPhone: $phone"."\n\nMessage:\n".$msg;
$headers = "From: demo@designdunia.com\n";
$headers .= "Reply-To: $email";	
mail($to,$email_subject,$email_body,$headers);

?>
<html>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.html';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<body>
<p>You will be redirected in <span id="counter">10</span> second(s).</p>
</body>
</html>