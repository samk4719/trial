<?php

include("inc_dbConfig.php");
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    
    /*if(!isset($_FILES["uploadfile"]["name"])){
        
        echo "Please select the file and try again.";
    
    }else{*/
    
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/studio/" . $filename;
    
    $db = mysqli_connect($host, $username, $password, $dbname);
    
    // Get all the submitted data from the form
    $sql = "INSERT INTO studio (filename) VALUES ('$filename')";
    
    // Execute query
    mysqli_query($db, $sql);
    
    // Now let's move the uploaded image into the folder: image
    if(move_uploaded_file($tempname, $folder)) {
        echo "Image uploaded successfully!";
    } else {
        echo "Failed to upload image!";
    }
    
    //}
}
?>