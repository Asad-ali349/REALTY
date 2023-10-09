<?php
include_once("../db/db.php"); 

$iD=$_GET['id'];


$get_case=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM property_case where case_id='$iD'"));
unlink($get_case['primary_image']);


//delete Images of case
$get_docs=mysqli_query($conn,"SELECT * FROM case_images where case_id='$iD'");
if(mysqli_num_rows($get_docs)){
	while($data=mysqli_fetch_array($get_docs)){
		unlink($data['image_url']);
	}

}
$query="DELETE FROM case_images WHERE case_id=".$iD;
$delete_case_images=mysqli_query($conn,$query);


// delete Case Docs
$get_docs=mysqli_query($conn,"SELECT * FROM case_docs where case_id='$iD'");
if(mysqli_num_rows($get_docs)){
	while($data=mysqli_fetch_array($get_docs)){
		unlink($data['doc_url']);
	}

}
$query="DELETE FROM case_docs WHERE case_id=".$iD;
$delete_case_docs=mysqli_query($conn,$query);

$query="DELETE FROM property_case WHERE case_id=".$iD;
$delete_case=mysqli_query($conn,$query);


if ($delete_case==true ) {
	
	header("Location: history.php");
}else{
	
	
	header("Location: history.php");
}
?>


