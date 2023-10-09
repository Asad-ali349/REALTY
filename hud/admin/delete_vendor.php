<?php
include_once("../db/db.php"); 

$iD=$_GET['id'];



// delete Case Docs
$get_docs=mysqli_query($conn,"SELECT * FROM vendor_docs where vendor_id='$iD'");
if(mysqli_num_rows($get_docs)){
	while($data=mysqli_fetch_array($get_docs)){
		unlink($data['doc_url']);
	}

}
$query="DELETE FROM vendor_docs WHERE vendor_id=".$iD;
$delete_case_docs=mysqli_query($conn,$query);

$query="DELETE FROM vendors WHERE id=".$iD;
$delete_case=mysqli_query($conn,$query);


if ($delete_case==true ) {
	$_SESSION['msg']="deleted";
	header("Location: view_vendors.php");
}else{
	
	$_SESSION['msg']=$conn->error;
	header("Location: view_vendors.php");
}


?>


