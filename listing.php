<?php
require 'connect.php';
require 'helper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Listingpro - Template HTML5">
	<meta name="author" content="">

	<!-- Title -->
	<title>ClassesDunia - Home</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

	<!-- CSS -->
	<link href="lib/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link href="css/colors.css" type="text/css" rel="stylesheet" />
	<link href="css/font.css" type="text/css" rel="stylesheet" />
	<link href="lib/popup/css/component.css" type="text/css" rel="stylesheet" />
	<link href="lib/icon8/styles.min.css" type="text/css" rel="stylesheet" />
	<link href="lib/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="lib/jquerym.menu/css/jquery.mmenu.all.css" />
	<link href="css/main.css" type="text/css" rel="stylesheet" />
	<link href="css/stylefooter.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrapfooter.css" rel="stylesheet" type="text/css" />
	<!-- IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page">
	<!--==================================Header Open=================================-->
	<header class="lp-header-bg">
		<div class="lp-header-overlay"></div>
		<div class="md-overlay"></div> <!-- Overlay for Popup -->
		<?php require 'nav.php'; ?>
		<div class="page-heading listing-page archive-page ">
			<div class="page-heading-inner-container text-center">
				<h1>Class Search</h1>
				<ul class="breadcrumbs">
					<li><a href="index.php">Home</a></li>
					<li><span>Classes</span></li>
				</ul>
			</div>
			<div class="page-header-overlay"></div>
		</div><!-- ../Home Search Container -->
	</header>
	<!--==================================Header Close=================================-->

	<!--==================================Section Open=================================-->
	<section>
		<div class="container page-container">
			<div class="row">
				<div class="col-md-12 search-row margin-top-subtract-35  margin-bottom-35">
					<form class="form-inline clearfix" method="post">
						<!-- <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon lp-border"><i class="fa fa-search"></i></div>
									<input type="text" class="form-control lp-border input-width-299 border-right-radius" id="searchInput" placeholder="What is your Interest?">
							</div>
						</div> -->
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon lp-border"><i class="fa fa-crosshairs"></i></div>
									<div class="ui-widget border-dropdown">
									  <select class="comboboxs" data-name="location">
										<option value="">Your Location</option>
										<option value="All">All Locations</option>
										<?php
											try {

												$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
												$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												// Case - I : location based search

												$stmt = $conn->prepare('SELECT loc FROM locations');
												$stmt->execute();
												if($stmt->rowCount()>0)
												{
													while($row = $stmt->fetch())
													{
															echo '<option value="'.$row['loc'].'">'.$row['loc'].'</option>';
													}
												}
										?>
									  </select>
									</div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon lp-border"><i class="fa fa-list"></i></div>
									<div class="ui-widget streambox border-dropdown">
									  <select id="comboboxCategory" data-name="stream">
										<option value="">Your Streams</option>
										<option value="All">All Streams</option>
										<?php
												$stmt = $conn->prepare('SELECT ssname FROM substream');
												$stmt->execute();
												if($stmt->rowCount()>0)
												{
													while($row = $stmt->fetch())
													{
															echo '<option value="'.$row['ssname'].'">'.$row['ssname'].'</option>';
													}
												}
										?>
									  </select>
									</div>

							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon lp-border"><i class="fa fa-tag"></i></div>
									<div class="ui-widget subjectbox border-dropdown">
									  <select class="comboboxs" data-name="subject">
										<option value="">Your Subject</option>
										<option value="All">All Subjects</option>
										<?php
													$stmt = $conn->prepare('SELECT sname FROM subject');
													$stmt->execute();
													if($stmt->rowCount()>0)
													{
														while($row = $stmt->fetch())
														{
															echo '<option value="'.$row['sname'].'">'.$row['sname'].'</option>';
														}
													}

											}
											catch(PDOException $e) {
													echo 'ERROR: ' . $e->getMessage();
											}
										?>
									  </select>
									</div>
							</div>
						</div>

						<!--  this one is the tags chosen, will look into this later
						<div class="form-group margin-right-0">
							<div class="input-group margin-right-0">
								<div class="input-group-addon lp-border"><i class="fa fa-tag"></i></div>
									<select data-placeholder="Select Subjects" class="chosen-select tag-select-one" multiple >
									// php code to load subject options the one in above subject dropdown
									</select>
							</div>
						</div> -->

						<div class="lp-search-bar-right">
							<input type="submit" value="Search" class="lp-search-btn" />
							<i class="icons8-search lp-search-icon"></i>
						</div>

					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="LPtagsContainer "></div>
				</div>
			</div>

			<div class="row lp-list-page-grid">
<?php

// TODO : empty check should also be performed


