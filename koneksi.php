<?php
$db_name = "bookingyuk";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";

$conn = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if(!$conn){
	echo "Conection Error...".mysqli_connect_error();
}
else{
	//echo "Sukses";
}
?>