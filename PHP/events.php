<!doctype html>
<html lang="en">
  <head>
  	<title>Shri Ram Parivar Navdurga Durgapuja Samiti</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/style.css">

	</head>


	
	<body>
	
<?php
$mysqli = new mysqli('localhost','root','','filexmgmt');

?>

	<section class="ftco-section">
		<div class="container-fluid">

		<!-- Top Image -->
			<div class="row ">
				
					<a href="#" class="branding">
						<img src="images/brand-image.jpg" alt="" width="100%">	
					</a>
				
			</div>
		</div>
		<!-- End Top Image -->


		
     <!-- nav -->
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item "><a href="../index.html" class="nav-link">Home</a></li>
	        	
	        	<li class="nav-item active"><a href="events.html" class="nav-link">EVENTs</a></li>
				<li class="nav-item "><a href="gallery.php" class="nav-link">Gallery</a></li>
	        	<li class="nav-item "><a href="../memberdetails.html" class="nav-link">Member-details</a></li>
	          <li class="nav-item"><a href="../contactus.html" class="nav-link">Contact us</a></li>
	          <li class="nav-item"><a href="../aboutus.html" class="nav-link">About us</a></li>
	        </ul>
			<ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="" class="nav-link" data-toggle="modal" data-target="#elegantModalForm" >Login</a></li>
			</ul>	
	      </div>
	    </div>
	  </nav>
     <!-- END nav -->
    </section>





<!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Login</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->

        <!--Body-->
      <div class="modal-body mx-4">
	  <form action="login/login2.php" method="post">


        <div class="md-form mb-4">
          <input type="email"  name="uname" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
        </div>

        <div class="md-form pb-3">
          <input type="password" name="password" id="Form-pass1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>

        </div>
		
			<div class="checkbox">
			  <input type="checkbox" id="remember-me">
			  <label for="remember-me">Remember me</label>
			</div>

        <div class="text-center mb-3">
          <button type="submit" class="btn bg-dark text-white">Login</button>
        </div>
     

		</form>
      </div>
      <!--Footer-->
    
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->



<br>
<div class="fullwidth-block text-center">
					<div class="container">
						<h2 class="section-title">AAJ KE DARSHAN</h2>

						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="news">
										
										<?php 
										$result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=1;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=1;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										
										}
										?>
										<br>
										<?php
										//$result = $mysqli->query("SELECT description FROM aajkedarshan WHERE seq_id=1;");
	
										//while($data = $result->fetch_assoc()) {
										//print_r($data['description']);
										//}
										?>
										<br>
								
								
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<?php $result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=2;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=2;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?>
									
								
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<?php $result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=3;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=3;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?>
									
									
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<?php $result = $mysqli->query("SELECT images FROM aajkedarshan WHERE seq_id=4;");
	
										while($data = $result->fetch_assoc()) {
										echo "<img src='{$data['images']}' width='250px' height='340px'>";
										}
										$result = $mysqli->query("SELECT title FROM aajkedarshan WHERE seq_id=4;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?>
									
								
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->




















	<!-- Site footer -->
	<footer class="site-footer bg-dark ">
		<div class="container">
			<br>
		  <div class="row">
			<div class="col-sm-12 col-md-6">
				
			  <h6>About</h6>
			  <ul class="address">
				<li><i class="fa fa-map-marker"></i> 9th main, 2nd Cross, Begur Main Road, Hogasandra, Bengaluru- 560068</li>
				<li><i class="fa fa-phone"></i> 9738885802/9886194886/9060699109</li>
				<li><i class="fa fa-envelope"></i> <a href="mailto:anujsingh75@gmail.com">anujsingh75@gmail.com</a></li>
			</ul>
			</div>
  
			<div class="col-xs-6 col-md-3">
			  <h6>LATEST UPDATE</h6>
			  <ul class="footer-links">
				<li><a href="#">Pooja Details</a></li>

			  </ul>
			</div>

		  </div>
		  <hr>
		</div>
		<div class="container">
		  <div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
			  <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
		   <a href="#">Darshanapp.com</a>.
			  </p>
			</div>
  
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <ul class="social-icons">
				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
  
			  </ul>
			</div>
		  </div>
		</div>
    </footer>










	




	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>

	</body>
</html>

