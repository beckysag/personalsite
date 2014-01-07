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
							<li><a href="/about">About</a></li>
							<li><a href="/resume">Resume</a></li>
							<li><a href="">Projects</a></li>
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

					<div class="projectPage">
						<div>
							<ul>

								<!-- UNIQIFY -->
								<li class="project">
									<h2>Uniqify<span>2013</span></h2>
									<h3>Multiprocess Unique Word Finder</h3>				
									<p class="git">
										<a target="_blank" href="https://github.com/beckysag/uniqify">View on Github</a></p>				
									<p>Uniqify reads a text file and outputs the unique words in the file, sorted in 
										alphabetic order, with the count of the occurrence of each word. It uses 
										multiple processes to parallelize the word sorting and counting, and creates 
										a series of pipes to communicate between the sub-processes that do the 
										sorting.</p>
									<div class="project-tech">Technologies used: C</div>
								</li>
			
			
								<!-- ARCHIVER -->
								<li class="project">
									<h2>File Archive Utility<span>2013</span></h2>
									<h3>Mimics Unix ar command</h3>
									<p class="git">
										<a target="_blank" href="https://github.com/beckysag/archiver">View on Github</a></p>
									<p>This program mimics portions of the UNIX “ar” utility by maintaining a 
										UNIX archive library, in the standard archive format, and 
										appending, extracting, deleting, and printing from the archive files. 
										Files created and/or modified with this program are fully compatible 
										with standard UNIX archive files. </p>
									<div class="project-tech">Technologies used: C</div>
								</li>

			
								<!-- PRIME FINDER -->
								<li class="project">
									<h2>Prime Number Finder<span>2013</span></h2>
									<h3>Two parallelized implementations of the Sieve of Eratosthenes</h3>
									<p class="git">
										<a target="_blank" href="https://github.com/beckysag/prime-finder">
										View on Github</a></p>				
									<p>Two versions, both find all prime numbers less than a user-specified candidate number:</p>				
									<h4>Threaded implementation</h4>
									<p>This version uses POSIX threads with implicit memory sharing to find the prime numbers 
										in a given range, and keeps track of them with a bitmap (bit array) in the heap.</p>
									<h4>Multi-process/shared memory implementation</h4>
									<p>This version uses multiple processes and POSIX shared memory. It forks a 
										specified number of child processes, and creates a shared memory object to which the 
										sub-processes will attach. A bitmap, located in a shared memory object, is used to 
										store the results of the prime number checking.</p>
									<div class="project-tech">Technologies used: C, POSIX Threads, POSIX shared memory</div>
								</li>


								<!-- BITMAP LINKED LIST -->
								<li class="project">
									<h2>Bitmap Linked List<span>2011</span></h2>
									<p class="git">
										<a target="_blank" href="https://github.com/beckysag/bitmap-linked-list">
											View on Github</a></p>
									<h3>Creates and displays linked list of bitmaps using CImg library</h3>
									<p>Implements a parameterized Linked List that handles bitmap files, 
										creates a linked list of bitmaps using CImg's CImgList() object, and 
										displays the images on the screen.</p>
									<div class="project-tech">Technologies used: C++, Mac OS X, X11</div>
								</li>


								<!-- TSP -->
								<li class="project">
									<h2>Traveling Salesman<span>2013</span></h2>
									<p class="git">
										<a target="_blank" href="https://github.com/beckysag/traveling-salesman">View on Github</a></p>
									<h3>C++ Implementation using Christofides and 2-Opt</h3>
									<p><ol>
										<span>Uses Christofides’ algorithm to construct a tour:</span>
										<li>Find a minimum spanning tree T of G</li>
										<li>Let O be the set of vertices with an odd degree in T</li>
										<li>Find a minimum cost perfect matching M for these vertices</li>
										<li>Add M to T to obtain multigraph H</li>
										<li>Find a Eulerian tour of H</li>
										<li>Convert the Eulerian tour into Hamiltonian path by skipping visited 
											nodes (using shortcuts)</li>
										<span>Then uses the 2-opt algorithm to improve it:</span>
										<li>Apply the 2-opt improvement algorithm to optimize the path.
										</li>
									</ol></p>
									<div class="project-tech">Technologies used: C++</div>
								</li>
			
			
								<!-- FTP -->
								<li class="project">
									<h2>FTP<span>2013</span></h2>
									<p class="git">
										<a target="_blank" href="https://github.com/beckysag/ftp">View on Github</a></p>
									<h3>Simple implementation of a file transfer program</h3>
									<p>Simple implementation of a file transfer program. It includes custom 
										client and server programs that provide functionality to authenticate a 
										user, list remote files, and retrieve remote files.</p>
									<div class="project-tech">Technologies used: C</div>
								</li>

			
								<!--li class="project">
									<h2>Maximum sub-array Problem</h2>
									<p class="git"><a target="_blank" href="https://github.com/beckysag/uniqify">View on Github</a></p>
									<div class="project-tech">Technologies used:</div>
								</li-->

							</ul>


						</div>
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
