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
	<link href="lib/jQuery.filer-master/css/jquery.filer.css" type="text/css" rel="stylesheet" />
	<link href="lib/jQuery.filer-master/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
	<link href="lib/popup/css/component.css" type="text/css" rel="stylesheet" />
	<link href="lib/icon8/styles.min.css" type="text/css" rel="stylesheet" />
	<link href="lib/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="lib/jquerym.menu/css/jquery.mmenu.all.css" />
	<link href='css/mapbox.css' rel='stylesheet' />
	<link href='lib/chosen/chosen.css' rel='stylesheet' />
	<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css' rel='stylesheet' />
	<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css' rel='stylesheet' />
	<link href="css/main.css" type="text/css" rel="stylesheet" />
	<link href="css/stylefooter.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrapfooter.css" rel="stylesheet" type="text/css" />
	<!-- IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="listing"  data-userimg="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEGUlEQVRoge1ZLWwcRxQ+cMCVItXAIKDgQKQaGBQYtFLBm4mBgYFBQSoZGBgYGAQYFBhYOhAQYBBgqa204G7fWGdg4EqWUrCwqgpcqYoiy975xnKlAIMDAQYGWzAzd6vmfnb39rxX1Z+07L2n7828N+9na7VHPOK/A2IsEusNCuN9qRBIhUMK9S4x1inAXNX8RoKiqE5tbAuF3wQjGfGd09HVUtV8B4I6754IxlmfrLlxt7BHITYp1DtSmTdCmUsncyeVeU2Mxaq590AB5gSbv7wD1I7XKIrqA2WjqC7Z/JS+IanMm2HyDwqpzGvnxB/UwdNx8hRFdVLxslSmKdjcWmcQPATX4aQUGoLNvWBzXyTuibEoGF3BSCjEV9PgmI1IG9suPI4L2wjjfcFIJEOVyS0XJOPEneZmURt0dLXk8gUlUssHwYgEI6EWaEI7iWAkJdEqQMA9p6TQmMhO5Y64Z3eSRKUA8zPgiP7FJer3hW209JeCkQhl/i6TWy744kaMH4raoDa+9q1LmdzykQj1riuGPxa1IZXZdbd6UCa3XKCj6zVH4m1hG6yPBSN5ztcbZXLLSQKrLiy6xfQvFmxngITCeKVsfpnhO14K9V4RfdtE4pW71ZOy+WWGYLwXjGSS+YJaIHerUZncckEqc2xfLV04vinE5qT92sQg1hu+T6JQ7+bWD/WeYGDSw5gYFEV1qcypK2iXefV9Cy8YZ5UPV990bj4TjD/tqcbfZtUT6vq5c+L3afLLBakQuDhvZtcxTTcdHk6TWy6kXp4uBZgfK28bxW4ZI0Dp8LOJVOZ0VLy72nFS+ZM7DNSO11KbkVPii4VPZALMp5xISMXLVXAdCbfbukvttm6J9RYpNEihQay3BJub9O6ras5D4WuCr/gDv/6SrroZfRx6DSBfLBDrDRtG5sbtr86ojW1qXT2baUdS25C7kXIdPPVyM7UyrdVqNVLxsg+nLAOSZNPyITgTCU9HV0u2GNqQco68Gqtneyyf9PdSIXjwTaP9faC/6/VYnozNB7s+DfFiqH4Yr3g5ezP9QxCMMwrxYqr/UCjAHDFe+sWzr+SScUCtq2e1Wr/t6G3Z2/GaTfyLBWKsSsZBr4a4YYwUGm4R3hXppzuM97N0CfmcsO36h5QD7ynUO9R59+QT2VDvCDYfhz6/NslfDjyoNrb7vyhcyzNANr8DUVSXCocpw+fEWB/vOBalMk0bfuZWsLmVypxKZZpZpklirAvGeT/vTGvQoWVGPw/MR2K9VdhQQdhI6N1uVGhm8SOoYMDnQBVwBRQur/JNodS+/KLXZjNWp8QxO5/+mHCXa2Huf+AINr9Oj14++DDPlfxCmZ9zK00ZMjQ7bknRyqz0r6d21r4PmZxI/6+Y1W+lE39e9GYf8Yj/K/4BSKKZsGt5SOsAAAAASUVORK5CYII=" data-userlink ="login.html">
	<div id="page">
	<!--==================================Header Open=================================-->
	<header class="lp-header-bg">
		<div class="md-overlay"></div> <!-- Overlay for Popup -->
		<div class="lp-menu-bar  lp-menu-bar-color">
			<div class="container">
					<div class="row">
						<div class="col-md-4 col-xs-6 lp-logo-container">
							<div class="lp-logo">
								<a href="index.html">
									<img src="images/logo.png" alt="" />
								</a>
							</div>
						</div>
						<style>
							.mobile-nav-icon .nav-icon {
    													width: 28px;
   														float: right;
   													}
						</style>
						<div class="col-xs-6 mobile-nav-icon">
							<a href="#menu" class="nav-icon">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
						</div>
							<div id="menu">
								<ul>
									<li><a href="#">Categories </a>
										<ul class="sub-menu">
											<li class="has-menu"><a href="listing-science.html">Science </a>
												<ul class="sub-menu">
													<li><a href="listing-science.html">HSC </a></li>
													<li><a href="listing-science.html">Diploma </a></li>
													<li><a href="listing-science.html">Engineering </a></li>
													<li><a href="listing-science.html">Medical</a></li>
												</ul>
											</li>
											<li class="has-menu"><a href="listing-commerce.html">Commerce </a>
												<ul class="sub-menu">
													<li><a href="listing-commerce.html">CA </a></li>
													<li><a href="listing-commerce.html">CS </a></li>
												</ul>
											</li>
											<li><a href="listing-design.html">Design </a></li>
											
											<li class="has-menu"><a href="listing-entrance.html">Entrance </a>
												<ul class="sub-menu">
													<li><a href="listing-entrance.html">GATE </a></li>
													<li><a href="listing-entrance.html">JEE </a></li>
													<li><a href="listing-entrance.html">CET </a></li>
												</ul>
											</li>
											<li class="has-menu"><a href="listing-school.html">School </a>
												<ul class="sub-menu">
													<li><a href="listing-school.html">SSC </a></li>
												</ul>
											</li>
											</ul>
											</li>
											<li>
												<a href="#">Blog</a>
											</li>
											<li>
												<a href="about-us.html">About Us </a></li>
											<li>
												<a href="contact-us.html">Contact Us </a>
											</li>							
										</ul>
									</div>
						<div class="col-md-8 col-xs-12 lp-menu-container">
							<div class="pull-right lp-add-listing-btn">
								<ul>
									<li><a href="post-submit.html"><i class="fa fa-plus"></i> Add Listing</a></li>
								</ul>
							</div>
							<div class="lp-menu pull-right menu">
								<ul>
									<li><a href="#">Categories <i class="icons8-angle-down drop-down-icon"></i></a>
										<ul class="sub-menu">
											<li class="has-menu"><a href="listing-science.html">Science </a>
												<ul class="sub-menu">
													<li><a href="listing-science.html">HSC </a></li>
													<li><a href="listing-science.html">Diploma </a></li>
													<li><a href="listing-science.html">Engineering </a></li>
													<li><a href="listing-science.html">Medical</a></li>
												</ul>
											</li>
											<li class="has-menu"><a href="listing-commerce.html">Commerce </a>
												<ul class="sub-menu">
													<li><a href="listing-commerce.html">CA </a></li>
													<li><a href="listing-commerce.html">CS </a></li>
												</ul>
											</li>
											<li><a href="listing-design.html">Design </a></li>
											
											<li class="has-menu"><a href="listing-entrance.html">Entrance </a>
												<ul class="sub-menu">
													<li><a href="listing-entrance.html">GATE </a></li>
													<li><a href="listing-entrance.html">JEE </a></li>
													<li><a href="listing-entrance.html">CET </a></li>
												</ul>
											</li>
											<li class="has-menu"><a href="listing-school.html">School </a>
												<ul class="sub-menu">
													<li><a href="listing-school.html">SSC </a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="#">Blog</a>
									</li>
									<li><a href="about-us.html">About Us </a></li>
									<li>
										<a href="contact-us.html">Contact Us </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</div><!-- ../menu-bar -->
		<div class="page-heading listing-page archive-page ">
			<div class="page-heading-inner-container text-center">
				<h1>Class Search</h1>
				<ul class="breadcrumbs">
					<li><a href="index.html">Home</a></li>
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

		$location = cleanStringLow($_POST['location']);

		$stream = cleanStringLow($_POST['stream']);

		$subject = cleanStringLow($_POST['subject']);

		$all = 'all';
		if( strpos( $location, $all ) !== false ) {
			$location = "";
		}

		if( strpos( $stream, $all ) !== false ) {
			$stream = "";
		}

		if( strpos( $subject, $all ) !== false ) {
			$subject = "";
		}

		// let start developing for most simple case first which is

		// case I : user passes value to all three dropdowns

		// so check whether values are all or null will be done later

		// assuming user gives valid values to all the fields,

		// simply pull the data by joining the three tables

		try {

			    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			    $stmt = $conn->prepare('SELECT a.cname,a.location,b.ssname,c.sname FROM classes a, substream b, subject c, map_class_stream d, map_class_subject e WHERE a.classid = d.class_id AND b.ssid=d.stream_id AND a.classid = e.class_id AND c.subjectid = e.subject_id AND c.fstream = b.ssname AND a.location LIKE :location AND b.ssname LIKE :stream AND c.sname LIKE :subject');

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
								<!-- Marker icon by Icons8 -->
								<img class="icon icons8-Marker" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEoklEQVRoQ91Z4XEWNxDVqgGggjgVYCrAVICpIKYCnAIs7ckFYCoIVBC7gpgKMBXgVIDTwG3mfbNiNJc7aXXffZ4M+mN/c7qTnnb37dsVuZ9k0NY4QgiviejUOXfknHvqnDvWNe6ccw/OuXsRuU4p3Wy59iZAmPlIRKJzDgCwecsAqGsi+p2Z8f9eY28gIYRIROcZgIh89d5/dM7tLMDM+OuYGZbZWWgcxzMieq47fxCRq5TSsA+S1UCY+amI/JVdR0Q+ee+Zme8tG4IVx3FkIvotux4RvVprnVVAcLoKAmBggXNmvrUAmM5h5pNxHK/UQg8KZmfFntENRC3xDW4iIp+996drTzFvFN8cxxHx8hLuSES/9n6zC0jpTgCRUjrpObXW3BDCrYK5G4bhRWt++bwLSAgBPh3VnU56T621MbUMwDwXkSGlxK138nMzEKXYL3ApInqR2ci6kHUeYkbjr8vFzEBCCB/BMGCnlNKZdWNr5q1ZywwkxvhdrYFArFKsusg7zfA/Mjsyuvf+Q8sl1foglIdhGJ5ZDsMEhJlPReRPxEZKKW9s9vvMfCYi7ysZHi7zlpmvaxsMIdwhVojoTWsuvmMCkk2tcuJqaQMK4g88F5Eb7/1Vzi+aL86J6PVu4cYGC2L5kFKCcqgOK5AdLWqymk18ZX7RE4dM+c8owFaDOQe9leZNQGKMYKvjGlsVJ3iTUoJ4XBw5X9QoVtUD1jXlFCsQwa6GYVicX4CFXqrKlYJiq5uMMTbX7cojlg9a5pQmssy3zPnfA9GY+y4i/6SUmjWOybWyT9eCvaBLs2vV6PwgwV4AWeT0HOyo+oZheFML9hgj6hhIkUU9ldkNNN4ij548ksVibWFI8XsielKjX60oGS7jvT9ayvIFC5rEo8m1isxele55nlrjGgXT5eXlZ/y+uLh4iQoSljAmxJy7tsvsOfBaFIznADOOIwTmkzn3Ukuc1WRHuR4RPWtpM7NrYWKP9lHRCFlxmpsMCGzEj8qWatfE6gHlQZlcS4Ggrn73SDIeZS/6Y2gVLWq7VUDWSOuW0FvQYugFoGSAsGyWDF0JMU8u3AsyfFYUrtl8+U5Bu109AbNraSCj1oBMvx2G4dW+m557P8aIguqoRuFz7/UCKXPF5nV7kc3/Timhd2weXUAOHfSWjL+ErBtIEfRdwdg62sIa1Yy/GRC1yuYdlX2s0ZUQJ8yCawQEJazSVLuHtsZqIGqVnZDcgsEyU/V2F1clxOmpqgzJatck7BYS4DnaRyLSzVSbAJnkFQACHXfdPE06L6sPYy/XKrL9Tm6vcYuiNdqVxfdOiAuugUsftG0Q+OYkOaHb41YbtkUY3Xlk7oNFmWvqQalLATzYz1QBPgoQDXz0an+xbCyEkEuCZi+5BSA/38QiGvgmFyuac12u2AK0GZBJbpllsQlLmYumFohNWGu6SK5Z5tpChQzZm6Wm625qEXUx3J8jXtAW+nHqRXtnlShsWWVzIApmdzGUtRj+6r3gJtrsIHlk6aQKSs7ZHrX4JlT7qEA0+HfdELWIqfXZcqGl5wdxrbxYvjfHb+/95vfyJaiDAll7umve+xc6iKNgzDxqMAAAAABJRU5ErkJggg==" alt="map">
								<a class="md-trigger mobilelink" data-modal="modal-4">View on map</a>
							</p>
						</div>
						<div class="col-md-4 col-sm-4  text-right">
							<p>Showing all Café Listings <a href="#" class="achor-color">Reset</a></p>
						</div>
					</div>
					<div class="mobile-map-space">

							<!-- Popup Open -->

							<div class="md-modal md-effect-3 mobilemap" id="modal-4">
								<div class="md-content mapbilemap-content">
									<div id="map" class="listingmap"></div>
									<a class="md-close mapbilemap-close"><i class="fa fa-close"></i></a>
								</div>
							</div>
							<!-- Popup Close -->
							<div class="md-overlay md-overlayi"></div> <!-- Overlay for Popup -->
					</div>';



					while($row = $stmt->fetch())
					{

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
													'.$row['cname'].'
													</a>
												</h4>
												<p>
													<i class="fa fa-map-marker"></i>
													<span>Branch: <b>'.$row['location'].'</b></span>
												</p>
												<ul class="lp-grid-box-price">
													<i class="fa fa-graduation-cap"></i>
													<li><span> Stream: <b>'.$row['sname'].'</b></span></li>
													<li><span> Stream: <b>'.$row['ssname'].'</b></span></li>
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












		// thinking of making a function to handle db calls - will do that later



		//check whether location is all location or not

/*

		$result = strcmp($location,"all");

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
							//echo $substream_name.' ';

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

					    // Toss back results as json encoded array.
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
							    // Toss back results as json encoded array.
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

								    // Toss back results as json encoded array.
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

									    // Toss back results as json encoded array.
							    		//echo json_encode($return_arr);
								}
							}
						}
			 	}
			}
		catch(PDOException $e) {
			    echo 'ERROR: ' . $e->getMessage();
			}

*/

}


?>
		</div>
		</div>
	</section>
	<!--==================================Section Close=================================-->

	<!--==================================Footer Open=================================-->
	<footer class="text-center">
		<div class="footer-upper-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="footer-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="blog-archive.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="login.html">Join Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- ../footer-upper-bar -->
		<div class="footer-bottom-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="footer-about-company">
							<li>Copyright © 2016 Listingpro</li>
							<li>45 B Road NY. USA</li>
							<li>Tel: 007-123-456</li>
						</ul>
						<p class="credit-links">Proudly Listingpro by <a href="http://www.takethemes.com/" target="_blank">Takethemes</a></p>
						<ul class="social-icons footer-social-icons">
							<li><a href="#"><!-- Facebook icon by Icons8 -->
								<img class="icon icons8-Facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAC10lEQVRoQ+1ai3HTQBTc7QAqgFQQqADoAFcAHZBUAFRAUgGkApIKCBUkqYCkA6hgmVXuPGf7ZF0snyTP6GY8ceyT7+17+z7Se0TLkvQBwFsAr8KrbesQn98C8OuS5FXuQK5/KOk9gG8AXg4h4Q5n3AM4JXmZXrsCRJIBnIQNDwDOAFyTtDZGW5LMCrPDsr0IgpyRPI1CLYFIstCfwhdG7P8ntyQZjBXudU6yUXwDJNDpZ/jy9dgW6NJesNBN2LcwzSKQP8EnJmuJjC9Hy9yTPKKkjwC+A3ggOVUHzxpJkh3fPrMwkB8AHGoPxhoRVeIvFwZirjkqTN43MvSy3Jb/1kDUeD25kVO6nG4K3y/lHwNIqBqceK3R1C+vAZj3zlu/S6LnKEBC2HSYLw0qTUTaZvnBgQQQvwA8s7YBOMi4dvqbOK+zt0H6rwNQJ+XHABKDygVJh/ytq5TygwJJKofiXDVVIE/OVVMF4mj0BsA7kn6/XJLsM58BOIptBIGutDA0tVpzVVJZZH3mkIA0IHPW6goIoXJ/VFIpF0t+tG3PtjP6nj8lavUqkaoDiQekVsrxPbdvzbLP06SZKRzrUmtfQEZ39j7cl+QSxeWMC0e/b12DUatLozkJJX0JuaWznJk6kFgJfCVpUAdrkdZK4FCd/Yikb7TGt0iP8PuPpOuwrau6j6Snz5m9yxyPT0nrJsTZIgVWyCqpTwYuPXP2kQJNzT5SoKSNLTO1CrQ2U6tASTO1eilJkh/hH9ds9NRy9qQpejdI660ikNgQbVpvflTpnkVnL2IX0/uaikBiN3oR29OxO1qlIVoDSNIIbZ7wDzIwsG8grQMDwfzpCMcJyfNdqdR6X51puD61aJXkMZM4XrI6whEPXptHMd18QVFTsui+ekcgwQJuS9i5Y+thCcJnt405GUCcwtmXYfb1O55aMmPax5zWblgczWIL2XlmzHWXDJ6tAIhC/QfJdOM+5ZDCYAAAAABJRU5ErkJggg==" alt="facebook"></a></li>
							<li><a href="#"><!-- Google Plus icon by Icons8 -->
								<img class="icon icons8-Google-Plus" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEFElEQVRoQ+2a8VEVQQzGkwqUCoQKhArUCpQKhAqECoQK1AqECsQKlArUCsQKhAri/J7Jzd6+23t3B3dv/yAzzGOYPV6+TfbLl+ypFMzM9kXkrYjw+bK0bqG/fxeRnyJyqap8rpnmf3EAHypwvrRHgDrNAbWAmNkbEfksIk9F5E5ELkTkSlV5eGtmZmQEvh2JyBMRuRWRY1W9CqcaIGbGIkBglyJyoqo8UI2ZGRv80VMevw4DzAqIme2KyA+PBEiJRLWWbDobfaCqNwHkm58JDhORqd7MjLR67al/qB6N334mdmtLp9KOeprd+JnZAwg5905EPqnqSfWhSBxs+W5mMNILEXm1bXYau4nOZhyLayLy1w/52P9T0/pbgFhNHk31pQGiqmtVfuo/XfK5CMQjkCV3ve+7HiNSSyTCj3tHxMyQB8gZdBo9S8muReRsrho1GYgXIVQyMh9VgExIJTaAaH5OkdulRuihIjsJSKI6r1W11TV6Q4ZKoF/ALlT1+KEc7tFcqzo4mH4TcclznXLGzNBqdJdhs8ue0RFJZLP0FU8zI9WeOZKvqkrazWZTgDRSZgOQUNM4f6Oqe7Oh+N8UDk+tRGWGTzulvsX7/i+xcG7pc18gTa+c73YGeo0UHjo6o4Dw5ZlKLrbEGZBzVT0b4nyuwodGcgoQBhIM7MJo+teGZQlFU2cGt85LAmEUEz1yFD3otRkZeR/NNGaHYcaYYrgYEE8v5AjTi+ceFkCshnhJdf/D74xohqRUrFkUSPKl1AYqOxqLSAUwlnSm3CZQWwGSOjWFbqe2110EMPqwl3Y0G7WyjAEzRbFotQLh3MBeIRYB0CsYqwNiZszDMCKQ9ySAa7Fa6WBvOj99KmFSarkCppZw2HEchgp2ir4kjUwRTIciaI2l5iyI7+n03IFzT58WxXpPAh2nLDaoui/CWmZGRxhT+l569aJIg9XUGlWlQPba7EAyVho06HYwpFX0JXubCuQSQLhygJmwwR1ftgEbi+QSQNJDOAYIlZ9J+Z2qUv1nscGsZWboqWCiQQcXj5P+fdZbsBTIytES3ZlZKt9ZS1Q677qTOkEEiAZt7mApPzZkfha5FrljitJ70ZNdcfFdgIGG2em1W19vrJikAGKUlJ8AJNJ3ddGz8erN6wPropIHICITd/AUyJg6LnK9nV+94QDNELsLTRbv1n23qSc8kxY9KnyA4gWDUb3I2Ej4GSR9YVQ+D+J6OtJrkengFMc7JE0U6dWAI31hIBQsA2ckSLVmZiGXmAvsNy8MeKgQgjGPgqnoK2p8hQMiCbnUfoUjoU3AACJeXIl+/Ne2QDlrch5j4h8v/Bx1vlSTgIF5AJAyVE1pxn0LIFqEUrzJdcoNhoKl0j5jSWCcA84vP5BRZzH+B8zg25A0mqpxAAAAAElFTkSuQmCC" alt="google-plus"></a></li>
							<li><a href="#"><!-- LinkedIn icon by Icons8 -->
								<img class="icon icons8-LinkedIn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADv0lEQVRoQ+1a7VEbMRTcrSDpIFBBoIKQCoIrSKggUEGggkAFgQogFYRUELuCQAUJFbzMnp8uurNOJxv7Ds9YM/6B0fm02vf2fUhExzCzjwCOABz4p2vqEN9PAehzT/Im9UK2vzSzYwBfAewNscIV3vEA4IzkXfxsA4iZCcCpT5gBuPZd0G6MNsxMViHr+ATgrS/kkuRZWFQNxMwuAXwG8ATgnKT+fnHDzLTR5wBeAbgiWW18BcTN6dZBHJEclYG+3XOGfvm8icwsAPntPiHbe5FMJHxZTMgVHkju08xkd98AzEjKFrdmmJksRz4zERA5tKR2a9gIO+3+IlZuBES2JiYOu3zDY4qoDIxpJ6QaSU0fitLIV6YCYpXXkwsxxYVAZifzS41rkidDLTz1nnr9OSARdZJkMRKCkIKmREESeEJS5jnKKAUSzK6SuHilkUhMSR6OgmIeOuYW1cNIp9mZ2WsAf3JmOQS4UiB/3Xz2SSrHqYeZKRdT/HkiKVCjjFIgQZrvSE5aQJQJyFduSHaJwcbBlQLRrktq5dRiJHZ2/U8icNBma+Orb1pGv4+4/Cp2CMCb1gIfxcjYeVkRIy1TUhqtj4aUqqFiQ7LQWlc/I1HUz62z8p8l52pDPkQVqH5fwiIz1gZ9LzXXIkbCpL7dVlZQOtcXKpHIDYFSCnTR9+6lgGTSlzrOFKQ61VwfEgllBmKzqn08LokpgVQSW5kwgPckBSw5xgSiElrFW25xEph7V8sF6V/FR/oSymUYCVVnFkRYpAfcIP2d+dzgjPTZeur/UT5XVYEdc4pUa22MRDv9xcsCBVQFWWUPaiIkTc3MNEcxbCFxdd8aHkhGojud2szUMRH4umMyto+EZkGdEbgfKG6o7r4gqUU3hplJyX4A+EkyBOR6zuA+ErHRcNyoFZWsa6JyIeknYwDJ1TbFvphgbFgfWbWAazh0oq+wYySpGFGuVZLOdJpHdyen3yzXRXlprpUCupZnd0DiVszOtObesjOtdTTo2ju5ll3dqdYzWqY7RnJpxjNNKxxfLRz0lHZGlumi5AJiXxXZfjY66Jllj97MTA2Adz0vUA/qeJm5iRSl+D2tFCnUONXRWzgMHfWco4+Njnr9//mNO22oi7fmQDQ6TXskude+MKAGgBpi23lhwFkJVzgERlc4rlahe9PPmJmumYRLDc0rHFGrJoDRV2JFrRoV/aMy5Ook0ZE/hyPyRlel65qTALXPQza92aW/ry7MafaaU0vahD5cPAtXi0pftu556heHi2fJo/B/rbIkXGKb1eoAAAAASUVORK5CYII=" alt="linkedin"></a></li>
							<li><a href="#"><!-- Instagram icon by Icons8 -->
								<img class="icon icons8-Instagram" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFNUlEQVRoQ9WagVUUQQyGkwqUCpQKlArUCoQKxAqUCoQKhAqECsQK1AqECtQKxAri+8ZkzQ67d3vL3HHOe/dg7/Z25k/+JP9kTmVkmNkrEXkuIk/9NXbrJt6/EhFel6r6aWhCrd80s30ReS8ijzexwhlz/BCRI1W9zN/tATEzALz1G36KyKmIfFFVrHFvw8xgBexgbY98IaeqehSL6oCYGYt+4x+AmOutG2YGGAzOOFPVYvgCxOn00T/cu28PLLOee+ib33cAzQLId4+JrfGEmT0UkQ8iQszmQWy8FpFD98wPVd1VM+MNvvBTVbcmwM3ss8fFkIM+qeq+mRH4xMwBQM5FhFS7Nd5wupsj2FHVG38PL/0qMaHK2iNeLriAa2SFrYoNMytAWHB2SX4/xcoVQAa/sCzg1v35FCDZc82BuJWgKl6GCvxlUIugCH8vlmXGACIio9RaCxAze+eZZGrCIFDPVfVkyLtm9kVEno14vgR7UyBmRsUl6wUAFAEpktdNWN49hYdYAK+o0AB6raosvBuefklELyswaK3DlAD+hsZdYqSSNF9F5Lhe0FgsuQGOk9XfqurZqrHXrX8uEDPDC9QgRi91mxlWxOp4KccI1u8p2EpyQDWK3eQxCiSl4ykP+82Cwwsu/dFoUGjRIOjxwIXzHHpCxQdTJnUh+2JhjKRsMeWZLwDhfKYSh/WhGfy+qmKEz/FiBDEZjGfcONV4xqQR9WWRR0brii+YAgplCp0qENdu6V7g1ivzReO5J56OA0xUaihIgS4VPY86FOYCIThJs19VFTqgnEMZAOL50ORDJnYDALiAUdU9f16k3RNVZb61AAmVHJQKYCuBiJVVYMrCE8WKqm0OJO1Zikr2RQCMwC7AJpH7toXxLLEBjXY9Xv6p2mpLe2dqpR1k2ZUl+d/RbA6Qik4UxvN6rqYxkiRD0Ip0Sb0ok88F4UBiTxT7jPDSLSO18Aj7AGhU5H5L+d+T46p76RqJs9PaI720PFcRjHlu1NIL9iOTCuKiDU3vAdVEcym2SSBUYXJ+UKt3PReAG4WKTz26VtWniVrlujW1olD998EeDbw6/dKJLAJu7kgdk42k33B/qbheEClcKNYWBREl/dgLYiiIWw2RO6df5zLVt1u4mYVE6VTsKl6pBGctUQb7bK2AxMILnWrhF5J8CphaNUdQp/q0PtHoXgkdlGV8UAzP8P4UGU8jGrpmSoWMH+16NvGIA2ELGw3vvLEKSc5t/I9sIX2WIwlPqaRv5EjZAvB5SP9qY1Ua00OebQbEFxUUI2aYNHaJWJTXsi0rXiALcsYRu0OMgwQapFSAagrEwUTPmMuuA+Lcj5YPO0m8ENYvzQdvQEQ/lzOZOIuhcRcNjcFQaw6k8kzQCWtO2pc4lSJO+P5CT6zNI+nBWB+L5oZbNOh+VzEC5bK3eAwNPTw6GBO1W9bikTyJ15Qp8RFfK3EytC9flL7XDiR5KFo+0cTOMRJNbBpxsw5YVwbi+2eCc2uGmZE8kC/duUluB9XyPLawW3WC5cklCmZsif/J//roLTUVoAEFbxYFWrvRCyrdFmpNqOTe0VtU6q6PlBoNgKH4YYF7oZnTiSYH6wBEPhsJlXwQx9ND+gmKjR20tDb41Od1ZyOpi1902cIfDDjN8Fh92DJ14lb3AYDjiNJ2Gv3BgH+Yf8Ix69Cl1aqX1JEsafo/4Ug1IIOBblzTJLvXgHcPQHOCO474OhAlHQ9IgFpybMLQq8wxKGluAak0FKDI1VGdV5mw5b3sW+KHZ4Oa7A8mMc1cZlo+UAAAAABJRU5ErkJggg==" alt="instagram"></a></li>
							<li><a href="#"><!-- Tumblr icon by Icons8 -->
								<img class="icon icons8-Tumblr" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADeUlEQVRoQ+2ajXHTQBCF91UAVACpAKgAOgBXQFIBSQWECkgqIKkgSQWECnAqIKmApIJlPs2d5uScrL8jthndjMdjSzrtu919tz8naxnu/snM3pvZm/Bpu/Up/l+aGZ9LSVe5F2r1T3f/aGbfzOzVU0g44h23ZnYk6TJ9tgHE3QFwGG64M7MTM7uWxGpsbLg7VoF1INvLIMiJpKMoVA3E3RH6c7gAYn5v3XB3wLDgjFNJ1cJXQII5XYSLbzetga7VCxr6Fe5bYGYRyO/gE1uriYwvR83cStqTu++b2Xczu5O0rQ6eVZK74/j4zAIgZ2YG1e6MNiKqxF/OAYKtwQqTfcPdj83sS2b5aqfssv8h1xNfWQLEK6+XHu0pQyYNpPHHzJ7nnisxf27eWv5SQNwdAAB5kFSDKTV/26L+CyBEBFD4T0lsXtXYRSBZ0tgpIInTPbAfSbrfOY0E34D52IO+SoK56rETGnF3hMcvoO8bSXw3xtYDCfkKgSUMdUN0mprUqmmtofIzSQdDqf6R6Q5dseAPRJ+RmUh09nMgAmtdm9m7dYJO2WNG06+7xwCTfOVYEmw1agxdxKIbYomXl2S0KRopGdJMnmsGEldgxV6pbixabPhHQgxZX9qUs6e5fS1YmzAtwFNA55JI7kaN0aY1dMMrSQ5FWWsGUiBxmzXSx/u6fKDrep93rLtndvbZ2WdnX+9Fs4+M8BF6K6+r+uxKcyYkXiRotDMIVRrNmz6MVlIjUdBsyTWpz1JZoYJO4Zlcn/yeWlgsnN9LetFH+PSekkBYxQ9mdtCWLSaF8pycZJpVF2pMFFwSSOxTXElihbMjNJOiBtAKH8L/5ZRNsySQWPMFwJ4kBBw0tgJIcNhYLm1NsHqFGSP2mmIaCUBwWJz+mZn1rlO5O4xFP4XvRhW/r0pTIGtZZ8CECIPjAwbzonRK9bFubbs79S1MkXvjYQReQc2Y2tgg+k1qzjdFW29hYoSJvfCudYCxMEt65nXhu+uheH219Rb7GlV3tO8kHTZPDs68rDoaioPSKtqKxzEmHURIioWL2J6O3dGdaYgm2qi60f/XgYHAPGmZ51DSaQkzKz2HuxOXxeMlzSMcifOkYDA3ftMTnGTLU8EEEoHxiCJibNZoebcdcwJAX+aZKufQ52E6LKb9mFM6YxIbEaUShm9ywHaR6bJ7zV8Cie0+55PMmQAAAABJRU5ErkJggg==" alt="tumblr"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- ../footer-bottom-bar -->
	</footer>
	<a href="post-submit.html" class="add-listing-mobile lp-search-btn">Add listing</a>
</div>
	<!--==================================Footer Close=================================-->



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
