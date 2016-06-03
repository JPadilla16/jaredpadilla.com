<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "MY PAGE TITLE";
/*load head-utils.php*/
require_once("php/partials/headutils.php");
?>
	<body class ="sfooter">
		<div class="sfooter-content">
			<!--Header-->
			<header class="p-a-2">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">JARED PADILLA</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">About <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="https://github.com/JPadilla16" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i>
									</a></li>
								<li><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
									</a></li>
								<li><a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
									</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--Secion of Welcoming-->
			<section id="welcome" class="p-y-4">
				<div class="container">
					<div class="jumbotron">
						<h1>Welcome</h1>
						<p>words of awesomeness.</p>
					</div>
				</div>
			</section>
			<!--Page content Here.-->
		</div>

		<footer class="p-y-4">
			<div class="container">
				<div class="copyright text-left">
					&copy; 2016 Jared Padilla
				</div>
			</div>
		</footer>
	</body>
</html>