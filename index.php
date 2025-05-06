<?php

include("connection/conn.php");

$error = false;
$warning = false;

if (isset($_POST['login']) && $_POST['login']) {                        //login

   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `status` != 0";

   $result = mysqli_query($conn, $query);

   $row = mysqli_fetch_assoc($result);

   if ($row) {

      if ($row['password'] === $password) {

         session_start();

         $_SESSION['user'] = ['username' => $row['name'], 'email' => $email, 'user_id' => $row['id'] , 'status' => $row['status'], 'address' => $row['address']];

         header("location: pages/home.php");

      } else {

         $error = true;
         $msg = [
            'type' => 'danger',
            'msg' => "Wrong Password."
         ];
      }
      
   } else {
      $warning = true;
      $msg = [
         'type' => 'warning',
         'msg' => "Email not registered. Please sign up to continue!"
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

      a {
         text-decoration: none;
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

      <div class="row border rounded-2 p-3 bg-white shadow" style="width: 930px;">
         <!-- left box -->
         <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
            <div class="login-image mb-3">
               <img src="./public/images/login.png" alt="image" class="img-fluid" style="width: 250px;">
            </div>

            <p class="text-white fs-2 fw-bold">Be Verified</p>
            <small class="text-white text-wrap text-center">Join Us for better life</small>
         </div>

         <!-- right box -->
         <div class="col-md-6 right-box">
            <div class="row align-items-center">
               <?php

               if ($error || $warning) {

                  echo "
        <div class='alert alert-" . $msg['type'] . " alert-dismissible fade show' role='alert'>
        " . $msg['msg'] . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div> ";
               }
               ?>
               <div class="header-text mb-4">
                  <p>Hello</p>
                  <p>We are happy to have you back.</p>
               </div>
               <form action="" method="post">
                  <div class="login-form mb-3">
                     <input type="email" class="form-control bg-light fs-6" id="email" placeholder="Email Address" name="email">
                  </div>
                  <div class="login-form mb-2">
                     <input type="password" class="form-control bg-light fs-6" id="password" placeholder="password" name="password">
                  </div>
                  <!-- <div class="login-form mb-5 d-flex justify-content-between">
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck" name="checkbox">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                     </div>
                     <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                     </div>
                  </div> -->
                  <div class="login-form mb-3">
                     <input class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="login">
                  </div>
                  <div class="row">
                     <small>Don't have account? <a href="pages/signup.php">Sign Up</a></small>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>