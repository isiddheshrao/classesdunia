<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Listingpro - Template HTML5">
	<meta name="author" content="">
	
	<!-- Title -->
	<title>ClassesDunia - Resonance</title>
	
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
	
	<!-- CSS -->
<!-- cart files -->
<script src="https://www.classesdunia.com/admin/cart_script.js"></script>
<link rel="stylesheet" href="https://www.classesdunia.com/admin/cart_style.css">

	<link href="../../lib/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link href="../../css/colors.css" type="text/css" rel="stylesheet" />
	<link href="../../css/font.css" type="text/css" rel="stylesheet" />
	<link href="../../lib/popup/css/component.css" type="text/css" rel="stylesheet" />
	<link href="../../lib/icon8/styles.min.css" type="text/css" rel="stylesheet" />
	<link href="../../lib/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="../../lib/jquerym.menu/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="../../lib/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="../../lib/slick/slick-theme.css"/>
	<link href="../../css/main.css" type="text/css" rel="stylesheet" />
	<link href="../../css/stylefooter.css" rel="stylesheet" type="text/css" />
<link href="../../css/bootstrapfooter.css" rel="stylesheet" type="text/css" />
<link href="../../css/agency.css" rel="stylesheet" type="text/css" />
<link href="../../css/tiles.css" rel="stylesheet" type="text/css" />

	<!-- IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!-- cart -->
