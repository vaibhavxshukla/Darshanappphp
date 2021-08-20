<?php include("file-upload.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/style.css">


  <title>Dashboard</title>
  <style>
  
  </style>
</head>

<body>
<?php
$mysqli = new mysqli('localhost','root','','filexmgmt');

?>

     <!-- nav -->
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
	        	
	        	<li class="nav-item"><a href="event_details.php" class="nav-link">EVENT Details</a></li>
				<li class="nav-item"><a href="gallery_upload.php" class="nav-link">Gallery upload</a></li>
	        	<li class="nav-item"><a href="aajkedarshan_upload.php" class="nav-link">AAJ ke DARSHAN upload</a></li>
	          <li class="nav-item"><a href="expenses_upload.php" class="nav-link">Expenses upload</a></li>
	    
	        </ul>
			<ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="../index.html" class="nav-link" >Logout</a></li>
			</ul>	
	      </div>
	    </div>
	  </nav>
     <!-- END nav -->
	 
	 
	 <div class="card mx-auto text-white badge-danger" style="height: 20rem; width:50:rem; ">
					 
					  <div class="card-body mx-auto ">
						<h2 class="card-title">Event</h2>
						<p class="card-text">Event Name:<?php
										$result = $mysqli->query("SELECT title FROM event_details WHERE id=1;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['title']);
										}
										?></p>	
						<p class="card-text">Date:<?php
										$result = $mysqli->query("SELECT description FROM event_details WHERE id=1;");
	
										while($data = $result->fetch_assoc()) {
										print_r($data['description']);
										}
										?></p></p>
						<!--<p class="card-text">Venue:from DB</p>-->
						<a href="Events.php" class="btn btn-primary">More</a>
					  </div>
	</div>


  </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>