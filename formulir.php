<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'
       ?>
<body>
<?php require 'navigator.php'
       ?>
<div class="container">
    <div class="jumbotron panels-color" style="text-align:center">
        <h2>FORMULIR PEMESANAN</h2>
        
    <form class="form-horizontal">
            <div class="form-group">
                <label for="nama" class="col-xs-2">Nama</label>
                <div class="col-xs-4">
                    <input type="text" name="nama" class="form-control" placeholder="Nama anda" />
                </div>
            </div>

            <div class="form-group">
                <label for="email"  class="col-xs-2">Email</label>
                <div class="col-xs-4">
                    <input type="text" name="email" class="form-control" placeholder="Email anda" />
                </div>
            </div>
            <div class="form-group">
                <label for="telpon"  class="col-xs-2">Telepon</label>
                <div class="col-xs-4">
                    <input type="text" name="telepon" class="form-control" placeholder="No Tlp anda" />
                </div>
            </div>
            <div class="form-group">
                <label for="Jenis Hotel"  class="col-xs-2">Jenis Hotel</label>
                <div class="col-xs-4">
                    <input type="text" name="Jenis_Hotel<" class="form-control" placeholder="Nama Hotel, Tipe" />
                </div>
            </div>
            <div class="form-group">
                <label for="pesan"  class="col-xs-2">Pesan</label>
                <div class="col-xs-4">
                    <textarea name="pesan" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-10">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </div>
        </form>
    </div>

    
    <?php require 'footer.php'
       ?>
</div>

    <!-- memanggil file js --> 
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>