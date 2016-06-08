<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'
       ?>href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php require 'navigator.php'
       ?>
<!-- Panels --> 

<?php 
$mysqli = new mysqli('localhost','root','','bookingyuk');

$sql = "select * from manajement_hotel where judul='Hotel Wisma Apung'";
$result = mysqli_query($mysqli,$sql);
while ( $row = mysqli_fetch_array($result)) {
?>

<div class="container">
    <div class="jumbotron">
        <h1 style="text-align:center"><?php echo $row['judul'];?></h1><hr>
        <img src="images/Wisma Apung/wisma-apung.jpg" class="img-thumbnail" alt="Wisma Apung" style="float:left; margin: 50px auto; width: 100%; height: auto;" >
        <div class="menu-contact">
	            <p><?php echo $row['keterangan'];?></p>
        </div>
</div>
 <?php
}
?>
	<div class="panel panel-default panels-color menu-conten">
	  	<div class="panel-body">
			    	<h1>Fasilitas Hotel Wisma Apung</h1>
			<div class="row">
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Tidur</h2><hr>
		            	<img src="images/Wisma Apung/f2.Wisma Apung.jpg" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;">
		            	<div class="space-hotel col-sm-6 col-md-4 col-lg-6"></div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Mandi</h2><hr>
		           		 <img src="images/Wisma Apung/f7.Wisma Apung.jpg" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Ruang Makan</h2><hr>
		           		 <img src="images/Wisma Apung/f8.Wisma Apung.jpg" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-4">
		            <h2>Gratis Renang</h2><hr>
		           		 <img src="images/Wisma Apung/f5.Wisma Apung.jpg" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;" >
		        </div>
		    </div>
	  	</div>
	</div>
   
    <?php require 'footer.php'
       ?>
</div>

    <!-- memanggil file js --> 
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/scrollup.js"></script>
</body>
</html>
