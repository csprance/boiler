<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-e	quiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/template.css">
	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="homepage" style="display:none">
		<div class="container">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h1>You've Got it!</h1>
						<p>jQuery, Bootstrap ready to go with compass and sass. It's all there man.<br> Just as a refresher I'll list out some paths for you</p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:5%">
				<div class="col-lg-6">
					<div class="col-lg-12 text-center"><h2>Paths</h2></div>
					<div class="col-lg-12 well well-large" id="paths">
						<span>Is your place to write all javascript code use it</span>
<pre>js/main.js</pre>
<span>is where to code sass at get there</span>
<pre>sass/template.scss</pre>
<span>put the jQuery plugins there.</span>
<pre>js/plugins.js</pre>
					</div>
				</div>
				<div class="col-lg-6 text-center">
<h2>Included</h2>
				</div>
				<div class="col-lg-5 col-lg-offset-1 well" id="included">

					<div class="col-lg-12"><ul>
						<li>modenizer</li>
						<li>Bootstrap</li>
						<li>jQuery</li>
						<li>HTML 5 Boilerplay</li>
						<li>Compass Setup</li>
						<li>IE Conditional Set ups</li>
					</ul>
				</div></div>
			</div>
<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
		</div>
	</div>
	<div class="container">
		<!-- Example row of columns -->
<hr>
		<footer>
			<div class="container">
				<div class="col-lg-12 text-center">
<p id="footname">&copy; Chris Sprance</p>
				</div>
			</div>
		</footer>
		</div> <!-- /container -->
		<script src="js/vendor/jquery-1.11.0.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
<script>
$(document).ready(function(){
	var windowHeight = $(window).height();
	$(".homepage").css("height", windowHeight-100);
	$(".homepage").slideToggle(2500);
	var paths = $("#paths").height();
	$("#included").height(paths);
});
</script>
	</body>
</html>