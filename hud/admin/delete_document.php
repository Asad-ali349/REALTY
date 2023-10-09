<?php
include_once("../db/db.php"); 

$iD=$_GET['id'];
$table=$_GET['table'];
$page=$_GET['page'];


$get_doc_query="SELECT * FROM ".$table." where id=".$iD;

$get_docs=mysqli_query($conn,$get_doc_query);
if(mysqli_num_rows($get_docs)){
	while($data=mysqli_fetch_array($get_docs)){
		unlink($data['doc_url']);
	}

}

$query="DELETE FROM ".$table." WHERE id=".$iD;

$delete=mysqli_query($conn,$query);
if ($delete==true) {
	$_SESSION['success']="Deleted";
	$_SESSION['error']="";
	header("Location: ".$page);
}else{
	$_SESSION['success']="";
	$_SESSION['error']="You cannot delete because this data is used somewhere";
	header("Location: ".$page);
}
?>