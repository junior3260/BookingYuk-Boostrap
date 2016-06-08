<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'
       ?>
<body>
<?php require 'navigator.php'
       ?>
<!-- Panels --> 

<?php 
$mysqli = new mysqli('localhost','root','','bookingyuk');

$sql = "select * from manajement_hotel where judul='Hotel Cocohuts'";
$result = mysqli_query($mysqli,$sql);
while ( $row = mysqli_fetch_array($result)) {
?>

<div class="container">
    <div class="jumbotron">
        <h1 style="text-align:center"><?php echo $row['judul'];?></h1><hr>
        <img src="images/Cocohuts/f4.Cocohuts.jpg" class="img-thumbnail" alt="Cocohuts Inn" style="float:left; margin: 50px auto; width: 100%; height: auto;" >
        <div class="menu-contact">
	            <p><?php echo $row['keterangan'];?></p>
        </div>
</div>
 <?php
}
?>
	<div class="panel panel-default panels-color menu-conten">
	  	<div class="panel-body">
			<h1>Jenis Kamar</h1>
			<div class="row">
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Superior Room</h2><hr>
		            	<img src="images/Cocohuts/f6.Cocohuts.jpeg" class="img-thumbnail" alt="Superior Room" width="250" height="350" style="float:left;">
		            	<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Dua kamar semacam ini tersedia. Kamar memiliki AC, di dalam kamar mandi, lantai keramik, tempat tidur ganda, dan teras. Rumah adalah rumah etnik Jawa diangkut dari sebuah desa di Jawa tengah dan direnovasi di situs.</p>
		            		<p><a class="button-booking">Rp.400.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Deluxe Bungalow</h2><hr>
		           		 <img src="images/Cocohuts/f6.Cocohuts.jpg" class="img-thumbnail" alt="Deluxe Bungalow" width="250" height="350" style="float:left;">
						<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Bungalow ini memiliki balkon, pandangan dan swasta masuk. lantai pertama dilengkapi dengan kamar mandi dan ruang duduk, sementara kamar tidur di lantai dua. Kedua lantai memiliki balkon dengan pemandangan yang luar biasa. Balkon lantai dua yang sempurna untuk melihat bintang.</p>
							<p><a class="button-booking">Rp.600.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Economy Twin Room</h2><hr>
		           		 <img src="images/Cocohuts/f7.Cocohuts.jpg" class="img-thumbnail" alt="Economy Twin Room" width="250" height="350" style="float:left;">
						<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Kamar twin ini memliki lanti ubin / marmer, pintu masuk pribadi dan area tempat duduk dengan ciri khas bangunan jawa asli</p>
							   <p><a class="button-booking">Rp.300.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Bungalow</h2><hr>
		           		 <img src="images/Cocohuts/f5.Cocohuts.jpg" class="img-thumbnail" alt="Bungalow" width="250" height="350" style="float:left;">
		           		 <div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Bungalow ini memiliki dua pintu masuk pribadi , area tempat duduk dan pemandangan laut yang indah di atas bukit karimunjawa. Ini lengkapi UMC TV AC WIFI dan fasilitas lainnya yang terdapat didalamnya.</p>
		            		<p><a class="button-booking">Rp.500.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		    </div>
	  	</div>
	</div>


	<div class="panel panel-default panels-color menu-conten">
	  	<div class="panel-body">
			    	<h1>Fasilitas Hotel COCOHUTS</h1>
			<div class="row">
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Tidur</h2><hr>
		            	<img src="images/Cocohuts/f1.Cocohuts.jpg" class="img-thumbnail" alt="Kamar Tidur" width="250" height="400" style="float:left;">
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Mandi</h2><hr>
		           		 <img src="images/Cocohuts/f2.Cocohuts.jpg" class="img-thumbnail" alt="Kamar Mandi" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>TV dan AC</h2><hr>
		           		 <img src="images/Cocohuts/f3.Cocohuts.jpg" class="img-thumbnail" alt="TV dan AC" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-4">
		            <h2>Lainnya</h2><hr>
		           		 <img src="images/Cocohuts/f8.Cocohuts.jpg" class="img-thumbnail" alt="Lainnya" width="250" height="400" style="float:left;" >
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
