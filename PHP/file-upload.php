<?php 
    // Database
    include 'config/database.php'; 
	$seq_id = 1 ;
			
	if (isset($_REQUEST['title'])){
		$title=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['title']);
		$title=htmlspecialchars($title);
		
		
		if($seq_id==1){
		$UPDATE = $conn->query("UPDATE aajkedarshan
								SET SEQ_ID = (case when SEQ_ID = '4' then ''
								when SEQ_ID = '3' then '4'
								when SEQ_ID = '2' then '3'
								when SEQ_ID = '1' then '2'
								end)
								WHERE SEQ_ID in ('5', '4', '3','2','1');");	
			
		}
			
		
	}
	if (isset($_REQUEST['description'])){
		$description=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['description']);
		$description=htmlspecialchars($description);
		
	}

    if(isset($_POST['submit'])){
		

        
        $uploadsDir = "uploads/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Validate if files exist
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
            
            // Loop through file items
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = $_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));               
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$targetFilePath."','".$title."','".$description."','".$seq_id."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                    $insert = $conn->query("INSERT INTO aajkedarshan (images,title,description,seq_id) VALUES $sqlVal");
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

        } else {
            // Error
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );
        }	
	} 
	


?>