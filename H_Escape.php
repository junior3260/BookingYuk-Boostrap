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

$sql = "select * from manajement_hotel where judul='Hotel Escape'";
$result = mysqli_query($mysqli,$sql);
while ( $row = mysqli_fetch_array($result)) {
?>

<div class="container">
    <div class="jumbotron">
        <h1 style="text-align:center"><?php echo $row['judul'];?></h1><hr>
        <img src="images/Escape/escape.jpg" class="img-thumbnail" alt="ESCAPE" style="float:left; margin: 50px auto; width: 100%; height: auto;" >
        <div class="menu-contact">
	            <p><?php echo $row['keterangan'];?><p>
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
		            <h2>Suite Room AC</h2><hr>
		            	<img src="images/Escape/SR.escape1.jpg" class="img-thumbnail" alt="Suite Room AC" width="250" height="350" style="float:left;">
		            	<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar ini di fasilitasi AC + TV + bathroom + Almari + Shower + kamar mandi dalam.</p>
		            		<p><a class="button-booking">Rp.528.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Standart Deluxe AC</h2><hr>
		           		 <img src="images/Escape/DL.escape1.jpg" class="img-thumbnail" alt="Standart Deluxe AC" width="250" height="350" style="float:left;">
		           		 <div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar ini menarik untuk menikmati keindahan pantai Karimunjawa dari atas untuk pertama kalinya atau untuk liburan. Didalamnya ada beberapa fasilitas seperti AC + bathroom + Almari + Shower + kamar mandi dalam.</p>
							<p><a class="button-booking">Rp.462.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Standart Room AC</h2><hr>
		           		 <img src="images/Escape/SR.escape2.jpg" class="img-thumbnail" alt="Standart Room AC" width="250" height="350" style="float:left;">
						<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar ini sangat cocok untuk menikmati langsung pesisir pantai Karimunjawa karena letak kamarnya di bawah. Didalamnya ada beberapa fasilitas seperti AC + bathroom + Almari + Shower + kamar mandi dalam.</p>
							<p><a class="button-booking">Rp.396.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Fan Room</h2><hr>
		           		 <img src="images/Escape/fan.room.jpg" class="img-thumbnail" alt="Fan Room" width="250" height="350" style="float:left;">
						<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar sederhana dan cocok untuk kelas bawah-menengah dengan desain sederhana namun banyak fasilitas didalamnya seperti AC + bathroom + Almari + Shower + kamar mandi dalam.</p>
							   <p><a class="button-booking">Rp.198.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		    </div>
	  	</div>
	</div>

	<div class="panel panel-default panels-color menu-conten">
	  	<div class="panel-body">
			    	<h1>Fasilitas Hotel Escape</h1>
			<div class="row">
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Tidur</h2><hr>
		            	<img src="images/Escape/f.escape.jpg" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;">
		            	<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Mandi</h2><hr>
		           		 <img src="images/Escape/f2.escape.JPG" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Parkir Luas</h2><hr>
		           		 <img src="images/Escape/parkir.jpg" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-4">
		            <h2>Lainnya</h2><hr>
		           		 <img src="images/Escape/pesisir.escape.jpg" class="img-thumbnail" alt="Gambar malas ngoding" width="250" height="400" style="float:left;" >
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
