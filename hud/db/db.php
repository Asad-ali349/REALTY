<?php



$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "hud";

$conn = new mysqli($servername,$username,$passwordd,$dbname);


if(!$conn){
	die('Error Connect To db!');
}else {
	mysqli_query($conn,"SET NAMES 'utf8'");

}

?>