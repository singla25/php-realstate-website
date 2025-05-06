<?php
include('../connection/conn.php');

session_start();

if (!$_SESSION['user']) {
    header("location: ../index.php");
}

$userid = $_SESSION['user']['user_id'];

$query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `status` != 1";
$result = mysqli_query($conn, $query);

$userOrderCount = mysqli_num_rows($result);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cp67</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="https://kit.fontawesome.com/e2727b9a3c.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="container d-flex">
                <div class="logo col-3">
                    <a class="navbar-brand" href="./home.php"><img src="../public/images/logo.jpeg" alt="logo" height="60px" width="100px"></a>
                </div>
                <div class="col-9">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <div>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/residential.php">Residential</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/commercial.php">Commercial</a>
                                </li>
                                <?php
                                if (isset($_SESSION['user']['status']) &&  $_SESSION['user']['status'] != 1) {
                                    echo '
                                    <li class="nav-item">
                                        <a class="nav-link" href="../pages/admin.php">Admin</a>
                                    </li>';
                                }
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/hospitality.php">Hospitality</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/cartdetail.php">
                                        <i class="fa-solid fa-cart-shopping">
                                            <span class="badge text-bg-secondary" id="cartCount"><?php echo $userOrderCount; ?></span>
                                        </i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu text-center">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/profile.php">My Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/mybookings.php">My Bookings</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/logout.php">Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                    

                                <li class="nav-item get_menu">
                                    <a class="nav-link border border-2 rounded-pill" href="../pages/getInTouch.php">Get in Touch</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>