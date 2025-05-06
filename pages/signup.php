<?php

include("../connection/conn.php");

$error = false;
$warning = false;
$success = false;

$msg = [];

if (isset($_POST['signup']) && $_POST['signup']) {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['create_password'];
    $confirmPass = $_POST['confirm_password'];

    $query = "SELECT * FROM `users` where `email` = '$email'";

    $emailResult = mysqli_query($conn, $query);

    $userAlreadyExit = mysqli_fetch_row($emailResult);

    if (!$userAlreadyExit) {

        if ($password === $confirmPass) {

            $insertUser = "INSERT INTO `users` (`name`, `email`, `password`, `address` , `status` ,`role`) VALUES ( '$name', '$email', '$password', '$address', 1 , 0)";

            $result = mysqli_query($conn, $insertUser);

            if ($result) {

                $query = "SELECT * FROM `users` where `email` = '$email'";

                $result = mysqli_query($conn, $query);

                $newUser = mysqli_fetch_assoc($result);

                session_start();

                $_SESSION['user'] = ['username' => $newUser['name'], 'email' => $newUser['email'], 'user_id' => $newUser['id'], 'address' => $newUser['address']];

                header("location: ../pages/home.php");
            }

        } else {
            $warning = true;
            $msg = [
                'type' => 'warning',
                'msg' => "Passwords do not match. Please try again!"
            ];
        }
    } else {

        $error = true;
        $msg = [
            'type' => 'danger',
            'msg' => "User already exists. Please log in to continue!"
        ];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: #ececec;
        }

        .login-box {
            width: 930px;
        }

        .left-box {
            background-color: rgb(65, 80, 123);
        }

        .right-box {
            padding: 40px 30px;
        }

        ::placeholder {
            font-size: 16px;
        }
    </style>
    <title>cp67</title>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row border rounded-2 p-3 bg-white shadow login-box">
            <!-- left box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="login-image mb-3">
                    <img src="../public/images/login.png" alt="image" class="img-fluid" style="width: 250px;">
                </div>

                <p class="text-white fs-3 fw-bold">Become One of Us <br> Let’s Grow Together!</p>
                <small class="text-white text-wrap text-center">Be a part of the family</small>
            </div>

            <!-- right box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <?php

                    if ($warning || $error || $success) {

                        echo "
                            <div class='alert alert-" . $msg['type'] . " alert-dismissible fade show' role='alert'>
                            " . $msg['msg'] . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div> ";
                    }
                    ?>

                    <div class="header-text mb-4">
                        <p>Hello</p>
                        <p>We are happy to have you in our family.</p>
                    </div>
                    <form action="" method="post">
                        <!-- ../server/request.php -->

                        <div class="signup-form mb-3">
                            <input type="text" class="form-control bg-light fs-6" id="username" placeholder="User Name" name="username" required>
                        </div>

                        <div class="signup-form mb-3">
                            <input type="email" class="form-control bg-light fs-6" id="email" placeholder="Email Address" name="email" required>
                        </div>

                        <div class="signup-form mb-3">
                            <input type="password" class="form-control bg-light fs-6" id="password" placeholder="Enter User Password" name="create_password" required>
                        </div>

                        <div class="signup-form mb-3">
                            <input type="password" class="form-control bg-light fs-6" id="password" placeholder="Confirm Password" name="confirm_password" required>
                        </div>

                        <div class="signup-form mb-3">
                            <input type="text" class="form-control bg-light fs-6" id="address" placeholder="Enter User Address" name="address">
                        </div>


                        <div class="signup-form mb-3">
                            <input class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="signup">
                        </div>

                        <div class="row">
                            <small>Have a account? <a href="../index.php">Log In</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>