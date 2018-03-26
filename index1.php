<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Review Your Doctor</title>

		<!-- Loading third party fonts -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
                <style>
input:hover{
     background-color:cyan;
}
input
{
   color:red; 
   background:white;
   border-radius:10px;
}
</style>
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
 <script type="text/javascript">
                function display()
{

 $.post( 
                  "display1.php",
                  function(data) {
                    
 $('#dr').html(data);
document.querySelector('#dr').addEventListener("click", update);

                  }
               );


  

}

function update(event)
{
   event.preventDefault();      
 if($(event.target).is("a"))
{
     localStorage.doc=$(event.target).attr('class');
     window.location="comment.html" ;    
}
else
{
	var ud=document.getElementById("dra").innerHTML;			
               $.post( 
                  "max.php",
              { name:$(event.target).attr('class'),rating:$(event.target).val(),user:ud },
                  function(data) {
                     alert(data);
                  }
               );
}			   
}
 
               </script>

	</head>
	<body onload="display()">
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index1.php" id="branding">
						
						<div class="logo-copy">
							<h1> <?php  session_start();echo "Hello ".$_SESSION['username'];?></h1>
							
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
					        <li class="menu-item"><a href="index1.php">Home</a></li>
						<li class="menu-item"><a href="logged.php">Comments</a></li>
	                                        <li class="menu-item"><a href="logout.php">Logout</a></li>
						</ul> <!-- .menu -->

						<form action="search.php" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-12">
								<div class="slider">
									<ul class="slides">
										<li><a href="#"><img src="./d1.jpg" alt="Slide 1"></a></li>
										<li><a href="#"><img src="./d2.jpg" alt="Slide 2"></a></li>
										<li><a href="#"><img src="./d3.jpg" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>
						
						</div> <!-- .row -->
						<!-- .row -->
					
						<div class="row" id="dr">
							
						</div>
					</div>
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
<div id="dra" style="visibility:hidden;"><?php echo $_SESSION['username']; ?></div>
		<!-- Default snippet for navigation -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>