<div id="fab" onclick="fabfunction()" data-toggle="modal" data-target="#myModal">
<span id="carticon" class="glyphicon glyphicon-education btn-bg"></span>
</div>
	<!--==================================Header Open=================================-->
	<div id="page">
	<!--==================================Header Open=================================-->
	<header class="lp-header-bg">
		<div class="lp-header-overlay"></div> <!-- ../header-overlay -->
		<div class="md-overlay"></div> <!-- Overlay for Popup -->
		<?php require '../../nav.php'; ?>
	</header>
	<!--==================================Header Close=================================-->
	
	<!--==================================Section Open=================================-->
		
		<!-- Popup Open -->
		<div class="md-modal md-effect-3 single-page-popup" id="modal-6">
			<div class="md-content cotnactowner-box">
				<h3>Contact Owner</h3>
				<div class="">
					<form class="form-horizontal"  method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name:">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email6" placeholder="Email:">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="5" id="message1" placeholder="Message:"></textarea>
						</div>
						<div class="form-group mr-bottom-0">
							<input type="submit" value="Submit" class="lp-review-btn btn-second-hover">
						</div>
					</form>	
					<a class="md-close"><i class="fa fa-close"></i></a>
				</div>
			</div>
		</div>
		<!-- Popup Close -->
		<div class="md-overlay"></div> <!-- Overlay for Popup -->
	<section class="aliceblue">
		<div class="pos-relative">
			<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
			<div class="container single-page-slider-container">
				<div class="row">
					<div class="">
						<div class="post-slide">
							<div class="slide">
								<img src="images/slider-1.jpg" alt="post1" />
							</div>
							<div class="slide">
								<img src="images/slider-2.jpg" alt="post2" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="post-meta-info">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="post-meta-left-box">
							<ul class="breadcrumbs">
								<li><a href="../../index.php">Home</a></li>
								<li><a href="../../listing-science.html">Science</a></li>
								<li><span>Engineering</span></li>
							</ul>
							<h1>Resonance</h1>
							<ul class="post-stat">
								<li>
									<span class="phone-icon">
										<!-- Phone icon by Icons8 -->
										<img class="icon icons8-Phone" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEbElEQVRoQ81a4XnUMAy1vEC7QekEwASUCWgnoEzQY4FE9gLQCWgnoJ2AMgF0AtoJgAUivpdPyefzJU6cC5fcv/Z8iZ71JD3JJpP4MPO5iJTGmFfGmCcicsx8k/rNUt9R14uZ+VhEPhljLuPviegtMz8sZXDfe3eAKIhv8IKI/LXWMjN/ZuaNgoNnXjPznzWB2QLCzDAeIOCRR2vtJTP/bAwuiuInEb00xtw55y5WCaQDxFm868z8QkR+AQARXTDz3VrA1B5RA3+oJ26ttZs+6hRFwUSEBPCHiE7XQjGKYuLee38+tMsNxUTk2nu/GVp/iO+pKIrPRHSlMbFDp56shliCB0GxVWQxKssSnH+Ra1BAsVVkMQAR7KxzrrOmpGixJoqBWtjREw3cpxw+a6ZbBcUA5IGI3kxNpyHFnHOnORsx51oAqdPpPhmooecUr84FBum3yUBPU3ZU0/fvqXE2GxA8KIiT7FTaaDAR+e69P5vLsNzn1JkqoNet935H8fY9VL2B9H2cm75zDR1a30gUiMSaHjk8DzZgUW/UdgfK9oaI3ovIKK9EAjKbkkM7nPt9CyQyDP1GK9+7HlqW5VdjDDrIUcBzDctdv1XNg5rw4Jx7m4iNUGtBAWcV0lwjx6yPG6vjqqpQ6Y+I6CM6wx7ROGrdGAPmWtPV6oIuoA36DVCsc7d1MIF1q1DAnUKxKIo7InpnjElSLGqyEPDJuJpr97ue0ztFqaoK/fmJiDjvPfcZURRFne2MMVgPMIsMJXqlOzOf6SAiSR0UxaqqIDwxlFgMTLIHiaiTipfFwQw2U0G8JHcbdUjpeLSEZwaBRNRJzrOgpJVmAAO6YWR0kJgZBIIgj3b7xjn3IVUsAzAHi5lRQBRMu9upYhmvPRTNRgNRAy9F5IsWwQ+pyXxEs9GeAZUx1cmtSVlAJoBBAkBxbVIzwHcWTVUKV8aYpjmDVML6UZP/bCATwISpGbIHCaA1TusVRrB93SUGiDiXSSaNSUAmgoFBUABGRNhae6uHSHVHqkcYmDnXB0lBDcOfg96ZDCQXTIdxbeKDDLLW4gxma9c1ziCBQE18er2zF5ApYEAljZsjEbnXyX+ynxnjnb2BxGBEZOO9v04p3SmZacg7swCJwRhjkkVzHznf553ZgDRgqqoCjyFRkHaRPmeXKLF38J5ZgfRUdaTb/9LTbx1t7OPmhN4KC+FO7Zjzne3cec6Hhs9S1YzUiZa5rh3eezfn+4Jx7ePs1IoNjYIT0h5xszfVwlNoqIX/DkTjpq0dmM6od5Ipeih96xkmjsvrAeFBgCgYaK6Watp4YXaWNXmJTqFxqaE+wD0YkGaHoXI1RZ/o/wAOonAU3cqyRBuBduLZWvuqSe8HBxJ4Z6MXDxqMqDvXfbK9444MPNF6cxEggXeQpnH0V6ti/cAzdyLyYK19hKdU6uO2UnPRZwsEfrcokAAQusLLqqrgpYZyO/GulxrOu2i4CiBR/cFsANdI0GjhIgOmnc/wkl656pQ8/wC3pFkyvejV7AAAAABJRU5ErkJggg==" alt="phone-icon">
									</span>
									<span class="phone-number">
										0744-3012222,3192222
									</span>
								</li>
								<li>
									<a href="#">
									<span>
										@
									</span>
									<span >
										cc@resonance.ac.in
									</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="website-link-icon">
										<!-- Globe icon by Icons8 -->
										<img class="icon icons8-Globe" src="data:image/png;base64,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" alt="web-link">
									</span>
									<span class="website-link">
										www.resonance.ac.in
									</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="post-meta-right-box text-right">
							<div class="padding-top-30">
								<a href="#booknow" class="secondary-btn">
									Take Admission
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container single-inner-container single_listing">
			<div class="row">
				<div class="col-md-8">
					<div class="post-row">
						<ul class="list-style-none post-price-row line-height-16">
							<li><span class="post-rice">About Resonance</span></li>
							
						</ul>
					</div>
					<div class="post-row padding-top-40">
						<p>
							Resonance was established on 11th April, 2001 in Kota. The institute was named as Resonance with the commitment to enhance the teaching to bring them in the frequency band of teacher so that resonance becomes a reality. In Fourteen years of its inception, the institute has risen beyond all the expectations in terms of volume and quality of results. The growth in number of student's enrollment in classroom coaching as well as selections in IIT-JEE is matchless as compared to any other institute in the country offering classroom courses for IIT-JEE coaching. The institute is having its own Study Centres which are offering Classroom Programmes for IIT-JEE at Kota, Agra, Ahmedabad, Ajmer, Allahabad, Aurangabad, Bhopal, Bhubaneshwar, Chandrapur, Delhi, Gwalior, Indore, Jabalpur, Jaipur, Jodhpur, Kolkata, Lucknow , Mumbai, Nagpur, Nanded, Nashik, Patna, Raipur, Rajkot, Ranchi, Sikar, Surat, Udaipur, Vadodara. The institute is also offering classroom courses for AIPMT/AIIMS and CA/CS , SCRA, NDA, CDS etc. coaching at selected study centres and Distance Learning Programmes through its DLP Division looking at the need of students who can not leave their native places for education. Resonance is also offering coaching to students of class V TO X through its PCCP Division and preparing students for competitive exams like NTSE, Olympiads etc.
						</p>
						<p>
							Every part of the Resonance system - be it the Academia, Student-Faculty Relation, Performance Monitoring, Orientation, Curriculum execution or other relevant areas - follow a set of do's and don'ts along with target based goals. This ensures that every student at Resonance experiences uniform attention and interaction with each faculty member along with setting of their individual goals and achievement.
						</p>
						<p>
							A team of India's finest 800+ faculty members are at the core of the Resonance experience. Around 28% of our faculty members are IlTians/ NITians for Pre-Engineering Division or Doctors from the top Medical Colleges of India for Medical Division; Most of our faculty members are CAs/CS/MBAs/Law Graduates for CLPD. Faculty Training & Development Programs are conducted frequently to sharpen, add and improve the delivery mechanism of our faculty.
						</p>
						<p>
							Trust is a successor of test; the hardwork put in behind every individual student and the passion of the entire Resonance team to see their students successful in life. We are proud of guiding more than 4 Lac+ students through our various available programs since 2001 upto 2016-17. This trust of students and parents in Resonance is evident through growing enrollments year after year.
						</p>
						<p>
							Resonance is a success story which started with a small team of around 10 members and now is a team of 1900+ members in a span of merely 15 years. This includes Technocrats, Engineers, Doctors, CAs, CSs, MBAs & Other professionals. The credibility of the organization is highly trusted, commitment of the entire team under able leadership of RKV Sir, leaves no stone unturned for the benefit of the students.
						</p>
						
					</div>
					<div class="post-row padding-top-5">
						<div class="post-row-header clearfix margin-bottom-15" id="booknow">
							<h3>Teaching Domains</h3>
						</div>
						<ul class="lp-teaching-categoires">
							<li>
							<a href="#portfolioModal1" class="portfolio-link lp-border-radius-5" data-toggle="modal">
								<span class="tick-icon">
									<!-- Checked icon by Icons8 -->
									<img class="icon icons8-Checked" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFLklEQVRoQ+1azXHbOBT+nm/2Zb0VREgDUSow1IF9DHWwXYG1FaxTQZIKohykHC1XIGwFtiuAXEHsS7wnv50HghRJgSQoMc5OJpzxjDwEQXzv53sfHkj4RS76RXDgN5CQJ0dze8QEDXZ/h0QYZuOYcQvCg/ufYPCMazNWt31FxM4e0V+txjNOiXDWdVEMrMAw2MMX806Zrs8Xx28NRM/tMYALAnRhwjsGZEEGjFXR4npmh9jDoXgKgCbmYxC9yj0mzxDebwuoMxD91Q7A+JwDYL5n0BR7mJp3atXFqg4ccEzEE4D+kGedIfZxYk5UGoaRVycgzgsCgsSq/MigS5Ooj5Hvqh2mr+whvmOSAfIhd1LNIRlXBzAaiJ7ZCyK4RTPjGgc462q1NsCyUHpyofnGv+fcjNVUfuuZlRz8AGAUIokoIHpmxQsumRn4qw8vNIHSc/uRgAtmvJVFC6EQY1kF1ynZ9dxOyFmCH5lpklmozbq73pdclJzzebSUcGbGezNWl6G5Gz0iOUHAVZMldl1wo2fS3BEQQwa+mETVUnwtEMdOz7hxlniBcAoB0jMr7xdmu+N96KacrAcyt0uhWElsM1ZSM170yvNS6P2AhgJCcqWuzgSBrEOKH3mfBn2zU5tFKnmpiwnPhFEITB2Q1Bs/IaSEZonw2TPkiUnUwtPvJRH+loJpEjWqGmMDSE51zPfL8etBm/X6vF9hqLyGOCCuxvBKFEDIK5tA5nZKwGkT1fW5+GyuCrkEGUrPbOaVjfsbQEZzy86tBNVVO20L0EsUR7MA/lkmqihE82kFLDEsMx5wAFXM3RKQQt24WyYq30tsu8DY5/TcXhEgzNhKs6O5lT3Mm2p4lYGsXffJJGoSu5Bdxq3lDz8y0bAtCgrypVTlS0BGcyuC7YiBnC12WWTbs2uGcvLH0WzsM9X6VvWIq6SZWGubdJf7MUIwWO3XArKUS1WPuERfJipaFUtydhWSsUIwCCSV+t8k4c1Y/ZmN2RpIqXAxSpzfKgSfcEPAoE0I1s2TMWvR4FsD8dV2XYUZIvE/tYVbUQhuy4y9AwmAmZqxOq8DExKCbcBD92OApBztd2axL6mEWRBMVpX9Bi2KoYI5MrNDItxIzSl6tDf6TVmIF04LMUpgSkBr1Gu00dabvXrWKmiZrQqisBERGwfGt3XwHQNvQWlaRJNCbXiu9/P1BTHjdmlvmrF6G2ul4rgSGGmTwgGRXWbjVjX2XRlZNEoUmawP0ZiCgbRxsrZOL7vMTDRKni2T19KxzK8fJuMLPSq07bc7eCNexufhBaxMolTsS+qqMP7FYZsQjH2HntlvLkwDhBGUIgXx+MObcdEg8v5aeL/S2HwIbWBiX9znOL/xsnXekHfVisOCVxYmUSd9LqzrXNnGq6k11digI+ZbXxN+WoiVWkMNG6//d8u0pjUU8mjrviOziMsX6XP5Nn/X8Og6vtLfao2IViBO4foWkfzmSLnedeEVdbA+i4lUBFFAPBh/vODOSBbYx3nfrVTHTk/uWM/1mrt0OqOBeDDHBJ56hSuhdhmzmYrxjpyIyXyFY72zrF0a83wnIA5M2iQTHXXkrbZCqqvkiLnbYagcXQCnYJzJ1teH7jX2MOk6V2cgmXV8M096Xw6QX4R8FGCIYRi43zjMFDEJvMo+Kih+UCBNDCZcvtjxdNXN7oOB1KKnMSFQHuNOhhfi0W0BZPNt7ZHQov1XEJrkMw64DwOcjC9cdwAeOP3awey6+OLEvQLp7pH+nvgNpD9b9jPTfwQDNWCupe5qAAAAAElFTkSuQmCC" alt="checked">
								<br>
								IIT-JEE <br> Book Now
								</span>
								</a>
							</li>
							<li>
							<a href="#portfolioModal2" class="portfolio-link lp-border-radius-5" data-toggle="modal">
								<span class="tick-icon">
									<!-- Checked icon by Icons8 -->
									<img class="icon icons8-Checked" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFLklEQVRoQ+1azXHbOBT+nm/2Zb0VREgDUSow1IF9DHWwXYG1FaxTQZIKohykHC1XIGwFtiuAXEHsS7wnv50HghRJgSQoMc5OJpzxjDwEQXzv53sfHkj4RS76RXDgN5CQJ0dze8QEDXZ/h0QYZuOYcQvCg/ufYPCMazNWt31FxM4e0V+txjNOiXDWdVEMrMAw2MMX806Zrs8Xx28NRM/tMYALAnRhwjsGZEEGjFXR4npmh9jDoXgKgCbmYxC9yj0mzxDebwuoMxD91Q7A+JwDYL5n0BR7mJp3atXFqg4ccEzEE4D+kGedIfZxYk5UGoaRVycgzgsCgsSq/MigS5Ooj5Hvqh2mr+whvmOSAfIhd1LNIRlXBzAaiJ7ZCyK4RTPjGgc462q1NsCyUHpyofnGv+fcjNVUfuuZlRz8AGAUIokoIHpmxQsumRn4qw8vNIHSc/uRgAtmvJVFC6EQY1kF1ynZ9dxOyFmCH5lpklmozbq73pdclJzzebSUcGbGezNWl6G5Gz0iOUHAVZMldl1wo2fS3BEQQwa+mETVUnwtEMdOz7hxlniBcAoB0jMr7xdmu+N96KacrAcyt0uhWElsM1ZSM170yvNS6P2AhgJCcqWuzgSBrEOKH3mfBn2zU5tFKnmpiwnPhFEITB2Q1Bs/IaSEZonw2TPkiUnUwtPvJRH+loJpEjWqGmMDSE51zPfL8etBm/X6vF9hqLyGOCCuxvBKFEDIK5tA5nZKwGkT1fW5+GyuCrkEGUrPbOaVjfsbQEZzy86tBNVVO20L0EsUR7MA/lkmqihE82kFLDEsMx5wAFXM3RKQQt24WyYq30tsu8DY5/TcXhEgzNhKs6O5lT3Mm2p4lYGsXffJJGoSu5Bdxq3lDz8y0bAtCgrypVTlS0BGcyuC7YiBnC12WWTbs2uGcvLH0WzsM9X6VvWIq6SZWGubdJf7MUIwWO3XArKUS1WPuERfJipaFUtydhWSsUIwCCSV+t8k4c1Y/ZmN2RpIqXAxSpzfKgSfcEPAoE0I1s2TMWvR4FsD8dV2XYUZIvE/tYVbUQhuy4y9AwmAmZqxOq8DExKCbcBD92OApBztd2axL6mEWRBMVpX9Bi2KoYI5MrNDItxIzSl6tDf6TVmIF04LMUpgSkBr1Gu00dabvXrWKmiZrQqisBERGwfGt3XwHQNvQWlaRJNCbXiu9/P1BTHjdmlvmrF6G2ul4rgSGGmTwgGRXWbjVjX2XRlZNEoUmawP0ZiCgbRxsrZOL7vMTDRKni2T19KxzK8fJuMLPSq07bc7eCNexufhBaxMolTsS+qqMP7FYZsQjH2HntlvLkwDhBGUIgXx+MObcdEg8v5aeL/S2HwIbWBiX9znOL/xsnXekHfVisOCVxYmUSd9LqzrXNnGq6k11digI+ZbXxN+WoiVWkMNG6//d8u0pjUU8mjrviOziMsX6XP5Nn/X8Og6vtLfao2IViBO4foWkfzmSLnedeEVdbA+i4lUBFFAPBh/vODOSBbYx3nfrVTHTk/uWM/1mrt0OqOBeDDHBJ56hSuhdhmzmYrxjpyIyXyFY72zrF0a83wnIA5M2iQTHXXkrbZCqqvkiLnbYagcXQCnYJzJ1teH7jX2MOk6V2cgmXV8M096Xw6QX4R8FGCIYRi43zjMFDEJvMo+Kih+UCBNDCZcvtjxdNXN7oOB1KKnMSFQHuNOhhfi0W0BZPNt7ZHQov1XEJrkMw64DwOcjC9cdwAeOP3awey6+OLEvQLp7pH+nvgNpD9b9jPTfwQDNWCupe5qAAAAAElFTkSuQmCC" alt="checked">
								<br>
								AIEEE <br> Book Now
								</span>
								</a>
							</li>
							<li>
							<a href="#portfolioModal3" class="portfolio-link lp-border-radius-5" data-toggle="modal">
								<span class="tick-icon">
									<!-- Checked icon by Icons8 -->
									<img class="icon icons8-Checked" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFLklEQVRoQ+1azXHbOBT+nm/2Zb0VREgDUSow1IF9DHWwXYG1FaxTQZIKohykHC1XIGwFtiuAXEHsS7wnv50HghRJgSQoMc5OJpzxjDwEQXzv53sfHkj4RS76RXDgN5CQJ0dze8QEDXZ/h0QYZuOYcQvCg/ufYPCMazNWt31FxM4e0V+txjNOiXDWdVEMrMAw2MMX806Zrs8Xx28NRM/tMYALAnRhwjsGZEEGjFXR4npmh9jDoXgKgCbmYxC9yj0mzxDebwuoMxD91Q7A+JwDYL5n0BR7mJp3atXFqg4ccEzEE4D+kGedIfZxYk5UGoaRVycgzgsCgsSq/MigS5Ooj5Hvqh2mr+whvmOSAfIhd1LNIRlXBzAaiJ7ZCyK4RTPjGgc462q1NsCyUHpyofnGv+fcjNVUfuuZlRz8AGAUIokoIHpmxQsumRn4qw8vNIHSc/uRgAtmvJVFC6EQY1kF1ynZ9dxOyFmCH5lpklmozbq73pdclJzzebSUcGbGezNWl6G5Gz0iOUHAVZMldl1wo2fS3BEQQwa+mETVUnwtEMdOz7hxlniBcAoB0jMr7xdmu+N96KacrAcyt0uhWElsM1ZSM170yvNS6P2AhgJCcqWuzgSBrEOKH3mfBn2zU5tFKnmpiwnPhFEITB2Q1Bs/IaSEZonw2TPkiUnUwtPvJRH+loJpEjWqGmMDSE51zPfL8etBm/X6vF9hqLyGOCCuxvBKFEDIK5tA5nZKwGkT1fW5+GyuCrkEGUrPbOaVjfsbQEZzy86tBNVVO20L0EsUR7MA/lkmqihE82kFLDEsMx5wAFXM3RKQQt24WyYq30tsu8DY5/TcXhEgzNhKs6O5lT3Mm2p4lYGsXffJJGoSu5Bdxq3lDz8y0bAtCgrypVTlS0BGcyuC7YiBnC12WWTbs2uGcvLH0WzsM9X6VvWIq6SZWGubdJf7MUIwWO3XArKUS1WPuERfJipaFUtydhWSsUIwCCSV+t8k4c1Y/ZmN2RpIqXAxSpzfKgSfcEPAoE0I1s2TMWvR4FsD8dV2XYUZIvE/tYVbUQhuy4y9AwmAmZqxOq8DExKCbcBD92OApBztd2axL6mEWRBMVpX9Bi2KoYI5MrNDItxIzSl6tDf6TVmIF04LMUpgSkBr1Gu00dabvXrWKmiZrQqisBERGwfGt3XwHQNvQWlaRJNCbXiu9/P1BTHjdmlvmrF6G2ul4rgSGGmTwgGRXWbjVjX2XRlZNEoUmawP0ZiCgbRxsrZOL7vMTDRKni2T19KxzK8fJuMLPSq07bc7eCNexufhBaxMolTsS+qqMP7FYZsQjH2HntlvLkwDhBGUIgXx+MObcdEg8v5aeL/S2HwIbWBiX9znOL/xsnXekHfVisOCVxYmUSd9LqzrXNnGq6k11digI+ZbXxN+WoiVWkMNG6//d8u0pjUU8mjrviOziMsX6XP5Nn/X8Og6vtLfao2IViBO4foWkfzmSLnedeEVdbA+i4lUBFFAPBh/vODOSBbYx3nfrVTHTk/uWM/1mrt0OqOBeDDHBJ56hSuhdhmzmYrxjpyIyXyFY72zrF0a83wnIA5M2iQTHXXkrbZCqqvkiLnbYagcXQCnYJzJ1teH7jX2MOk6V2cgmXV8M096Xw6QX4R8FGCIYRi43zjMFDEJvMo+Kih+UCBNDCZcvtjxdNXN7oOB1KKnMSFQHuNOhhfi0W0BZPNt7ZHQov1XEJrkMw64DwOcjC9cdwAeOP3awey6+OLEvQLp7pH+nvgNpD9b9jPTfwQDNWCupe5qAAAAAElFTkSuQmCC" alt="checked">
								<br>
								NEET(AIPMT) <br> Book Now
								</span>
								</a>
							</li><br>
							<li>
							<a href="#portfolioModal4" class="portfolio-link lp-border-radius-5" data-toggle="modal">
								<span class="tick-icon">
									<!-- Checked icon by Icons8 -->
									<img class="icon icons8-Checked" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFLklEQVRoQ+1azXHbOBT+nm/2Zb0VREgDUSow1IF9DHWwXYG1FaxTQZIKohykHC1XIGwFtiuAXEHsS7wnv50HghRJgSQoMc5OJpzxjDwEQXzv53sfHkj4RS76RXDgN5CQJ0dze8QEDXZ/h0QYZuOYcQvCg/ufYPCMazNWt31FxM4e0V+txjNOiXDWdVEMrMAw2MMX806Zrs8Xx28NRM/tMYALAnRhwjsGZEEGjFXR4npmh9jDoXgKgCbmYxC9yj0mzxDebwuoMxD91Q7A+JwDYL5n0BR7mJp3atXFqg4ccEzEE4D+kGedIfZxYk5UGoaRVycgzgsCgsSq/MigS5Ooj5Hvqh2mr+whvmOSAfIhd1LNIRlXBzAaiJ7ZCyK4RTPjGgc462q1NsCyUHpyofnGv+fcjNVUfuuZlRz8AGAUIokoIHpmxQsumRn4qw8vNIHSc/uRgAtmvJVFC6EQY1kF1ynZ9dxOyFmCH5lpklmozbq73pdclJzzebSUcGbGezNWl6G5Gz0iOUHAVZMldl1wo2fS3BEQQwa+mETVUnwtEMdOz7hxlniBcAoB0jMr7xdmu+N96KacrAcyt0uhWElsM1ZSM170yvNS6P2AhgJCcqWuzgSBrEOKH3mfBn2zU5tFKnmpiwnPhFEITB2Q1Bs/IaSEZonw2TPkiUnUwtPvJRH+loJpEjWqGmMDSE51zPfL8etBm/X6vF9hqLyGOCCuxvBKFEDIK5tA5nZKwGkT1fW5+GyuCrkEGUrPbOaVjfsbQEZzy86tBNVVO20L0EsUR7MA/lkmqihE82kFLDEsMx5wAFXM3RKQQt24WyYq30tsu8DY5/TcXhEgzNhKs6O5lT3Mm2p4lYGsXffJJGoSu5Bdxq3lDz8y0bAtCgrypVTlS0BGcyuC7YiBnC12WWTbs2uGcvLH0WzsM9X6VvWIq6SZWGubdJf7MUIwWO3XArKUS1WPuERfJipaFUtydhWSsUIwCCSV+t8k4c1Y/ZmN2RpIqXAxSpzfKgSfcEPAoE0I1s2TMWvR4FsD8dV2XYUZIvE/tYVbUQhuy4y9AwmAmZqxOq8DExKCbcBD92OApBztd2axL6mEWRBMVpX9Bi2KoYI5MrNDItxIzSl6tDf6TVmIF04LMUpgSkBr1Gu00dabvXrWKmiZrQqisBERGwfGt3XwHQNvQWlaRJNCbXiu9/P1BTHjdmlvmrF6G2ul4rgSGGmTwgGRXWbjVjX2XRlZNEoUmawP0ZiCgbRxsrZOL7vMTDRKni2T19KxzK8fJuMLPSq07bc7eCNexufhBaxMolTsS+qqMP7FYZsQjH2HntlvLkwDhBGUIgXx+MObcdEg8v5aeL/S2HwIbWBiX9znOL/xsnXekHfVisOCVxYmUSd9LqzrXNnGq6k11digI+ZbXxN+WoiVWkMNG6//d8u0pjUU8mjrviOziMsX6XP5Nn/X8Og6vtLfao2IViBO4foWkfzmSLnedeEVdbA+i4lUBFFAPBh/vODOSBbYx3nfrVTHTk/uWM/1mrt0OqOBeDDHBJ56hSuhdhmzmYrxjpyIyXyFY72zrF0a83wnIA5M2iQTHXXkrbZCqqvkiLnbYagcXQCnYJzJ1teH7jX2MOk6V2cgmXV8M096Xw6QX4R8FGCIYRi43zjMFDEJvMo+Kih+UCBNDCZcvtjxdNXN7oOB1KKnMSFQHuNOhhfi0W0BZPNt7ZHQov1XEJrkMw64DwOcjC9cdwAeOP3awey6+OLEvQLp7pH+nvgNpD9b9jPTfwQDNWCupe5qAAAAAElFTkSuQmCC" alt="checked">
								<br>
								AIIMS <br> Book Now
								</span>
								</a>
							</li>
							<li>
							<a href="#portfolioModal5" class="portfolio-link lp-border-radius-5" data-toggle="modal">
								<span class="tick-icon">
									<!-- Checked icon by Icons8 -->
									<img class="icon icons8-Checked" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFLklEQVRoQ+1azXHbOBT+nm/2Zb0VREgDUSow1IF9DHWwXYG1FaxTQZIKohykHC1XIGwFtiuAXEHsS7wnv50HghRJgSQoMc5OJpzxjDwEQXzv53sfHkj4RS76RXDgN5CQJ0dze8QEDXZ/h0QYZuOYcQvCg/ufYPCMazNWt31FxM4e0V+txjNOiXDWdVEMrMAw2MMX806Zrs8Xx28NRM/tMYALAnRhwjsGZEEGjFXR4npmh9jDoXgKgCbmYxC9yj0mzxDebwuoMxD91Q7A+JwDYL5n0BR7mJp3atXFqg4ccEzEE4D+kGedIfZxYk5UGoaRVycgzgsCgsSq/MigS5Ooj5Hvqh2mr+whvmOSAfIhd1LNIRlXBzAaiJ7ZCyK4RTPjGgc462q1NsCyUHpyofnGv+fcjNVUfuuZlRz8AGAUIokoIHpmxQsumRn4qw8vNIHSc/uRgAtmvJVFC6EQY1kF1ynZ9dxOyFmCH5lpklmozbq73pdclJzzebSUcGbGezNWl6G5Gz0iOUHAVZMldl1wo2fS3BEQQwa+mETVUnwtEMdOz7hxlniBcAoB0jMr7xdmu+N96KacrAcyt0uhWElsM1ZSM170yvNS6P2AhgJCcqWuzgSBrEOKH3mfBn2zU5tFKnmpiwnPhFEITB2Q1Bs/IaSEZonw2TPkiUnUwtPvJRH+loJpEjWqGmMDSE51zPfL8etBm/X6vF9hqLyGOCCuxvBKFEDIK5tA5nZKwGkT1fW5+GyuCrkEGUrPbOaVjfsbQEZzy86tBNVVO20L0EsUR7MA/lkmqihE82kFLDEsMx5wAFXM3RKQQt24WyYq30tsu8DY5/TcXhEgzNhKs6O5lT3Mm2p4lYGsXffJJGoSu5Bdxq3lDz8y0bAtCgrypVTlS0BGcyuC7YiBnC12WWTbs2uGcvLH0WzsM9X6VvWIq6SZWGubdJf7MUIwWO3XArKUS1WPuERfJipaFUtydhWSsUIwCCSV+t8k4c1Y/ZmN2RpIqXAxSpzfKgSfcEPAoE0I1s2TMWvR4FsD8dV2XYUZIvE/tYVbUQhuy4y9AwmAmZqxOq8DExKCbcBD92OApBztd2axL6mEWRBMVpX9Bi2KoYI5MrNDItxIzSl6tDf6TVmIF04LMUpgSkBr1Gu00dabvXrWKmiZrQqisBERGwfGt3XwHQNvQWlaRJNCbXiu9/P1BTHjdmlvmrF6G2ul4rgSGGmTwgGRXWbjVjX2XRlZNEoUmawP0ZiCgbRxsrZOL7vMTDRKni2T19KxzK8fJuMLPSq07bc7eCNexufhBaxMolTsS+qqMP7FYZsQjH2HntlvLkwDhBGUIgXx+MObcdEg8v5aeL/S2HwIbWBiX9znOL/xsnXekHfVisOCVxYmUSd9LqzrXNnGq6k11digI+ZbXxN+WoiVWkMNG6//d8u0pjUU8mjrviOziMsX6XP5Nn/X8Og6vtLfao2IViBO4foWkfzmSLnedeEVdbA+i4lUBFFAPBh/vODOSBbYx3nfrVTHTk/uWM/1mrt0OqOBeDDHBJ56hSuhdhmzmYrxjpyIyXyFY72zrF0a83wnIA5M2iQTHXXkrbZCqqvkiLnbYagcXQCnYJzJ1teH7jX2MOk6V2cgmXV8M096Xw6QX4R8FGCIYRi43zjMFDEJvMo+Kih+UCBNDCZcvtjxdNXN7oOB1KKnMSFQHuNOhhfi0W0BZPNt7ZHQov1XEJrkMw64DwOcjC9cdwAeOP3awey6+OLEvQLp7pH+nvgNpD9b9jPTfwQDNWCupe5qAAAAAElFTkSuQmCC" alt="checked">
								<br>
								NTSE <br> Book Now
								</span>
								</a>
							</li>
							<li>
							<a href="#portfolioModal6" class="portfolio-link lp-border-radius-5" data-toggle="modal">
								<span class="tick-icon">
									<!-- Checked icon by Icons8 -->
									<img class="icon icons8-Checked" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFLklEQVRoQ+1azXHbOBT+nm/2Zb0VREgDUSow1IF9DHWwXYG1FaxTQZIKohykHC1XIGwFtiuAXEHsS7wnv50HghRJgSQoMc5OJpzxjDwEQXzv53sfHkj4RS76RXDgN5CQJ0dze8QEDXZ/h0QYZuOYcQvCg/ufYPCMazNWt31FxM4e0V+txjNOiXDWdVEMrMAw2MMX806Zrs8Xx28NRM/tMYALAnRhwjsGZEEGjFXR4npmh9jDoXgKgCbmYxC9yj0mzxDebwuoMxD91Q7A+JwDYL5n0BR7mJp3atXFqg4ccEzEE4D+kGedIfZxYk5UGoaRVycgzgsCgsSq/MigS5Ooj5Hvqh2mr+whvmOSAfIhd1LNIRlXBzAaiJ7ZCyK4RTPjGgc462q1NsCyUHpyofnGv+fcjNVUfuuZlRz8AGAUIokoIHpmxQsumRn4qw8vNIHSc/uRgAtmvJVFC6EQY1kF1ynZ9dxOyFmCH5lpklmozbq73pdclJzzebSUcGbGezNWl6G5Gz0iOUHAVZMldl1wo2fS3BEQQwa+mETVUnwtEMdOz7hxlniBcAoB0jMr7xdmu+N96KacrAcyt0uhWElsM1ZSM170yvNS6P2AhgJCcqWuzgSBrEOKH3mfBn2zU5tFKnmpiwnPhFEITB2Q1Bs/IaSEZonw2TPkiUnUwtPvJRH+loJpEjWqGmMDSE51zPfL8etBm/X6vF9hqLyGOCCuxvBKFEDIK5tA5nZKwGkT1fW5+GyuCrkEGUrPbOaVjfsbQEZzy86tBNVVO20L0EsUR7MA/lkmqihE82kFLDEsMx5wAFXM3RKQQt24WyYq30tsu8DY5/TcXhEgzNhKs6O5lT3Mm2p4lYGsXffJJGoSu5Bdxq3lDz8y0bAtCgrypVTlS0BGcyuC7YiBnC12WWTbs2uGcvLH0WzsM9X6VvWIq6SZWGubdJf7MUIwWO3XArKUS1WPuERfJipaFUtydhWSsUIwCCSV+t8k4c1Y/ZmN2RpIqXAxSpzfKgSfcEPAoE0I1s2TMWvR4FsD8dV2XYUZIvE/tYVbUQhuy4y9AwmAmZqxOq8DExKCbcBD92OApBztd2axL6mEWRBMVpX9Bi2KoYI5MrNDItxIzSl6tDf6TVmIF04LMUpgSkBr1Gu00dabvXrWKmiZrQqisBERGwfGt3XwHQNvQWlaRJNCbXiu9/P1BTHjdmlvmrF6G2ul4rgSGGmTwgGRXWbjVjX2XRlZNEoUmawP0ZiCgbRxsrZOL7vMTDRKni2T19KxzK8fJuMLPSq07bc7eCNexufhBaxMolTsS+qqMP7FYZsQjH2HntlvLkwDhBGUIgXx+MObcdEg8v5aeL/S2HwIbWBiX9znOL/xsnXekHfVisOCVxYmUSd9LqzrXNnGq6k11digI+ZbXxN+WoiVWkMNG6//d8u0pjUU8mjrviOziMsX6XP5Nn/X8Og6vtLfao2IViBO4foWkfzmSLnedeEVdbA+i4lUBFFAPBh/vODOSBbYx3nfrVTHTk/uWM/1mrt0OqOBeDDHBJ56hSuhdhmzmYrxjpyIyXyFY72zrF0a83wnIA5M2iQTHXXkrbZCqqvkiLnbYagcXQCnYJzJ1teH7jX2MOk6V2cgmXV8M096Xw6QX4R8FGCIYRi43zjMFDEJvMo+Kih+UCBNDCZcvtjxdNXN7oOB1KKnMSFQHuNOhhfi0W0BZPNt7ZHQov1XEJrkMw64DwOcjC9cdwAeOP3awey6+OLEvQLp7pH+nvgNpD9b9jPTfwQDNWCupe5qAAAAAElFTkSuQmCC" alt="checked">
								<br>
								Olympiads <br> Book Now
								</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="post-row   padding-top-15 clearfix">
					</div>
					<div class="comments-container padding-left-40 padding-right-40 clearfix margin-top-50">
						<div class="comments-header clearfix">
							<h3>2 Reviews</h3>
						</div><!--comments-header-->
						<div class="comments-posts">
							<div class="comments-box">
								<div class="comments-thumb">
									<img src="../../images/comments-thumb-1.png" alt="comments-thumb-1" />
								</div>
								<div class="comments-content">
									<div class="comments-meta-box">
										<div class="comments-author text-left">
											<div class="comments-name">
												PRIYADARSHAN SINGH
											</div>
											<div class="comments-date">
												AIR-2865 in AIIMS 2015
												<div class="post-reviews">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
										</div>
										<div class="comments-replay text-right">
											<a href="#submitreview">Reply</a>
										</div>
									</div>
									<div class="comments-description">
										<p>
											Resonance is the just coaching institute that I have attended and thanks to them, I have no need to look back. The education Material provided is very good with lots of practice problems.
											The teaching faculty has really helped in clearing my doubts and strengthening my concepts. Not only that, the study centre provided me with a quiet and peaceful place to study credit goes to Resonance and my parents. Now have supported me though each and every step. Thank you.
										</p>
									</div>
								</div>
							</div><!--../comments-box-->
							<div class="comments-box">
								<div class="comments-thumb">
									<img src="../../images/comments-thumb-2.png" alt="comments-thumb-2" />
								</div>
								<div class="comments-content">
									<div class="comments-meta-box">
										<div class="comments-author text-left">
											<div class="comments-name">
												SANJU KUMARI
											</div>
											<div class="comments-date">
												AIR-659 in AIIMS 2015
												<div class="post-reviews">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
										</div>
										<div class="comments-replay text-right">
											<a href="#submitreview">Reply</a>
										</div>
									</div>
									<div class="comments-description">
										<p>
											I Sanju Kumari, would like to thank my parents for being my first mentors and I own large part of my success to Resonance faculties, there guidance, pain & effort they took to resolve my daily doubts.The study material and regular Daily practice problem that bought the best out of me.
										</p>
									</div>
								</div>
							</div><!--../comments-box-->
						</div><!--../comments-posts-->
					</div>
					<div class="comments-form padding-left-40 padding-right-40 padding-bottom-40" id="submitreview">
						<div class="comments-header lp-border-bottom clearfix">
							<h3>Rate us and Write a Review</h3>
						</div><!--comments-header-->.
						<div class="comments-inner-container margin-top-10">
							<div class="form-group margin-bottom-40">
								<p class="padding-bottom-15">Your Rating for this listing</p>
								<div class="list-style-none form-review-stars">
									<input type="hidden" class="rating-tooltip" data-filled="fa fa-star fa-2x" data-empty="fa fa-star-o fa-2x" />
								</div>
							</div>
							<div class="col-md-6 padding-left-0">
								<div class="form-group clearfix">
									<label for="inputName">Name</label>
									<input type="text" class="form-control" id="inputName" >
								</div>
							</div>
							<div class="col-md-6 padding-right-0">
							
								<div class="form-group clearfix">
									<label for="inputEmail">Email</label>
									<input type="email" class="form-control" id="inputEmail" >
								</div>
							</div>
							<div class="form-group">
								<label for="inputComments">Review</label>
								<textarea class="form-control" rows="8" id="inputComments"></textarea>
							</div>
							<div class="form-group margin-bottom-0">
								<input type="submit" value="Submit Review" class="lp-review-btn btn-second-hover"  />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="sidebar-post">
						<div class="widget-box  widget-bg-color post-author-box lp-border-radius-5">
							<div class="user-info">
								<div class="user-thumb">
									<img src="../../images/user-thumb-94x94.png" alt="user-thumb">
								</div>
								<div class="user-text">
									<h5 class="user-name margin-top-0"><a href="#">Resonance</a></h5>
									<label class="user-position md-trigger quickformtrigger2" data-modal="modal-6">Quick Connect</label>
									<label class="user-position quickformtrigger">Quick Connect</label>
									
									<ul class="social-icons post-socials">
										<li><a href="#"><!-- Facebook icon by Icons8 -->
											<img class="icon icons8-Facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADEklEQVRoQ+1a7XHbMAwFNEE6QZIJmk5Qd4N4gmaDOAtQEBaoM0HTCepOEGeCuhPU3aBdgOiBJX10LFmMYsl0T7zLj9i0xAc8fEgPCA3LGPMREScAcOX/mrYO8fkKAFYismDmb3U3xOcfEtG1iHwCgIshTtjhHmtEvCOiRfzbLSBlWSqAmW4QkV9FUcwBYElEapGjLSJSVkystTNEPPcHmVdVdRcOtQFijJkj4q1+4REriOwWEc08Y9TY98zsDO+AeDp99SDeHdsDbdZTD4nId3/eqdLMASnL8qfGRM6eqInl4Jl1VVWXSEQ3IvJZY4KZcw3wWicZYzTwzxFxisaYB0TUVKuZIMu4aKJaiBcR+YJlWSrXrhAx+9iooVeIlZUCEd1QVdVOTWkLuhy+D+c/ChDfNVz7jiGOyyUArEVkVRTFU0r2PAoQnzY1zacmFZeR9nl+cCAexCMAnInIU1EUDwCwIKLf4aBEpL3dhbV2ogkohfKDAwlJRTMMM9+0xVdq7A4KJHQOL6lVWQLpUqtyBbJExPeI+IGINDNtFhFpzJQAoFlsJwm0lYVBqbXPusFbTTFzMkA2Fq3xVltC8A2vK+iDFMR9HkmNhSZQ2VAreyDhgLEl6/hety/+DSK+iYvmc8/07pFDATl6sL+GMtqqiMijtjLMrG1L4xrMI20WrTuhMYYQsUxpZ3IH4p5aRaRiZjpljzR2AicZ7Ih4SUTrLDzSNf2KyB9mPmur7r3HSHyAsbK3uePfy8Wx10qw0/aWkVoJJhuplWCknS0jtRKsNlIrwUgjtV5jpP/n5YMxZoWIb/sUevrKWkEUFZEfg0hvPQJxgqiT3iJpulWL6MLh+CXavrcoXR6JIzV66uS2SB3tRRDtwyOREOrU6EEGBg4NpHFgwHtlM8IhIjNmvu9Kpabn6kNQyxhzi4hORt8Z4Qg3judRvCg5TxUlU56ruwJRD1hrVZbQuRMnPcQg9P/aMSdrrXonTOEcyjEHuY6fWprtHXOK76TZzFrrJGStMwc5RceLaJ3QwbOiKFQ83ZrTCpf8CzG2NErUDo89AAAAAElFTkSuQmCC" alt="facebook"></a></li>
										<li><a href="#"><!-- Google Plus icon by Icons8 -->
											<img class="icon icons8-Google-Plus" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEh0lEQVRoQ+1a4VnUQBDdWQpQKhAqECsQKxAqACsQC2Azuw2oFXhUIFagViBWAFQAFkDG762z+fZCcknOSy5+n/kDHLlk3s7szHszS6blYuYDETkxxhwYYw7b7pvo82/GmCsiumDmq6Z3Uv1DBfB+Bsa3rdE3InpXB7QEhJmPROSTMeapiPwyxiystZfMjBXZ2sXMh2VZHhljTonoiTHmnojeMPNlMqoCwsynCsKIyIW19oyZ77dmfcOLmflpWZYfiAghb4joOIGJQJh5T0R+wBOKdDEnAA3hnxYdnnnBzDcRSFEUX7En4IkQwumcQSTbnHOXRPTaGHPpvT8m9cY19oS1dm9u4bQiqyLMbrBniGifnHOIubci8jGEcPYveCPzSmU7gCCdvSSiV9vOTkMXEdlMRL6KyHcqiuIOm3zoQ2Z2/z2AyMyMWsucCoj3/lGVX+uJE38pOeI/kIkXvvV1/z0yF08kO/7aI86510QEOrOnmqURI3K8tZbHqlFrA9Ei9EkpzQdjzE2NYgMQRNA70O02IbQpz64FJFF9rHIIYUk1QpCVZQmWAL2Aa+G9f7Mpg9ueMxhIIpeqAxrpDDOfiQjUZbymoD2DgWS02awqns45MNJnACIiX0IIUHajXYOB5FSmA0hkpGr5jfd+fzQUf7RUpFi9KntimVnI7LbpFtX9n9O9Y1OfvwVSaeX6auegm5LCpr0zCAhenofWKklcA+JDCNzH+DoL7+vJwUCcc4vUvdCMBNH/qFmWpehB0nkyINqKiRpZVxhFD2m4ahnhHnRjRGTXWns4pBhOBgTGo5aUZYnuxXMFAxALfGatjQ00EbnF72jR9AmpdM+kQNJLkZnKskRlR18YvbAEDEWwMeS6QG0FSG7UOul2XXndlAAGb/a2Fc1brZoE0GAGmWy95goE+wYbPyUBAFhJGGcH5Pz8/CWsttbCA9gv+fUoq7Vt7K79s4olrBVamrVOiAgZCoOgW+gRfRF+HtU80wqmbvxkm905VxBRrNIi4q21i3qKVU2CwlllMdzbp7pPAqQoCgx/Ype+K71q4YTAqmqN9363K3xGB1IbAPVqdCsYhFXUJeiWdxXI0YEURXGtDYZBii9fgC4v1kkp/t44acxXaoh0zTrlv0IIozXJe2ct5xzGW7FG9N24ysuifh97ClYBSYa2ubJG3wEKjLdx1p1xMbBgzC32x5yCKdu+Q2uqc9DTQN/vRYSttRjeP5r6akjBEwAxiMp3Zbb6/5cGPX1Gb1of0FSIlVwvgLgSkTiDJyJU9th1nGq8nduOYShejNE0wgZpsnW2roN71JODWtFDhb+y1gIUDhgM0iJDPaF7EOGLjAoZ8SIOd9IcsYvsrfPCsb6TinRqcFQHBhKDRfyHEPxYBmziuYkuaf/5oDowoK7COZTUjwJfgq6Y3REObckmurR8hCNLm5CwABEPriQ9vrOz83NboJA1Hx4enqeeQDrwY609bTxUk4GBUAKYPENtIiI28gydtwDEUkJpneRqyo0ZSrNUrgA3YlSfh+hxKxRgZEVIh8Zi/BvU1cKW0t95DwAAAABJRU5ErkJggg==" alt="google-plus"></a></li>
										<li><a href="#"><!-- LinkedIn icon by Icons8 -->
											<img class="icon icons8-LinkedIn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEBUlEQVRoQ+1a7VEbMRDVqgHoAKgAUwFOBTEVBCoAGtCt1EBMBZgKMBUEKohTAaSCkAa0mXeRPPL5PmQP3MGMb4Y/Rnfa1dt9+yVSDY8x5hsRjZVSo/DXtLSP3xdKqYWIPDrn7uo2pOqPzDwRke9KqcM+JNxijxciumbmefruiiJFUUCBKywQkV9a65lS6pGZcSKDPcwMqxh778+J6DgIMrXWXkehlooYY6ZEdCkif7XWzMzTwSRv2ZiZr7z3TER7InLjnCsPvlQkmNN9UGI8NAJdBwiERORnqQDRGcysVKQoimf4RLC9D4lEjS9fBV9+sdYeETOfi8gtfMI5B1v8NI8xZgGfASpkjJkREagWTPAp0IgnDX8BKiJyR0VRwNZGRHTS5BshpsCpImLg9GkTp/cFaeIrCygi2NhauxZTgv/cKqXOG4SbWWsv+hK8bp8of6siCXSgZCASg9DEew+63iOiC2ZGvBnkyVIkMbuS4lJJI0kgdbDWngyixX/GLS2qFZE2s2PmfRH502aWfSiXpYgx5jWYzxEzv1QQORSRZwRR59x+H0Jv7SORmuEb1tqz9ENFUdwrpZBg3jnnmsjg3fXLQoSZD733CDp7SikgsnR2ZAIhpRlV0Xp36ZMNshQJedjIez8nooNUQBH5rbWeDJ2XZSuSRFGk0Si0lNZ6UWWxPlGomHgWa5VRv0PI0n8iVeesZeaxiHxFjZF8/zVUgXOt9UOuuWYhEhd1nTaygty1wc8mHd98DSmQ7dp7I0Va0pdlepOR6pRr8YAklFJTrfU8+hjiUqgCJ0hiw1IQzRdmBlq1z2CKhBIaxVujcEgGvfePgS3XqH8bH+lKKLMRQe0QiKJViYRcltTfls/1jkiXrdf9P8nnyipw68iea/epszf5UxTCGFMQETIBtJteRGSmtb5pMjVjDNo/B7E2ryozCCItFN3o1MYYdEyKtGMyqI8ktc0yIwgpELKGYxGxzjmunniIOT9E5Mk5VwbkQRVJapuVQiy2oprqmqRcqPWT3k2rzd828cWPgEgjle8UeYtSFxCnJ/kWp5qTCu1MCyeQc1I7RCom2paG1B3ojn7rompOrrWLIx2mtzOtnWm1jC/egroxsYrjq7VBT25nZJMuShuFdlWR1XfjoAd9gNbRmzEGDYDTtg1E5ME5N9lkbfV72767Mnr7KHOOLjQaAmUcG56V47akLv40A9G04nTOHa5cGFBKYR6ChtigVza60Gm8MBBQKa9wQBkRYefcTdcHh/i/MeaSiMox+toVjqRVE5XBTxhBo1XzNDRCofN4GtpIZVO92lWpveYUJrYr85AhTr9uzzCXuWq95pS+CDYL8xBcJohXiwbRB3ECFqK1xpWr2lH4PxVzvVlIavAKAAAAAElFTkSuQmCC" alt="linkedin"></a></li>
										<li><a href="#"><!-- Instagram icon by Icons8 -->
											<img class="icon icons8-Instagram" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFpElEQVRoQ91ai1EcSQxtNQGAIzCOwDgC4wgMERhHYJxA/xI4HIEhAkMEhyMwjsBcBIcDoHX12uopbTOzO+zOfuq6ylXeYXemX0tPepKGzMByzn0gomNjzJH8G/rqJq7fGWPumPk6pXTT90BqL4YQTpj5L2PM4SZ2uMQz7onocwjhWv92Boj3HgDO8QVm/sdae2GMuQ0h4ES2tkII8IrjnPM5Eb2UjVzEGD/XTXVAnHMXRPQJfxDEALFzK4RwLh6Dw/6SUioHX4CIO30TEG+2bYFFpwcLMfMP2e8p3KwA8d7/Aid2yRIhhANm/mqMOWmAXRPRR2PMmVjmPsb4ikIIuPAVnEgp7QzBvfd/gxd91mHmm5TSiXMOxH9JRKfknLskIoRaRIKd4YX3nsV1XoQQHoQCsNK/+H+MEUYofGHmK/Lew9eOiGinuFGBYMPaKvq64sodgBTk7Q8WEW7dfx8DRPj9x3JTA5FT+iBq4ECpAuQiuMgdEV0tioxjXGstQJxznojOnqEI7pn5MqUU+6zrnLslorfzyD4pkBDCsYTJEvEQ/Ywx19ZaSIiHevKSnQ9yzginJypDI/J8DCHc6k0j/OacEYje6+uIWNbasxoAOsut4lqNpPlurQ3thoa4hAPIOYd66sx8nlL68lzurQzEe49kBVd6Immcc++JCCcPK0EnYYEjcKcZBaslhzHmMsaIZDd6DQKp4XjMnZj5t7X2pFpBpD9yEUg+bz2IBa4kP8A6yNj7Y54LIRtjfDeXIxXhmBsS0TuAEDmBTFxOn5nhZpewQsORo5zzmSIxIhjuAS6Ba7jHqFXTxTyLDOYV2TASaKfLNAhm/mmtPV/EE+EH1PZrCccVTFW2CABI0CWj69VyeikgzjmQ0+PEU0pFB1VXFBDHfQ/vO2KJSgixBUyM8Q2+V8MuM8eUUlgLEKWSi0spYLDEaBB1cxpM3bhysaJqJwdSa5aqksWlIP8PKldGOXfzJbXxByJ6BYtqVduWtCu7Vq0ga1Wm5H/nZssA0e4kifGyfdakHKm+W0/fOYdwiXyBrIwItfRSh1LqjGolzcV685Ut4r1HHQA3KnJ/Svmv5ThIrz4/xBhfTGqRoZOYSv6Pvf8UFpnJL6totD4f3BgQ5xyy8OvqWu3npQnyp4tTuiLIRSmlo/bzpK71vyH7UPjVAm5Zq9SOyUbCr4okJeNKVoYm2p8iIYqSPkRCVAriSUNkZbJL4kL27TZeJYoWfs+xSiM4i7ZSOaS3zzYVkCIaqzu1wq9K8jFgWtUMkjcidH2iUaxSu3uloaddTCyD6zP1dwtMTh2df0QrFGfFpVTDbbDrOYlFsKGm4d0VVjnnKsnxtVt0SKy1P3VhlXNG+EZ5XEoALf11YYUWaCsWJ5Mo+lQVN8AZPLRUiZhfYL6yqGSFFYwxF5i/qOoQ0wC0RHtdai1AxMVKz1hOtuuAABDaPdL2QSWJwqmcPpoP0ia6rgWYc+4TEZWeM3q4KaXS0Bhak7nWgGWKOxFRXMSP+nvNEwEx1xJrs4jaEE4f9Xcdid2jQYeuyN7e3m/NkcfHx310XWTm0TX0pM6fmQlu1CKtdcbwo/6m8qSvLt+4a/U9EAoALZ/axG44UprYaBUtamJPZhGpn+EmO7NCCIfMjD5BNwbp2kE98ryWsDs1wZIcVidUtSTu5P+T0Vutn9FJF8mx1Rm7CirYNDqRKLdLn2Bm9KYydddHUrMJ9GiDtfYmhLAVN4M75ZzR5ECzDgmzWAMAlUo+LfM51UfS+gku1jto2RZp9Gyk1WVzXxiAmyFDt8OWTQMRAFADpe00+MKAWKV7hWPZocsmADaSZvYVjroB/T6KDGUg7L4vG/OnAia56S0RQZRWRdCBwHN6X3NqJMdU+5nkPvLWEkYXw6856SchmomCxcsERcFua4lyhiIAT3o12X88y0p38cxWCAAAAABJRU5ErkJggg==" alt="instagram"></a></li>
										<li><a href="#"><!-- Tumblr icon by Icons8 -->
											<img class="icon icons8-Tumblr" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADxUlEQVRoQ+1a4VXbMBDWaYHSCYAJoBOQDUomKExAGAD5pAUKExQmIExQmKDJBE0ngC6g6/v8pDzF2LETm8Tpi97Ln8iS7tPdfTrdiVRFM8Z8I6KBUuo0/Ko+3cT/E6XURETGzrmnsgWp+Cczn4vId6XU0SYkXGONGRFdM/M4HbsAJMsyABjhAxH5o7W+VUo9MzN2ZGuNmWEVA+/9iIgOgyC31trrKNQciDHmloiu0BEQA0TvGjOPgsVgs++cc/nG50CCOT0GEF+2rYG63YOGRORXkHcIM8uBZFn2Gz7RZ02U+HLUzMxae0zMfCEiP+ATzrm+OnipkowxcPxDIhqSMeaeiEC1YIJe+kWVqUV/EZEHyrIMtnZKRK19wxjDRJQVF06dss7+V+lPfGUCIILB1tp3Z8oqkwZfe1VKHZSN62L+snmj/J0BYeYDEXkVkb/OuTmYLjdqU0AQETyKyItzDqFN3nYOSBVp7BSQ6HQwK631ETO/7ZxGgm+A+Y5ExDrnOLXlndAIM0N4hDYIGabOOQR3C633QMJ9BQco2GqqtR6kJlU0rSVUfm+tvVyV6ovzr0y/wR8Q7ufMJCJPWuuLMhDoN8Y8E9HZMkHbnDFrnyMxwAz3FWbm+7a7uS0gXUYCredqo5HWi3dJzXsgcQcKfjG21g4rYqGfkRiqfGkrPpLe7VPBqoSpAD4firuEc+6iLWGsTL+rHni9PxCbOuweSENbW5u19qbVwVX6Q2+IdT5Q19/Qgio/25vW3kf2PrLcizbmI8aYCRGdID9bLM5ARGYeiMgVET2U9deRQWdAEkFLU65JPeNNRJBBR+IZmX/c78+TytibtfZzneBVPto61jLGjInoKxFdVt0WY86rTEjcNGMVap0ouDONJBnxJ+ccdri0oZjkvY8amCmlZlrrMYpKbc6aLoHkOV9IT0THzAwhV2q9AAKJE9OpvGAtQ9YbIEjUee/BTp+UUo3zVIGxUE8Bcy1k8ZuqdG5adazTdEII5b2H4wPMTERYaz1NC6s3NzdnRHQQHiLExwjIjSFnjNzYQu28bu0k5zzttPSGiQOYWAtfKgsYCxpEPb8qwbdsgoXSW1KazqujdbvQpB8F1sBQg6ChfBhSq9AWnmNExmoyX9U3STV6mJfbkurozhREE23k1ej/68FA0Mr8CQdCCefcXRu1f9RYYwzisryM/u4JR1y0kLMC89xqrV+2/aQjkAgYD+9O8kcNxZJ36TMn7z2004h5Pmrnq+YNVYDR0mdO6eAkNsJjgpNNC5yuF9guMl3pWfMPzOt9SgN4YEwAAAAASUVORK5CYII=" alt="tumblr"></a></li>
									</ul><!-- ../social-icons-->
								</div>
									<div class="quickform">
										<h3>Contact Owner</h3>
										<div class="">
											<form class="form-horizontal"  method="post">
												<div class="form-group">
													<input type="text" class="form-control" id="name7" placeholder="Name:">
												</div>
												<div class="form-group">
													<input type="email" class="form-control" id="email7" placeholder="Email:">
												</div>
												<div class="form-group">
													<textarea class="form-control" rows="5" id="message7" placeholder="Message:"></textarea>
												</div>
												<div class="form-group mr-bottom-0">
													<input type="submit" value="Submit" class="lp-review-btn btn-second-hover">
												</div>
											</form>	
										</div>
									</div>
							</div>
						</div><!-- ../widget-box  -->
						<div class="widget-box widget-bg-color widget-categories lp-border-radius-5">
							<div class="widget-content">
								<ul class=" list-style-none categories-container">
									<li><a href="../../listing-entrance.html"><span class="cat-icon"><img class="icon icons8-Exam" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACkklEQVRoQ+2Z4XHUMBCF3+sgqSCkgiQVQCqAVABUAFQAVABUAKkgoQKgApIKSAekg8e8jOTxHWdbtnWSM2PN3I87SeP9dt+udGuiZ0hS3/zEuRsA5yTvJ+7fuY0VQPzI7DBJICR716V6divCWWFqgdwCOMkZmVoghwB+5oSpAmKpSjrICVMNxHmVE6YqSE6Y6iC5YBYBkgNmMSBzYRYFMgdmcSBTYRYJMgWmCkjq3Wxr3Q3Js669jwkEfZfXoiATI+EbwMP/ohUkxRNTvTxmX4odWaUl6UmQwN0YQ4fWFgUJN9k/AO5JHg8ZN2a+NMhbAJ+CgRckr8cYm9I7KJLskn4DOA0GfSf54tGBhNywrC4BPANwBOCYZJZcKSYtSVFWFwCc8JbYO5Kfc0SlJIhl5QgchKT/6w5J35ViDGARkLasSL4KFz4n+nMAZyTdv9o5JDliJyTPqyd7S1avSX4LIAb6CuALScuuC8QtoadDDcBSEYneP4z93FR5SVoUiC90tyRj6X3wvqQI2Fm9JDmCL2NEgkx9oG40uPceEUkutT9Co83ejcO/u3r505acv1tyHm7QbcCH33+R9P5mlABxsr4ZqEDN4SjJhkdgFwGD+cxxL9hR8Jyr3catoASIH2zjmlOcZBMZSTb2iKR7vf8NSR8AvA/vS9oR3VhbAsT50XkdCeXVEdtZhhcB0sqPjyTt2V0ed6Su2nmypf2YY36DVSciKd5sleHLeFhugTjhDXvd9ypur9Jqldfm/OiIihP3ru9gHCgW+/3PHirQaTzNh4yZM7/XiMwxbOzeFSR6LMUTY707ZX2KHVm7KFOMTNmzgqzSStHJhDWrtFZpTZBNypZs0kp5WIk1s1umJYxMeUYfyD9fBotRRf1I0gAAAABJRU5ErkJggg=="></span><span>Entrance</span></a></li>
									<li><a href="../../listing-science.html"><span class="cat-icon"><img class="icon icons8-Physics" src="data:image/png;base64,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"></span><span>Science</span></a></li>
								</ul>
							</div>
						</div><!-- ../widget-box  -->
						<div class="widget-box widget-bg-color user-timing lp-border-radius-5">
							<div class="widget-content">
								<ul class="user-abailable-table list-style-none">
									<li>
										<span class="timing-days">
											<!-- Clock icon by Icons8 -->
											<img class="icon icons8-Clock" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAE8UlEQVRoQ82ai3EbNxCGsVABliuwXEHkCqRUELkCKRVYbgDAoYFQFUSqwFQFpiuIUoGpCqIUIGzmxywYEDqSuDuc5ZvheDy6x37YB/YBUo0u59xJCOGMiE6VUvidyC//wlophd8DMz9orb855/D/yRdNeYMIf0lEVz1C1756zcwLrfX9FKhRIABgZquUAkC8mPlfpdQKq621xr/rUjA8B+AQwrlo7ZyI3mTEt0TUjQEaBOKcO2bmPwqAO6310jm3rFVBfp9z7iKEcEFElwXQZ+fcU+07q0HwQWb+UykFGKw+zGEx5GP7hBIzhYavRUtPRPR77QJVgVhroYVrMaF7rfV1rfqttX/hua7rPtSsrgDBxM7k/kXXdZ8PPbsXREzpi1LqHFoQgNtDL83/bq1lAalatPSsc+4qhLAQ7ayI6OM+7e98uUB8hVMKxLlz7mEIBO4dC4JnnXOnIQRAICA8ENGvu2B2glhrAQFN/K21vqg1pRJ0CkgGA1P7RSm17LruY99i9oIYY6DST6KJ07EQUzWSmdlGM8x8472P/ppfL0AkOn2ZYk4tfKQUNDcz8ZetcL8FIn7xHSFWQt8gx+5T+VTTKvacK9kCEJrf5/6yBWKMgS1eMvO99/5iqGPPDYL3G2Pg/GfMfOe932QWGxBJO7638Is5TCvzF6Q4iGBvRCsx6dyAZNrovPeuhTZaOXspizHGEZHNtRJBkjYiGdHbVmnHXCCFvPCVdQTpI/yZNSIyR38mIiSXiwhirUWkOukLa1OBWkatIoIhiUX6tO667j3lTu69P54qePn8XCCiFYTh6PQAibG5ZcidM2rl7zbGLInoN+x5lKUjTaNV+uDMGknR6wYgcYORzBIlatNrThDnHJLar8z8jTJHj2GsJYUxxhJR3JOY2Xnvu5bvR/7FzCjc1gAZVfgcEiiZbH4fMzc33yT/bCDW2n+QfBbAT13XvT20CEP+PjuIMSaGxkIjj957tISaXbOCSDkA290SelbTMsasiehdnklOWa6i1n8U80J/6rZlMgoZs838sWn4LSBQ66NhUd1kG7qAW+G31Yb4oyGKZPemSYryGhAC8n+KkuX2o0Lja0FI1h5DfEwahSw5PLp5g5rR0hLFDju7T/Sl8cwcQ3qqEK/RZS8L+hrnM8bE7uPcjl3KkkrzrcKqr3SsgXite3aWumJeqRXUPB9qDZxF2k1L6EU7SCmF1OJD60y4FYxoA1lDdPIkZ2+Dbl+zuJVAY9+TNdf7G3Sy5R+HEBDBUAdjWjS5ZTpW4L7nnHMpKGFWc7KzZSowqTsBE8M8YvBMpKXw6V1SRGHUAZN6sU3sHSv8LP6SQ1SPFdIKpFpeJkVYgaZlcK3WBAJDWGy6O5vre0dvMvbCpOhVzKzQxN7M4eAwNISAxAwTVsCgPflDAoAx5pM0LjAOxyT5atQwNFd90UhA+wgRbRZTk30CpoTTEei+9I7aStOsHhnLCQXs/qjDn+T8yF0roOxcS2ofIcRCC1VJbDVIts9gULp13IKZl977+1oHLrSNliemY/m5FhwLwaGE6upyEEgW0zE1QrsyB8JHVzi+xMyro6Ojx75DNc/Pz+gP4DANjkLBfDYtI2TfWms3RsujQHIgpRQOxeD8yLsxGkE9gTMtSIvGAKRvTgIpCh20fs5DCJuDZyUchE4Hz7TWyBhWU4TPv/8fVZPejlNsRCUAAAAASUVORK5CYII=" alt="clock">
											Office Meeting Hours
										</span>
										<span class="timing-hours">
											08:00-20:00
										</span>
									</li>
									
								</ul>
							</div>
						</div><!-- ../widget-box  -->
					</div><!-- ../sidebar-post  -->
				</div>
			</div>
		</div>
	</section>
	<!--==================================Section Close=================================-->
	
		<?php require '../../footer.php' ?>

		<!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Book Your Class Now</h3>
                                <table width="100%">
                                <col style="width:50%">
        						<col style="width:40%">
        						<col style="width:10%">
                                <tr>
                                <th><h4><b>Class Timing</b></h4></th>
                                <th><h4><b>Price</b></h4></th>
                                <th><h4><b>Select</b></h4></th>
                                </tr>
                                <form class="form-horizontal"  method="post">
                                <tr align="left">
                                <td>
									<div class="form-group">
										<font size="3">7 AM-1 PM (3 Days a Week)</font>
									</div>
								</td>
								<td>
									<div class="form-group">
										<font size="3">Rs.12000/- A.Y 2016-17</font>
									</div>
								</td>
								<td>	
									<div class="form-group">
										<button type="button" class="btn btn-primary" onclick="shortlist('resonance,7 AM-1 PM (3 Days a Week),Rs.12000/-,1000/-')">checklist</button>
									</div>
								</td>
								</tr>
								<tr>
								<td>	
									<div class="form-group mr-bottom-0">
										<a href="https://www.classesdunia.com/instamojo/order.php?id=101" target="_blank" class="btn btn-primary">
										Rs. 1000/- Off
										</a>
									</div>
								</td>	
									</form>
									<td>
									<div class="form-group mr-bottom-0">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#callback"></i>Request a Callback</button><br>
									</div>
									</td>
                                </tr>
                                </table><hr>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Window</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Book Your Class Now</h3>
                                <table width="100%">
                                <col style="width:50%">
        						<col style="width:40%">
        						<col style="width:10%">
                                <tr>
                                <th><h4><b>Class Timing</b></h4></th>
                                <th><h4><b>Price</b></h4></th>
                                <th><h4><b>Select</b></h4></th>
                                </tr>
                                <form class="form-horizontal"  method="post">
                                <tr align="left">
                                <td>
									<div class="form-group">
										<font size="3">7 AM-1 PM (3 Days a Week)</font>
									</div>
								</td>
								<td>
									<div class="form-group">
										<font size="3">Rs.12000/- A.Y 2016-17</font>
									</div>
								</td>
								<td>	
									<div class="form-group">
										<button type="button" class="btn btn-primary" onclick="shortlist('resonance,7 AM-1 PM (3 Days a Week),Rs.12000/-,1000/-')">checklist</button>
									</div>
								</td>
								</tr>
								<tr>
								<td>	
									<div class="form-group mr-bottom-0">
										<a href="https://www.classesdunia.com/instamojo/order.php?id=101" target="_blank" class="btn btn-primary">
										Rs. 1000/- Off
										</a>
									</div>
								</td>	
									</form>
									<td>
									<div class="form-group mr-bottom-0">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#callback"></i>Request a Callback</button><br>
									</div>
									</td>
                                </tr>
                                </table><hr>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Window</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Book Your Class Now</h3>
                                <table width="100%">
                                <col style="width:50%">
        						<col style="width:40%">
        						<col style="width:10%">
                                <tr>
                                <th><h4><b>Class Timing</b></h4></th>
                                <th><h4><b>Price</b></h4></th>
                                <th><h4><b>Select</b></h4></th>
                                </tr>
                                <form class="form-horizontal"  method="post">
                                <tr align="left">
                                <td>
									<div class="form-group">
										<font size="3">7 AM-1 PM (3 Days a Week)</font>
									</div>
								</td>
								<td>
									<div class="form-group">
										<font size="3">Rs.12000/- A.Y 2016-17</font>
									</div>
								</td>
								<td>	
									<div class="form-group">
										<button type="button" class="btn btn-primary" onclick="shortlist('resonance,7 AM-1 PM (3 Days a Week),Rs.12000/-,1000/-')">checklist</button>
									</div>
								</td>
								</tr>
								<tr>
								<td>	
									<div class="form-group mr-bottom-0">
										<a href="https://www.classesdunia.com/instamojo/order.php?id=101" target="_blank" class="btn btn-primary">
										Rs. 1000/- Off
										</a>
									</div>
								</td>	
									</form>
									<td>
									<div class="form-group mr-bottom-0">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#callback"></i>Request a Callback</button><br>
									</div>
									</td>
                                </tr>
                                </table><hr>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Window</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Book Your Class Now</h3>
                                <table width="100%">
                                <col style="width:50%">
        						<col style="width:40%">
        						<col style="width:10%">
                                <tr>
                                <th><h4><b>Class Timing</b></h4></th>
                                <th><h4><b>Price</b></h4></th>
                                <th><h4><b>Select</b></h4></th>
                                </tr>
                                <form class="form-horizontal"  method="post">
                                <tr align="left">
                                <td>
									<div class="form-group">
										<font size="3">7 AM-1 PM (3 Days a Week)</font>
									</div>
								</td>
								<td>
									<div class="form-group">
										<font size="3">Rs.12000/- A.Y 2016-17</font>
									</div>
								</td>
								<td>	
									<div class="form-group">
										<button type="button" class="btn btn-primary" onclick="shortlist('resonance,7 AM-1 PM (3 Days a Week),Rs.12000/-,1000/-')">checklist</button>
									</div>
								</td>
								</tr>
								<tr>
								<td>	
									<div class="form-group mr-bottom-0">
										<a href="https://www.classesdunia.com/instamojo/order.php?id=101" target="_blank" class="btn btn-primary">
										Rs. 1000/- Off
										</a>
									</div>
								</td>	
									</form>
									<td>
									<div class="form-group mr-bottom-0">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#callback"></i>Request a Callback</button><br>
									</div>
									</td>
                                </tr>
                                </table><hr>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Window</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Book Your Class Now</h3>
                                <table width="100%">
                                <col style="width:50%">
        						<col style="width:40%">
        						<col style="width:10%">
                                <tr>
                                <th><h4><b>Class Timing</b></h4></th>
                                <th><h4><b>Price</b></h4></th>
                                <th><h4><b>Select</b></h4></th>
                                </tr>
                                <form class="form-horizontal"  method="post">
                                <tr align="left">
                                <td>
									<div class="form-group">
										<font size="3">7 AM-1 PM (3 Days a Week)</font>
									</div>
								</td>
								<td>
									<div class="form-group">
										<font size="3">Rs.12000/- A.Y 2016-17</font>
									</div>
								</td>
								<td>	
									<div class="form-group">
										<button type="button" class="btn btn-primary" onclick="shortlist('resonance,7 AM-1 PM (3 Days a Week),Rs.12000/-,1000/-')">checklist</button>
									</div>
								</td>
								</tr>
								<tr>
								<td>	
									<div class="form-group mr-bottom-0">
										<a href="https://www.classesdunia.com/instamojo/order.php?id=101" target="_blank" class="btn btn-primary">
										Rs. 1000/- Off
										</a>
									</div>
								</td>	
									</form>
									<td>
									<div class="form-group mr-bottom-0">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#callback"></i>Request a Callback</button><br>
									</div>
									</td>
                                </tr>
                                </table><hr>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Window</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Book Your Class Now</h3>
                                <table width="100%">
                                <col style="width:50%">
        						<col style="width:40%">
        						<col style="width:10%">
                                <tr>
                                <th><h4><b>Class Timing</b></h4></th>
                                <th><h4><b>Price</b></h4></th>
                                <th><h4><b>Select</b></h4></th>
                                </tr>
                                <form class="form-horizontal"  method="post">
                                <tr align="left">
                                <td>
									<div class="form-group">
										<font size="3">7 AM-1 PM (3 Days a Week)</font>
									</div>
								</td>
								<td>
									<div class="form-group">
										<font size="3">Rs.12000/- A.Y 2016-17</font>
									</div>
								</td>
								<td>	
									<div class="form-group">
										<button type="button" class="btn btn-primary" onclick="shortlist('resonance,7 AM-1 PM (3 Days a Week),Rs.12000/-,1000/-')">checklist</button>
									</div>
								</td>
								</tr>
								<tr>
								<td>	
									<div class="form-group mr-bottom-0">
										<a href="https://www.classesdunia.com/instamojo/order.php?id=101" target="_blank" class="btn btn-primary">
										Rs. 1000/- Off
										</a>
									</div>
								</td>	
									</form>
									<td>
									<div class="form-group mr-bottom-0">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#callback"></i>Request a Callback</button><br>
									</div>
									</td>
                                </tr>
                                </table><hr>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Window</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
  	<div class="modal fade" id="callback" role="dialog">
   		<div class="modal-dialog">
     		<!-- Modal content-->
      		<div class="modal-content">
       			<div class="modal-header">
         			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">Please Enter Your details And We will Get back to You</h4>
        		</div>
 				<div class="modal-body">
 			        <form class="form-horizontal" id="contact" name="contact" method="post" novalidate="novalidate">
						<div class="form-group">
					   			<div class="col-sm-6">
									<input class="form-control nameform" id="name" name="name" placeholder="Name:" type="text" value="" required="">
				  				</div>
								<div class="col-sm-6">          
									<input class="form-control" id="mobile" name="mobile" placeholder="Contact Number:" type="tel" required="">
								</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-12">							
								<input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary">
							</div>
						</div>
        			</div>
				<div class="modal-footer">
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       			</div>
      		</div>
       	</div>
  	</div>

