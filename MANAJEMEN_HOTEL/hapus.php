<?php
$mysqli = new mysqli('localhost','root','','bookingyuk');

$file = $_GET['file'];
$hap = unlink('../gambar/'.$file);
if ($hap) {
	$sql = "delete from manajement_hotel where file='$file'";
	mysqli_query($mysqli, $sql);
	if ($sql) {
		header("location:viewdata.php");
	}
}
?>
