<?php
require 'connect.php';
require 'helper.php';

if (isset($_GET['stream']) && !empty($_GET['stream']))
{
		$stream = cleanStringLow($_GET['stream']);
		try {
				$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				// Case - I : MainStream based search
				$stmt = $conn->prepare('SELECT msname,dmainstream FROM mainstream where msname LIKE :stream');
				$stmt->execute(array('stream' => $stream));
				if($stmt->rowCount()==1)
				{
					$row = $stmt->fetch();
					$stream = $row['msname'];
					$displaystream = $row['dmainstream'];
				}
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
	<title>ClassesDunia - Design</title>

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
<body class="listing"  data-userimg="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEGUlEQVRoge1ZLWwcRxQ+cMCVItXAIKDgQKQaGBQYtFLBm4mBgYFBQSoZGBgYGAQYFBhYOhAQYBBgqa204G7fWGdg4EqWUrCwqgpcqYoiy975xnKlAIMDAQYGWzAzd6vmfnb39rxX1Z+07L2n7828N+9na7VHPOK/A2IsEusNCuN9qRBIhUMK9S4x1inAXNX8RoKiqE5tbAuF3wQjGfGd09HVUtV8B4I6754IxlmfrLlxt7BHITYp1DtSmTdCmUsncyeVeU2Mxaq590AB5gSbv7wD1I7XKIrqA2WjqC7Z/JS+IanMm2HyDwqpzGvnxB/UwdNx8hRFdVLxslSmKdjcWmcQPATX4aQUGoLNvWBzXyTuibEoGF3BSCjEV9PgmI1IG9suPI4L2wjjfcFIJEOVyS0XJOPEneZmURt0dLXk8gUlUssHwYgEI6EWaEI7iWAkJdEqQMA9p6TQmMhO5Y64Z3eSRKUA8zPgiP7FJer3hW209JeCkQhl/i6TWy744kaMH4raoDa+9q1LmdzykQj1riuGPxa1IZXZdbd6UCa3XKCj6zVH4m1hG6yPBSN5ztcbZXLLSQKrLiy6xfQvFmxngITCeKVsfpnhO14K9V4RfdtE4pW71ZOy+WWGYLwXjGSS+YJaIHerUZncckEqc2xfLV04vinE5qT92sQg1hu+T6JQ7+bWD/WeYGDSw5gYFEV1qcypK2iXefV9Cy8YZ5UPV990bj4TjD/tqcbfZtUT6vq5c+L3afLLBakQuDhvZtcxTTcdHk6TWy6kXp4uBZgfK28bxW4ZI0Dp8LOJVOZ0VLy72nFS+ZM7DNSO11KbkVPii4VPZALMp5xISMXLVXAdCbfbukvttm6J9RYpNEihQay3BJub9O6ras5D4WuCr/gDv/6SrroZfRx6DSBfLBDrDRtG5sbtr86ojW1qXT2baUdS25C7kXIdPPVyM7UyrdVqNVLxsg+nLAOSZNPyITgTCU9HV0u2GNqQco68Gqtneyyf9PdSIXjwTaP9faC/6/VYnozNB7s+DfFiqH4Yr3g5ezP9QxCMMwrxYqr/UCjAHDFe+sWzr+SScUCtq2e1Wr/t6G3Z2/GaTfyLBWKsSsZBr4a4YYwUGm4R3hXppzuM97N0CfmcsO36h5QD7ynUO9R59+QT2VDvCDYfhz6/NslfDjyoNrb7vyhcyzNANr8DUVSXCocpw+fEWB/vOBalMk0bfuZWsLmVypxKZZpZpklirAvGeT/vTGvQoWVGPw/MR2K9VdhQQdhI6N1uVGhm8SOoYMDnQBVwBRQur/JNodS+/KLXZjNWp8QxO5/+mHCXa2Huf+AINr9Oj14++DDPlfxCmZ9zK00ZMjQ7bknRyqz0r6d21r4PmZxI/6+Y1W+lE39e9GYf8Yj/K/4BSKKZsGt5SOsAAAAASUVORK5CYII=" data-userlink ="login.html">
	<div id="page">
	<!--==================================Header Open=================================-->
		<header class="lp-header-bg">
		<div class="lp-header-overlay"></div> <!-- ../header-overlay -->
		<div class="md-overlay"></div> <!-- Overlay for Popup -->
		<?php require 'nav.php' ?>
		<div class="page-heading listing-page archive-page ">
			<div class="page-heading-inner-container text-center">
				<h1><?php echo $displaystream; ?></h1>
				<ul class="breadcrumbs">
					<li><a href="index.php">Home</a></li>
					<li><span><?php echo $displaystream; ?></span></li>
				</ul>
			</div>
			<div class="page-header-overlay"></div>
		</div><!-- ../Home Search Container -->
	</header>
	<!--==================================Header Close=================================-->

	<!--==================================Section Open=================================-->
	<section>
		<div class="container page-container">
			<div class="row listing-page-result-row margin-bottom-25">
				<div class="col-md-4 col-sm-4 text-left">
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

//if (isset($_GET['stream']) && !empty($_GET['stream']))
//{
		//$stream = cleanStringLow($_GET['stream']);
		//try {

			//    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

			  //  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					// old-stmt
					//$stmt = $conn->prepare('SELECT a.dclass,a.location,a.logourl,a.pageurl,b.ssname,c.sname FROM classes a, substream b, subject c, map_class_stream d, map_class_subject e WHERE a.classid = d.class_id AND b.ssid=d.stream_id AND a.classid = e.class_id AND c.subjectid = e.subject_id AND c.fstream = b.ssname AND a.location LIKE :location AND b.ssname LIKE :stream AND c.sname LIKE :subject');

					$stmt = $conn->prepare('SELECT DISTINCT a.dclass,a.location,a.logourl,a.pageurl FROM classes a, subject b, map_class_subject c WHERE a.classid = c.class_id AND b.subjectid = c.subject_id AND b.fmstream LIKE :mainstream');

			    $stmt->execute(array('mainstream' => $stream));

			    //var_dump($stmt);

				if($stmt->rowCount()>0)
				{

					echo '<div class="row listing-page-result-row margin-bottom-25">
						<div class="col-md-4 col-sm-4 text-left">
							<p>'.$stmt->rowCount().' Results</p>
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

} else {
	echo '<!--==================================Section Open=================================-->
		<section>
			<div class="lp-section-row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="lp-home-categoires margin-top-subtract-55 padding-left-0">
								<li>
									<a href="listing-science.html" class="lp-border-radius-5">
										<span>
										<!-- Physics icon by Icons8 -->
	<img class="icon icons8-Physics" src="data:image/png;base64,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"><br>
											Science
										</span>
									</a>
								</li>
								<li>
									<a href="listing-commerce.html" class="lp-border-radius-5">
										<span>
											<!-- Money icon by Icons8 -->
	<img class="icon icons8-Money" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADYUlEQVRoQ+2ZgVHcMBBF/1aQUEFIBYEKEioIVBDoIOkgHQQqCKkgUAFQQUgFgQoCFWzmebQ3OiPbutzhMzenGY89tizv3/93tZJNG9JsQ3BoC2RqTG4ZmSwj7n4l6cPUDByw58LMjugzk5a7+wsD0ZhrZg2GJ0DiQQ4qQJaePSf4vu+2n22BPCcTMfYkGHH3T5I+S9pLht1KOjWzH7VOWCsQd38tiQwYANp2A+jAzB6GAK0bSKTx+8TIdTKY1H4q6Y2kazM7mCwQdz+W9F0SIPbaXk9swQhgTszsvA/M2hhx9wtJHyUdmRnXT5q7H0r6KenSzLjubKMCcfddSd9STHBN2+mKgdT/T+p3JwmGvpgZ13NtNCDJqF+SCPBoNZ4mbt5n7xD4+20wYwIJKd1IOqzJRLnLU8wwBqCeOGBMIH8TG51SqshMsMk4d2b2tgW0qf9qyqalShR3RxKv+mKiAghxRczcm1nEWPPamIyEtNA8mWpwkitIiwzGHLNWaeFBsg6s0G7NbH+IheRtkkTM/o+SdgvzzjjSSgYBhhkbox7MrKs0aadWHEB8cD4usTmatGo8v0yfLZDaVLeMlxd5d8vIlpFF9LJA36WktcB3JtG1tB1EPn83CevqjZhVA5u39+vuFG5zRVtrvQBj7Rbrce6zMGoWR2ZGWf/fzd0pXxhnrtzput/0ja+5O0awll5lAzyFZJwB/mhmJafMvtsV5H3BXyWttAAq1VD5pjfPY6WYr/66HAOoWOpSbM5YXApIj7Ry+YR3MS7u/+5Znwe4OAMc+XYxz5gcX0tz2iAjyeN4J8rxReUVAJEM49xUyAdQAIyjlDFZ73CQnR4GgfRZ7e65fPBmJIS43yej8DAbcr0JIDmTMeNoAwNQs31UWvpWxcgQPWk3BYAhHc5t+cAawGYebo+bxsHQuwQMwznYK5u1ZwNSAtryMMa0gQHo3Mwus8zJJgRAdvIx01jsYrIpXly8rYSRIcZ4nrwNIAzKZUNMsXV6lnZT5qTTN3fMsVRjxKr7JFAA4gimkF6TvnPp1P4tG42RLmekvWAkkycN0u/ZUKZaOyMdMUWCAFAENpI7Sf9aiplqkkCygAcQjMyl9aEfsWuXVo/kYAdAzST9YoFkma75zzK0XzZZRhbNlBsD5B8RnadRKCw/CQAAAABJRU5ErkJggg=="><br>
											Commerce
										</span>
									</a>
								</li>
								<li>
									<a href="listing-arts.html" class="lp-border-radius-5">
										<span>
	<!-- Art Prices icon by Icons8 -->
	<img class="icon icons8-Art-Prices" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAGKUlEQVRoQ9Waj5EWRRDFuyMQIhAiECMQI5CLQIhAiECMQIhALwIhAiEC7yIQIvCIoK3f2r32zM7OzO5xVjlVV3zctzs7r/v16z97Kp9xmdk9EflGRB6LyCPfmt/F53jalYjciMgHEeHzlaq+v81R9DY3c6+ZPRCRH6rDn9kWYO9E5I2qXh7d4DQQB/CjiDytHoplORA/rBtVxerrMjM8FJ7iMz9fpUsA9UpEXqsqn4frMBCnzy8i8iTtjgV/VdU4/PDB9QVuGCiJYaDnYgQReamqr0cbHgJiZjwIENDpE4fHcqoK1z/b8ue8TIAw0EXPO9NAzAwasTkL+jydAWBm3/t9gAcwFp6KAQeEsb70ewFT0DSsNwXEzPBCxMJPqhqAul4wM3iOENQL7j+fcaFT+Y17B6o9bHlmCCQdBio9mY0Dt+bvftgXqvrKzDj8z/67b2f34nozA8x3LtfcW4hAF4iZ4QW8wfp6z60ty6YHFx40M7wJTd+qahaMkXdROWIFdUOiL/INu0BcRf5wmXymqnB1epnZX35vYQCXXvZFlu9Pb/iPVwBDnH0hIoVHe0B+c4ndWG4mgM3MOKSqbp6x993kvkHPD6r6sBvsid/ExYPMx9kANjM4jOX2PPJJVbHwsmb39WvxCkq2eqXpETMjSMkZNb/53VQAH4mRo8KQQF+q6qKmLbdTLsDhljdCOYYBXB3uOdnZzJBiJJm1WvMIaPdIGPS9qvK5CSS0f6P1RwN4li5H93UwRQy2PPKnlyAbuT0ZwLgeyYXTHz2zFwp4ct99IC65ACkCMQXkoQCeldajwjD0SEqAzWR1lMsHgEzHnoOIOG7HSMq6zXrqSADPgqiCl/92hcGvj4qjrVpmRglAL7BbB80G8BEgJ/IIMUZVvdRwG9UyM2QXt3XrKqdgN4CPAkmWHu6bVI5KeOmFCtXqqceZg93FPSmO1/j43wHxohFVpbTZLxpnPDJT2N2FJ5x6UTptVPUQte4q0EfA3RM0ZKgVSfVRt7EaZNjpgnF0sCPfe5KmpUCEqP8etxq82iM09nRgG/m9q2TYA2VmdJB0qMQEnqDVHg8fUh5hWkG2XdeZwu6I5etrzQwqxYCCqQ0gdod1tUein95k9jOF3VkgTida4akpY0t+cSV8LDTaFeNOCsazYOv7ao/ARYYGm177v4oRM2Pkg0FjJsxxlom9T0/etsC3+pEI+CJO7qpgjEN5YBMXTCR7i5KEGquI4RaQmFKslWV62K0nh60TVoGNOvGcd6FQPkJC/jkbDRqLmfOL2K8FBItQBrDWoiyBGXZ8ldrRp3NPvOyhwsZIS5dYJdm1mvXvOAt5Y+0oq2nl2o7vTVGajc6RwPRsTElRv61im2Xg53RCXFit1hovMPReBgzJmDk5LyGwByQu3B0aj0CllgCqQAmocsPhg99mFvOBlidIhAGAuAD8+v4leWYZ1PUmjdFkTU/Ok8Uizpp1kdMmpP6jqhYBnuZqKBQgoOfGqGYWg7qLHpDoi5tu73kkeWNTISSwmy4vfVdMSJL0F6VT8srlaBofKoUkb0b5e2CiChCR+3vZudeNpqlKd3ieBuJXIyAkSEAgebwjfDaKDafNYtEBkN6QO79HgeKUTM33k2vpNDqYo2YTBtJFUHY80kyqlfLsAnFjLIqV3iM2DTkNxDfNL3yG70qyorisboo/Mwuwo0EHgEgHGLKuNiKOr4ev3lIAZjDL7GkQ8HFQlAWqUIgiv/f832awp9yyVhadOu/fKmRErYoOGQwHgWrNUtsTYrwqy9sscp4OXLywSWNb7oFaGALRIV4LNqQ8tC+/Hf5nMFidzZtdW6Illou/bFgHBykP1AmRZ3B46BSrqP0SfZc8NE2tyjNwE4/E4bre6RglkuImV7lHAcOzqAbWP0qoSpv9EmWGbv4gXJ/fowMI6ux6qN67KhqL2PNhHBOT9Z189bKoXzTOAEkiQHkBIGaxsbAe8REN0XX1HpL5Mu8ml7+AqMBETCAOi0E8BXAPgKKcKUqnU9RqAfUg5UHQJXqGkU3W3OB0gUqje5cidNhYjZ48831qhOA3FuTfCFxmU1gay/Piv57WYIhodSMGr1OrW1wf5/kbty9h1EvdQTMAAAAASUVORK5CYII="><br>
											Arts
										</span>
									</a>
								</li>
								<li>
									<a href="listing-design.html" class="lp-border-radius-5">
										<span>
											<!-- Design icon by Icons8 -->
	<img class="icon icons8-Design" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADbElEQVRoQ82Z4XEUMQyFpQ6gAtIBlBA6oANIBdACFQAVQAdABYQKCBVAKiBUYOYt9qHzyZYse4/sTH7Fe+vPfnqyJSbHk1J6QkQ/mfnOMfy/DGHrqxniC0CI6Ol9hemCCIgHGfjm3DAppUsieklEz8QcXjPzJ7kJTZAK4nt+6TERnQ0mpfSCiN43VPOOmV+V/6kgCgRWBc81EZ0FxoAo84fUMSc6AdEgEBcpJcgLsYLAx7PbzlQQt0T0qLErX5l5W+QjkBYEBqaUoNGPRLSrzCqIKyJCLBQl1Dx3zPzwCKQHUd7OMNtW7iGzGoKZP+RFhBo0mFtmvjiAeCDkUuwhsxaEWEQN5jMzb27GkxBLZGZBVDCITcTMb8QrMyO/bSCS1AzgKlam3cwLkSUm7fiqSE9KKwJzPetmqyDqYB+CqQxg2M1WQmj2OwPjdrPVEK2EGIIRNtlNmntAqCCKb5sGoECobrYXRBMkAuNwMyS3tzm2jhynTtcjwOVd6xg/JLOS+RtuVr65HKK7I42M6pJZ3tFyNpMLvguECyQiM7EIkNPzveQkV8i86kZ3ZkTnI2PreHLFiBKErpgZmdjI2BaEW1ryB6yz2cjERsb2IEIgvZgZmdjIWAsiDNKACeeJfAukmVKTO9i1ValkFsoTGQLHGjzhutkUSN4ZlGTeRCxWQEwXNKZARnSujV1Z0AiDzEKI/IQTgPsKsCSPiI83r5xK7nGNnS1oDO/Iqp1QclO5x4QKGkMge0Bkw5DFv1BBww0yA+HJE8YVwDx1u0AWQAzliYibmSAzEKg7WWezlguNlmetG6LLcbLOm2OjMOIoZHYBeo2eJRDR+4wC0XWzVqNnKUQUxlHQOJzNtEbPLhCTMGZ5tm704Ab4K3IAlAVl6/4QjZmum1UZVlY+mhWPESfruJLr2qwceTBH5BXUm3FqRnvhst4RFNDQCm7eLVZARGWmGMBfCOabGuSbaHaewKyEiMBUB8sDBH7rAJJSQi/uR0MKaEriKT3vbqHNihFFLqbMehA1SK85L7+9FMKzMxZEDSKrgq1F3QWiB5P/VzL7kZzkJKW0IKut1SseZFPc3ra/mSqHV26KNePVf+7EDMc6eSQIBhStlolvHdNzP0p1prkTZW7m6ffcEIrMoJLNYntzubcgmHTemQsLAmP/ADcKeppwrrwzAAAAAElFTkSuQmCC">

											<br>
											Design
										</span>
									</a>
								</li>
								<li>
									<a href="listing-entrance.html" class="lp-border-radius-5">
										<span><!-- Exam icon by Icons8 -->
	<img class="icon icons8-Exam" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACkklEQVRoQ+2Z4XHUMBCF3+sgqSCkgiQVQCqAVABUAFQAVABUAKkgoQKgApIKSAekg8e8jOTxHWdbtnWSM2PN3I87SeP9dt+udGuiZ0hS3/zEuRsA5yTvJ+7fuY0VQPzI7DBJICR716V6divCWWFqgdwCOMkZmVoghwB+5oSpAmKpSjrICVMNxHmVE6YqSE6Y6iC5YBYBkgNmMSBzYRYFMgdmcSBTYRYJMgWmCkjq3Wxr3Q3Js669jwkEfZfXoiATI+EbwMP/ohUkxRNTvTxmX4odWaUl6UmQwN0YQ4fWFgUJN9k/AO5JHg8ZN2a+NMhbAJ+CgRckr8cYm9I7KJLskn4DOA0GfSf54tGBhNywrC4BPANwBOCYZJZcKSYtSVFWFwCc8JbYO5Kfc0SlJIhl5QgchKT/6w5J35ViDGARkLasSL4KFz4n+nMAZyTdv9o5JDliJyTPqyd7S1avSX4LIAb6CuALScuuC8QtoadDDcBSEYneP4z93FR5SVoUiC90tyRj6X3wvqQI2Fm9JDmCL2NEgkx9oG40uPceEUkutT9Co83ejcO/u3r505acv1tyHm7QbcCH33+R9P5mlABxsr4ZqEDN4SjJhkdgFwGD+cxxL9hR8Jyr3catoASIH2zjmlOcZBMZSTb2iKR7vf8NSR8AvA/vS9oR3VhbAsT50XkdCeXVEdtZhhcB0sqPjyTt2V0ed6Su2nmypf2YY36DVSciKd5sleHLeFhugTjhDXvd9ypur9Jqldfm/OiIihP3ru9gHCgW+/3PHirQaTzNh4yZM7/XiMwxbOzeFSR6LMUTY707ZX2KHVm7KFOMTNmzgqzSStHJhDWrtFZpTZBNypZs0kp5WIk1s1umJYxMeUYfyD9fBotRRf1I0gAAAABJRU5ErkJggg=="><br>
											Entrance
										</span>
									</a>
								</li>
								<li>
									<a href="listing-school.html" class="lp-border-radius-5">
										<span>
	<!-- Classroom icon by Icons8 -->
	<img class="icon icons8-Classroom" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD6klEQVRoQ92Z/VkTQRDGZypQKlAqECoQKlAqECpQKhAqECsQKjCpQKhAqECoQKxgfH777OTZHHfH7HFJDvYfTJzszTvvfJ9K4JjZbxHZCYiuW2Smqgc8VCNPNjOLyG1CRlUThiog/qNNKNx8phu3Fsh1Qq06GfcaBGQKDIzFyCcR+VIEPAydqerFpkBWMWJmr0XkV0/GAtC+qt6vG1AtEE+7d5mRy6zwHoyIyBsRuVbV3ckCMbNDEfkhIoDYaVo9swUjgDlS1fN1ggkzUhTBA1WdtSlpZh9F5GeUlWycryKCy3Ln8VC3rAHiRXCr62Fm9lZE/uTU3FuTCoZLm3xXVZJI9dkIEDOj/hBvnCMYzJ/vVXWrGoWI1ADhYe9EJOJaN13FMscSIGAvMWBmJAuy4Z2q8n31qQHiwX4rIrsdwe4Kdga7maEwiiew2R35HXFyqqon1ShqGOFyM3NWAIMv3+SHwhTpF2v2sYGSBPe/nPluiyRypaoAHHTCjGQgWI3ageJtB2B7LWwB8EMGy+8ompdmBvjPXSm9BlEVEL84ZxwYcUAAoEU5z67C9wQ0FuYvBvCT3KeRtXDV1IgOPWEgOUi/iQi1olQs8myKKIpequpZzlrECveMUjxDQAI9VgkG/8f9kuK5OC56r8ZdF6pKEnnyiQJxX8aFDoe4QQZAnBDwKSm0xdNQRFEgVGsevq2qZKzwMTOUxx1Ly48KIiei1Hn0TohNtBEUZkY8oXwZT1cicv5YQxncCSwliCgjS2iDQLw3w/p0wmw4QmwGgZA49otMujJGqsE3lXrEYEsFdOWMDNm0BBlZr2sBZAMLvVnrDDEw2BeuVfRokfAaRWYlQEbRLHjJwuht8iMwsvZd8UoY2YBrzVcCJOgVo4q9XCDFPO0WY23DrO3LuSVLZnmGJforTkSeqdGnw1HklxgxM4Yneqa282C+NjMU6pq5T1T1tLzIzHz0jd4fll8AaTDB4oyBiAaQRpALX/nImrtP34Tw8Tgzwb9hxo2RRtyGPPML9/lm8rH7Q/IlECimBU8gGpZ0puaqmlzIzPrk3ZKlPIDeV9xfJV8C+Ztb8AebxbaNopn1ycMk/79YwBX9VPT+zk1nmz4lkKofrlqx2vtX5Vq1rvhk+bZgZ3GAj/vbKN5Wecy0Be8k5GvSb18SaEuna5UvGSEb8WKna4eF5dlJpXcl+d3IZOQTkOKFDR/neYtY5n9cjdTJ8bmZhdsk5KlVTHMwwPqndwtYVGVfvk1JfhsgD4pXV1tqZl6kEhNeHCcgfwoQV26RkXoUK9uSKclfAaRqjTNR+fuXAkQWQLrc6bl8X8bIc9G5Tc/5f8bAn4VrWjzMAAAAAElFTkSuQmCC"><br>
											School
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- ../section-row -->';
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
