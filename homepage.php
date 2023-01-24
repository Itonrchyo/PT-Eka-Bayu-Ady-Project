<?php 
    require 'connection.php';
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: formlogin.php');
        exit;
    }
    $email = $_SESSION['email'];
    $query  = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>  
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
     <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <a href="#" class="logo">Eka Bayu Ady</a>
            <!--- menu --->
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="datapangkalan.php">Data Pangkalan</a></li>
                <li><a href="suratjalan.php">Surat Jalan</a></li>
                <li><a href="datausers.php">Data Users</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

    <div class="container">
            <div class="col-sm-9 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
        <h1 class="pt-2">Selamat Datang <?= $data['name'] ?></h1>
    </div>
    </div>
            </div>
        </div>


        <footer>
        <p>Dibuat Oleh Ito Nurcahyo</p>
             
        <!--paragraph-->
        <p>Ini adalah beberapa akun media sosial saya,anda dapat menghubunginya.</p>
        <!--social-->
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
         
        <!--copyright-->
        <p class="copyright">Copyright by Ito Nurcahyo</p>
    </footer>
 
    <!--social-attach-bar-->
    <div class="social">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>

</body>
</html>