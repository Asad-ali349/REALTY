<?php  
    include_once("../db/db.php");
 
// if(!empty($_FILES)){
    $case_id=$_GET['case_id'];
   $image_Name = uniqid().date("Y-m-d-H-i-s").$_FILES['file']['name'];
   
   // File path configuration
   $uploadDir = "Case_Gallery/";
   $fileName = basename($_FILES['file']['name']);
   $uploadFilePath = $uploadDir.$image_Name;

       // Upload file to server
      if( move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){


           // Insert file information in the database
           $add_doc=mysqli_query($conn,"INSERT INTO case_images(case_id, image_url) VALUES('$case_id','$uploadFilePath')");
       
       
      }
                      
    // }

?>