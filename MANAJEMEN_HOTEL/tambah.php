<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Forms</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

</head>
<?php 
$mysqli = new mysqli('localhost','root','','bookingyuk');
?>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span>Admin</span>Bookingyuk</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="../index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="../widgets.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li class="active"><a href="viewdata.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Management Hotel</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Jenis Kamar 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Hotel Nirwana
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Hotel Escape
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Hotel Wisma Apung
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Hotel Cocohuts Inn
						</a>
					</li>
				</ul>
			</li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" style="font-size:200%;padding-left:30px">Management Hotel</div>
					<div class="panel-body">
						<div class="col-md-6">
							<h4>Tambah Data</h4><br/>
							<form role="form" method="post" action="#" enctype="multipart/form-data">
								<div class="form-group">
									<label style="font-weight:normal">Nama Hotel</label>
									<input name="nama" class="form-control">
								</div>
								
								<div class="form-group">
									<label style="font-weight:normal">Gambar Hotel</label>
									<input type="file" id="fupload" name="fupload">
								</div>
								<table>
									<tr>
										<td><a id="i"></a></td>
									</tr>
								</table>
								<div class="form-group">
									<label style="font-weight:normal">Keterangan Hotel</label>
									<textarea name="keterangan" class="form-control" rows="3" style="height:200px"></textarea>
								</div>
								<input type="submit" id="simpan" name="simpan" class="btn btn-primary" value="Simpan">
								<button type="reset" class="btn btn-default">Reset Button</button>
								<button class="btn btn-default" onclick="history.back(-1)">Back</button>
								
							</div>
							<?php
								if (isset($_POST['simpan'])) {
									$nama = $_POST['nama'];
									$ket = $_POST['keterangan'];

									$lokasi_file = $_FILES['fupload']['tmp_name'];
									$nama_gambar = $_FILES['fupload']['name'];

									$folder = "../gambar/$nama_gambar";

									if (move_uploaded_file($lokasi_file, "$folder")) {
										$sql = "insert into manajement_hotel set judul='$nama', file='$nama_gambar', keterangan='$ket'  ";	
										mysqli_query($mysqli, $sql);
										if ($sql) {
												?><script>                    <p class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</p></script> <?php	
											}
									}else{
										echo "gagal simpan";
									}
								}
							?>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="../js/image_preview.min.js"></script>
	<script src="../js/script.js"></script>
	<!--js animasi menu drowpdown-->	
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>

</html>
