<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Halaman Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/login.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 login-from">
            <h4><em class="glyphicon glyphicon-log-in"></em>  Halaman Login</h4>

            <?php 
                include_once("koneksi.php"); 
                 if( isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) { 
                    $username = $_POST['txtUsername'];
                    $password = $_POST['txtPassword'];
        
                    $query = "SELECT username, password FROM admin ". 
                    " WHERE username = '$username' AND password = '$password'"; 
        
                    $result = mysqli_query($conn, $query);
        
                    if($result->num_rows > 0){
                            header("Location: lumino/index.php"); 
                            exit; 
                    }else{ 
                        echo "Login Failed <br/>"; 
                    } 
                } 
            ?>

            <form action="<?PHP $_PHP_SELF ?>"  method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="txtUsername" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="txtPassword" placeholder="Password" />
                </div>
                <div class="text-right">
                    <button type="submit" name="Login" id="Login" class="btn btn-primary" value="Login">Login</button>
                </div>
            </form>
                <p class="return-home"><a href="index.php"><em class="glyphicon glyphicon-menu-left"></em>Halaman Depan</a></p>      
        </div>
    </div>
</div> <!-- End container -->

    <!-- memanggil file js -->  
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>	