if (isset($_POST['location']) && isset($_POST['stream']) && isset($_POST['subject']))
{
		// cleanStringLow finds all special characters(except whitespace \s) and replaces them with ""(nothing)

		//echo 'Location: '.$_POST['location'].' Stream: '.$_POST['stream'] .' Subject: '.$_POST['subject'];


		$location = cleanStringLow($_POST['location']);

		$stream = cleanStringLow($_POST['stream']);

		$subject = cleanStringLow($_POST['subject']);

		$all = 'all-';

		if( strpos( $location, $all ) !== false ) {
			$location = "";
		}

		if( strpos( $stream, $all ) !== false ) {
			$stream = "";
		}

		if( strpos( $subject, $all ) !== false ) {
			$subject = "";
		}

		//echo 'Location: '.$location.' Stream: '.$stream .' Subject: '.$subject;

		// let start developing for most simple case first which is

		// case I : user passes value to all three dropdowns

		// so check whether values are all or null will be done later

		// assuming user gives valid values to all the fields,

		// simply pull the data by joining the three tables

		try {

			    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					// old-stmt
					//$stmt = $conn->prepare('SELECT a.dclass,a.location,a.logourl,a.pageurl,b.ssname,c.sname FROM classes a, substream b, subject c, map_class_stream d, map_class_subject e WHERE a.classid = d.class_id AND b.ssid=d.stream_id AND a.classid = e.class_id AND c.subjectid = e.subject_id AND c.fstream = b.ssname AND a.location LIKE :location AND b.ssname LIKE :stream AND c.sname LIKE :subject');

			    $stmt = $conn->prepare('SELECT DISTINCT a.dclass,a.location,a.logourl,a.pageurl FROM classes a, subject b, map_class_subject c WHERE a.classid = c.class_id AND b.subjectid = c.subject_id AND a.location LIKE :location AND b.fstream LIKE :stream AND b.sname LIKE :subject');

			    $stmt->execute(array('location' => '%'.$location.'%', 'stream' => '%'.$stream.'%', 'subject' => '%'.$subject.'%'));

			    //var_dump($stmt);

				if($stmt->rowCount()>0)
				{

					echo '<div class="row listing-page-result-row margin-bottom-25">
						<div class="col-md-4 col-sm-4 text-left">
							<p>'.$stmt->rowCount().' Results</p>
						</div>
						<div class="col-md-4 col-sm-4  text-center">
							<p class="view-on-map">
								<!-- view on map was here -->
							</p>
						</div>
						<div class="col-md-4 col-sm-4  text-right">
							<p>Showing all Class Listings <a href="#" class="achor-color">Reset</a></p>
						</div>
					</div>';



					while($row = $stmt->fetch())
					{

					    	echo	'<div class="col-md-3 col-sm-6 lp-grid-box-contianer lp-grid-box-contianer1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-id="11"  data-posturl="post-detail.html" data-authorurl="author.html">
										<div class="lp-grid-box lp-border lp-border-radius-8">
											<div class="lp-grid-box-thumb-container" >
												<div class="lp-grid-box-thumb">
													<img src="'.$row['logourl'].'" alt="grid-1" />
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
													<a href="'.$row['pageurl'].'">
													'.$row['dclass'].'
													</a>
												</h4>
												<p>
													<i class="fa fa-map-marker"></i>
													<span><b>'.$row['location'].'</b></span>
												</p>
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
												<!--<div class="pull-right">
													<a href="#" class="lp-add-to-fav simptip-position-top simptip-movable" data-tooltip="Add to favorites">
													<i></i>
													</a>
												</div>-->
												<div class="clearfix"></div>
											</div><!-- ../grid-box-bottom-->
										</div><!-- ../grid-box -->
									</div>';
					}

					    // Toss back results as json encoded array.
			    		//echo json_encode($return_arr);
				}
				else
				{
					echo '<h1>No Class Found</h1>';
				}

		}
		catch(PDOException $e) {
			    echo 'ERROR: ' . $e->getMessage();
		}

}


?>
		</div>
		</div>
	</section>
	<!--==================================Section Close=================================-->

<?php require 'footer.php' ?>

	<!--==================================Javscript=================================-->
		<script type="text/javascript" src="js/jquery-lib.js"></script><!-- Jquery Library -->
		<script type="text/javascript" src="js/jquery-migrate-1.3.0.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src='js/mapbox.js'></script>
		<script type="text/javascript" src='js/leaflet.markercluster.js'></script>
		<script type="text/javascript" src="js/build.min.js"></script>
		<script type="text/javascript" src="lib/chosen/chosen.jquery.js" ></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="lib/slick/slick.min.js"></script>
		<script type="text/javascript" src="lib/jquerym.menu/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="lib/Magnific-Popup-master/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="lib/jQuery.filer-master/js/jquery.filer.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-rating.js"></script>
		<script type="text/javascript" src="lib/popup/js/classie.js"></script> <!-- Popup -->
		<script type="text/javascript" src="lib/popup/js/modalEffects.js"></script> <!-- Popup -->
		<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
