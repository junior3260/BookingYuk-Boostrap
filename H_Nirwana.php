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

$sql = "select * from manajement_hotel where judul='Hotel Nirwana'";
$result = mysqli_query($mysqli,$sql);
while ( $row = mysqli_fetch_array($result)) {
?>

<div class="container">
    <div class="jumbotron">
        <h1 style="text-align:center"><?php echo $row['judul'];?></h1><hr>
        <img src="lumino/gambar/<?php echo $row['file'];?>" class="img-thumbnail" alt="Gambar hotel nirwana" style="float:left; margin: 50px auto; width: 100%; height: auto;">
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
		            <h2>Joglo Bisnis</h2><hr>
		            	<img src="images/Nirwana/f7.nirwana.jpg" class="img-thumbnail" alt="Joglo Bisnis" width="250" height="350" style="float:left;">
		            	<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar yang unik dan menarik untuk menikmati keindahan alam Karimunjawa untuk pertama kalinya atau untuk liburan menyelam.
							   Joglo Bisnis terdapat banyak fasilitas didalamnya. Seperti Ac, Dapur, Almari, Tv, DVD, kulkas, Shower, Air panas dingin, kmar mandi luar.</p>
		            		<p><a class="button-booking">Rp.800.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Joglo Executive</h2><hr>
		           		 <img src="images/Nirwana/f12.nirwana.jpg" class="img-thumbnail" alt="Joglo Executive" width="250" height="350" style="float:left;">
		           		 <div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar yang unik dan menarik untuk menikmati keindahan alam Karimunjawa untuk pertama kalinya atau untuk liburan menyelam.
							   Joglo Executive terdapat banyak fasilitas didalamnya. Seperti Ac, Dapur, Almari,  kulkas, Tv, DVD, Shower, Air panas dingin, kamar mandi dalam.</p>
		            		<p><a class="button-booking">Rp.920.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Room Suite</h2><hr>
		           		 <img src="images/Nirwana/f2.nirwana.jpg" class="img-thumbnail" alt="Room Suite" width="250" height="350" style="float:left;">
						<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar yang unik dan menarik untuk menikmati keindahan alam Karimunjawa untuk pertama kalinya atau untuk liburan menyelam.
							   Room Suite terdapat banyak fasilitas didalamnya. Seperti Ac, Tv, DvD, Almari,  Shower, Air panas dingin, kamar mandi dalam.</p>
							<p><a class="button-booking">Rp.1.775.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Master Room</h2><hr>
		           		 <img src="images/Nirwana/f9.nirwana.jpg" class="img-thumbnail" alt="Master Room" width="250" height="350" style="float:left;">
						<div class="space-hotel col-sm-6 col-md-4 col-lg-6"> 
							<p>Tipe kamar yang unik dan menarik untuk menikmati keindahan alam Karimunjawa untuk pertama kalinya atau untuk liburan menyelam.
							   Master Room terdapat banyak fasilitas didalamnya. Seperti Ac, TV, DVD, Almari, Mini bar, Bathtub, Shower, Air panas dingin, kamar mandi dalam.</p>
							   <p><a class="button-booking">Rp.2.260.000</a> <a href="formulir.php" target="_blank" class="btn btn-success btn-lg">Booking Now</a></p>
		            	</div>
		        </div>
		    </div>
	  	</div>
	</div>

	<div class="panel panel-default panels-color menu-conten">
	  	<div class="panel-body">
			    	<h1>Fasilitas Hotel Nirwana</h1>
			<div class="row">
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Tidur</h2><hr>
		            	<img src="images/Nirwana/f10.nirwana.jpg" class="img-thumbnail" alt="Kamar Tidur" width="200" height="270" style="float:left;">
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Kamar Mandi</h2><hr>
		           		 <img src="images/Nirwana/f5.nirwana.jpg" class="img-thumbnail" alt="Kamar Tidur" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-6">
		            <h2>Meja Billiard</h2><hr>
		           		 <img src="images/Nirwana/f1.nirwana.jpg" class="img-thumbnail" alt="Meja Billiard" width="250" height="400" style="float:left;" >
		        </div>
		        <div class="clearfix visible-sm-block"></div>
		        <div class="col-sm-6 col-md-4 col-lg-4">
		            <h2>Lainnya</h2><hr>
		           		 <img src="images/Nirwana/f4.nirwana.jpg" class="img-thumbnail" alt="Lainnya" width="250" height="400" style="float:left;" >
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
