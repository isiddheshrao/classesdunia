<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Listingpro - Template HTML5">
	<meta name="author" content="">

	<!-- Title -->
	<title>Listingpro - Home</title>

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
	<link href="lib/icon8/styles.min.css" type="text/css" rel="stylesheet" />
	<link href="lib/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
	<link href="css/main.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-lib.js"></script><!-- Jquery Library -->
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/uploader.js"></script>
	<script type="text/javascript" src="lib/jQuery.filer-master/js/jquery.filer.min.js"></script>

	<!-- IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<h2>existing images</h2>
	<div class="jFiler-items jFiler-row">
					<ul class="jFiler-items-list jFiler-items-grid">
<?php
	$class = 'Resonance';
	$file = $class.'/'.$class.'_logo.png';
	if(file_exists($file)){
			echo '	<li class="jFiler-item" data-jfiler-index="0" style="">
								   <div class="jFiler-item-container">
								      <div class="jFiler-item-inner">
								         <div class="jFiler-item-thumb">
								            <div class="jFiler-item-status"></div>
								            <div class="jFiler-item-info">
								               <span class="jFiler-item-title"><b title="allenlogo.png">Resonance_logo.png</b></span>
								               <span class="jFiler-item-others">160 KB</span>
								            </div>
								            <div class="jFiler-item-thumb-image">
														  <div class="loading"></div>
															<img id="logo_img" src="'.$file.'" draggable="false">
														</div>
								         </div>
								         <div class="jFiler-item-assets jFiler-row">
								            <ul class="list-inline pull-left">
								               <li>
															 			RESONANCE LOGO
								               </li>
								            </ul>
								            <ul class="list-inline pull-right">
								               <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>
								            </ul>
								         </div>
								      </div>
								   </div>
								</li>';
		}
		$file = $class.'/'.$class.'_slider_1.png';
		if(file_exists($file)){
			echo '	<li class="jFiler-item" data-jfiler-index="0" style="">
								   <div class="jFiler-item-container">
								      <div class="jFiler-item-inner">
								         <div class="jFiler-item-thumb">
								            <div class="jFiler-item-status"></div>
								            <div class="jFiler-item-info">
								               <span class="jFiler-item-title"><b title="allenlogo.png">Resonance_logo.png</b></span>
								               <span class="jFiler-item-others">160 KB</span>
								            </div>
								            <div class="jFiler-item-thumb-image">
														  <div class="loading"></div>
															<img id="logo_img" src="'.$file.'" draggable="false">
														</div>
								         </div>
								         <div class="jFiler-item-assets jFiler-row">
								            <ul class="list-inline pull-left">
								               <li>
															 			RESONANCE LOGO
								               </li>
								            </ul>
								            <ul class="list-inline pull-right">
								               <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>
								            </ul>
								         </div>
								      </div>
								   </div>
								</li>';
			}
			$file = $class.'/'.$class.'_slider_2.png';
			if(file_exists($file)){
				echo '	<li class="jFiler-item" data-jfiler-index="0" style="">
									   <div class="jFiler-item-container">
									      <div class="jFiler-item-inner">
									         <div class="jFiler-item-thumb">
									            <div class="jFiler-item-status"></div>
									            <div class="jFiler-item-info">
									               <span class="jFiler-item-title"><b title="allenlogo.png">Resonance_logo.png</b></span>
									               <span class="jFiler-item-others">160 KB</span>
									            </div>
									            <div class="jFiler-item-thumb-image">
															  <div class="loading"></div>
																<img id="logo_img" src="'.$file.'" draggable="false">
															</div>
									         </div>
									         <div class="jFiler-item-assets jFiler-row">
									            <ul class="list-inline pull-left">
									               <li>
																 			RESONANCE LOGO
									               </li>
									            </ul>
									            <ul class="list-inline pull-right">
									               <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>
									            </ul>
									         </div>
									      </div>
									   </div>
									</li>';
				}
?>

</ul>
</div>'

<div class="seperator">
	<h2>Logo Upload</h2>
	<div class="col-sm-12 padding-left-0 padding-right-0">
		<input type="file" name="files[]" id="filer_input_logo" multiple="multiple">
	</div>
</div>

<div class="seperator">
	<h2>Slider Image 1 Upload</h2>
	<div class="col-sm-12 padding-left-0 padding-right-0">
		<input type="file" name="files[]" id="filer_input_slider_1" multiple="multiple">
	</div>
</div>

<div class="seperator">
	<h2>Slider Image 1 Upload</h2>
	<div class="col-sm-12 padding-left-0 padding-right-0">
		<input type="file" name="files[]" id="filer_input_slider_2" multiple="multiple">
	</div>
</div>

<div>
	<h1> Response: </h1>
	<pre id="response"></pre>
</div>


		<script>

		// $(window).bind('beforeunload', function(){
		//   return 'Are you sure you want to leave?';
		// });

		</script>

</body>
</html>
