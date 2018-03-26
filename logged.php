<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> Review Your Doctor</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>
	<body>
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index1.php" id="branding">
						
						<div class="logo-copy">
							<h1 class="site-title">Review Your Doctor Here</h1>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="register.html">Sign up!</a></li>
							<li class="menu-item"><a href="login.html">Login</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
				<?php
	$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');
        session_start();
        $u=$_SESSION['username'];
 if($connec)
{
  
       
       


        
   
	 $qry=$connec->query("select user_comments.comments,doctors_list.name from user_comments,doctors_list where user='$u' and doctors_list.name=(select name from doctors_list where doctors_list.doc_id = user_comments.doc_id)");
	while($row=mysqli_fetch_assoc($qry)){
	echo "<div class='col-md-4' style='margin-top:20px;'>";
        echo "<span>You commented on ".$row['name']."&nbsp;"."-&nbsp;".$row['comments']."</span>";
        echo "</div>";
	}

							}	?>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>We allow users to rate and review their doctors through our website.</p>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li><a href="#"></a></li>
									<li><a href="#">Please contact us at</a></li>
									<li><a href="#">help@ryd.com</a></li>
									<li><a href="#">for help</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
									<li><a href="#">Pinterest</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>