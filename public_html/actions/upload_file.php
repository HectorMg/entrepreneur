<?php
$target_dir = "../files_uploaded/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
        header("location:../congreso.php?file=fail1#upload");
    }
    // Check if file already exists
	if (file_exists($target_file)) {
	    $uploadOk = 0;
	    header("location:../congreso.php?file=fail2#upload");
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    $uploadOk = 0;
	    header("location:../congreso.php?file=fail3#upload");
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    $uploadOk = 0;
	    header("location:../congreso.php?file=fail4#upload");
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 1) {
    	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    	header("location:../congreso.php?file=upl#upload");
	    } else {
	        header("locaiton:../congreso.php?file=fail#upload");
	    }
	
	}
}
?>