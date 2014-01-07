<?php 
if (isset($_POST['send'])) {	// Send email
	$to = 'becky.sagalyn@gmail.com';
	$subject = 'Email from: ' . $_POST['name'];
	$message = $_POST['message'];
	$message = wordwrap($message, 70, "\r\n");
	$email = $_POST['email'] ;
	mail($to, $subject, $message, 'From: ' . $email);
}
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<title>Rebecca Sagalyn</title>

	<meta name="description" content="Personal webpage of Rebecca Sagalyn">
	<meta name="author" content="Rebecca Sagalyn">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS ================================================== -->
	<link href="../css/style.css" media="screen, projection" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" type="text/css">

	<!-- JavaScript ================================================== -->
	<script src="../js/modernizr.js"></script>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="../js/scripts.js"></script>

	<!-- Favicon ================================================== -->
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">

</head>


<body>
	<div class="container">

		<!-- LEFT COLUMN -->
		<div class="left-col">
			<div class="nav-wrapper">
				<header id="header" class="inner">

					<!-- My Name -->
					<div id="header-title">
						<h1><span><a href="">Rebecca Sagalyn</a></span></h1>
					</div>
										
					<!-- Nav Menu -->
					<nav id="main-nav">
						<ul class="main-navigation">
							<li><a href="/">Home</a></li>
							<li><a href="">About</a></li>
							<li><a href="/resume">Resume</a></li>
							<li><a href="/projects">Projects</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</nav>					

					<!--Social Media-->
					<nav id="social-nav">
						<div class="social">		
							<h4 class="heading">Connect with me</h4>
							<a class="github" target="_blank" href="https://github.com/beckysag" 
								title="GitHub">GitHub</a>
							<a class="linkedin" target="_blank" 
								href="http://www.linkedin.com/in/rebeccasagalyn">LinkedIn</a>
						</div>
					</nav>

				</header>				
			</div>
		</div>	
		



		<!-- MAIN COLUMN -->
		<div class="mid-col">

			<div class="border-col"></div>	

			<div class="mid-col-container">
				<div id="content" class="inner">

					<div class="aboutPage">	

						<h1>*Under Construction*</h1>

					</div>    				

				</div>
			</div>
		</div>

	</div>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45496107-3', 'rebeccasagalyn.com');
  ga('send', 'pageview');

</script>
	
</body>
</html>
