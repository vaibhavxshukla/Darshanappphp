<?php 
    // Database
    include 'config/database.php'; 
	
	if (isset($_REQUEST['title'])){
		$title=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['title']);
		$title=htmlspecialchars($title);
		
	}
	if (isset($_REQUEST['description'])){
		$description=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['description']);
		$description=htmlspecialchars($description);
		
	}

    if(isset($_POST['submit'])){
		
		$sqlVal = "('".$title."','".$description."')";
		if(!empty($sqlVal)) {
                    $insert = $conn->query("INSERT INTO event_details (title,description) VALUES $sqlVal");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
        

      


    } 
		}
	}
?>