<!-- cart -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Short listed Classes</h4>
      </div>
      <div class="modal-body">
       <table id="shortlist">
  <tr>
    <th>Class Timing</th>
    <th>Price</th>
    <th>purchase</th>
    <th>Call back</th>
    <th>remove</th>
  </tr>
  <tr>
    <td>7 AM-1 PM (3 Days a Week)</td>
    <td>Rs.12000/-</td>
    <td><button type="button" class="btn btn-primary">1000/- rs off</button></td>
    <td><button type="button" class="btn btn-primary">Request a Callback</button></td>
  </tr>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- cart ends-->
	<!--==================================Javscript=================================-->


	<script type="text/javascript" src="../../js/jquery-lib.js"></script><!-- Jquery Library -->
	<script type="text/javascript" src="../../js/jquery-migrate-1.3.0.min.js"></script>
	<script type="text/javascript" src="../../js/build.min.js"></script>
	<script type="text/javascript" src="../../lib/chosen/chosen.jquery.js" ></script>
	<script type="text/javascript" src="../../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../../lib/slick/slick.min.js"></script>
	<script type="text/javascript" src="../../lib/jquerym.menu/js/jquery.mmenu.min.all.js"></script>
	<script type="text/javascript" src="../../lib/Magnific-Popup-master/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="../../lib/jQuery.filer-master/js/jquery.filer.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap-rating.js"></script>
	<script type="text/javascript" src="../../lib/popup/js/classie.js"></script> <!-- Popup -->
	<script type="text/javascript" src="../../lib/popup/js/modalEffects.js"></script> <!-- Popup -->
	<script type="text/javascript" src="../../js/main.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>