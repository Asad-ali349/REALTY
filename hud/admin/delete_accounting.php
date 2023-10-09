<?php
include_once("../db/db.php"); 

$iD=$_GET['id'];
$case_id=$_GET['case_id'];


// delete Case Docs
$get_docs=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM property_accounting where id='$iD'"));

if(unlink($get_docs['bill_image'])){
    $query="DELETE FROM property_accounting WHERE id=".$iD;
    $delete_case=mysqli_query($conn,$query);
};


if ($delete_case==true ) {
	
	header("Location: view_accounting.php?case_id=".$case_id);
}else{
	$_SESSION['msg']=$conn->error;
	header("Location: view_accounting.php?case_id=".$case_id);
}


?>


