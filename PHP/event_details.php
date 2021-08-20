<?php include("file-upload2.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/style.css">


  <title>upload</title>
  <style>
    html{

	}
    body {

	
	

  margin-bottom: 0px;
	padding: 0;
	font-family: 'Arial', sans-serif;
	background: linear-gradient(#F1EEE6,#F1EEE6);	
	}



    .container {

	margin: 10px auto;
	top: 50%;
	left: 50%;
	  width:400px;
	  height:40%;
	  padding:40px;
      max-width: 450px;
	  color:#fff;
	
	background: rgba(220, 53, 69);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.6);
	border-radius: 10px;
	}
	
	.container .user-box {
	position: relative;
	}
    
	.container .user-box input {
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #F1EEE6;
	margin-bottom: 30px;
	border: none;
	border-bottom: 1px solid #F1EEE6;
	outline: none;
	background: transparent;
	}
	.container .user-box label {
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #F1EEE6;
	pointer-events: none;
	transition: .5s;
	}
	.container .user-box input:focus ~ label, .container .user-box input:valid ~ label {
	top: -20px; 
	left: 0px; 
	color: #03E9F4;
	font-size: 12px;
}
	
	
	
	
    .imgGallery img {
      padding: 8px;
      max-width: 100px;
    }    
  </style>
</head>

<body>
     <!-- nav -->
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item "><a href="dashboard.php" class="nav-link">Dashboard</a></li>
	        	
	        	<li class="nav-item active"><a href="event_details.php" class="nav-link">EVENT Details</a></li>
				<li class="nav-item"><a href="gallery_upload.php" class="nav-link">Gallery upload</a></li>
	        	<li class="nav-item"><a href="aajkedarshan_upload.php" class="nav-link">AAJ ke DARSHAN upload</a></li>
	          <li class="nav-item"><a href="expenses_upload.php" class="nav-link">Expenses upload</a></li>
	    
	        </ul>
			<ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="../index.html" class="nav-link"  >Logout</a></li>
			</ul>	
	      </div>
	    </div>
	  </nav>
     <!-- END nav -->


  <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
      <h3 class="text-center mb-5">EVENT DETAILS</h3>
	  <div class="user-box">
			<input type="text" name="title" required>
			<label>EVENT TITLE</label>
		</div>
	  <div class="user-box">
			<input type="date" name="description">
			<label>Date of Event</label>
		</div>




      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        Upload Details
      </button>
    </form>

    <!-- Display response messages -->
    <?php if(!empty($response)) {?>
        <div class="alert <?php echo $response["status"]; ?>
           <?php echo $response["message"]; ?>
        </div>
    <?php }?>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(this, 'div.imgGallery');
      });
    });    
  </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>