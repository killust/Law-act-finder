<?php
include 'config.php';
session_start();

// Set fixed username and password
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'password'); // Change this to a secure password

// Check if the user is already logged in
if (!isset($_SESSION['username'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verify the username and password
        if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
            $_SESSION['username'] = $username;
        } else {
            echo "Invalid username or password.";
        }
    }
}

// Redirect if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Law act finder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>






<body>





<div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->





        <!-- Content Start -->
        <div class="content open">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="dashboard.php" class="navbar-brand mt-1">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Law act finder</h3>
                </a>

                <div class=" " style="margin-left: 34em !important;">

                </div>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                           <!-- <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"-->
                            <i class="fa fa-user-edit rounded-circle me-lg-2"  style="width: 40px; height: 40px;"></i>
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['username']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



        






            <div class="container-fluid pt-4 px-4">


               
                    <div class=" " style="  position: fixed;
    inset: 0px;
    width: 35rem;
    height: 13rem;
    max-width: 100vw;
    max-height: 100dvh;
    margin: auto;
    font-size: 35px;">
                    <div class="card"  style="background: rgb(68, 71, 80)">
                                            <div class="card-header" style="color: white;font-size: larger;">
                                            <a href="add_law.php"> Add New Law/Act</a>
                                            </div>
                                            <div class="card-header" style="font-size: larger;">
                                            <a href="view_laws.php">View, Update, and Delete Laws/Acts</a>
                                            

     


                                            </div>
                                        </div>
                                        </div>


            </div>
            </div>












































                    <!-- Footer Start -->
                    <div class="container-fluid pt-4" style="padding-right: 0px;padding-left: 0px;    position: fixed; left: 0; bottom: 0; width: 100%;">
                        <div class="bg-secondary rounded-top p-4">
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center text-sm-start">
                                    &copy; <a href="#">Law act finder</a>, All Right Reserved. 
                                </div>
                                <div class="col-12 col-sm-6 text-center text-sm-end">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
        </div>
        <!-- Content End -->



        <!-- Back to Top -->
        <!--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->
    </div>
        

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
  function toggleDisplay() {
        var elements = document.getElementsByClassName('myElement');
        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];
            if (element.style.display === 'none' || element.style.display === '') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }
    }
</script>




</body>
</html>