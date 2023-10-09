<?php
   include_once("../db/db.php");
  
   $case_id=$_POST['case_id'];
      
    // $count=0;  
      $msg="";
      foreach($_FILES["file"]["name"] as $key=>$name) {
         
         $image_Name = uniqid().date("Y-m-d-H-i-s").$_FILES['file']['name'][$key];
          
         // File path configuration
         $uploadDir = "Case_Gallery/";
         $fileName = basename($_FILES['file']['name'][$key]);
         $uploadFilePath = $uploadDir.$image_Name;

         if (move_uploaded_file($_FILES['file']['tmp_name'][$key], $uploadFilePath)) {
            $add_doc=mysqli_query($conn,"INSERT INTO case_images(case_id, image_url) VALUES('$case_id','$uploadFilePath')");
            
         }
      } 
      if ($add_doc==true) {
        $msg=$case_id;
        
    }  

    header('content-Type:application/json');
    echo json_encode($case_id);
     
                     

?>