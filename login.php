<?php
session_start();
// include Function  file
include("classes/model.php");
// Object creation
$user = new User();
if (isset($_POST['login'])) {
    // Posted Values
    $USER = $_POST['USER'];
    $PASSWORD = md5($_POST['PASSWORD']);
    //Function Calling
    $loginResult = $user->login($USER, $PASSWORD);
    $num = mysqli_fetch_array($loginResult);
    if ($num > 0) {
        $_SESSION['userID'] = $num['id'];
        // For success
        echo "<script>alert('Login successful. You are now being redirected to the Records dashboard')</script>";
        echo "<script>window.location.href='records.php'</script>";
    } else {
        // Message for unsuccessful login
        echo "<script>alert('User combination wrong. Please try again');</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>EbuCodes · OOP</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <!-- Sweetalert -->
    <!-- <link rel="stylesheet" href="../assets/css/sweetalert.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>



</head>

<body class="bg-light">
    <br><br><br>
    <main class="container">
        <div class="card text-center">
            <div class="card-header bg-danger">
                <h4 class="card-title">LOGIN</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <!-- <h4 class="mb-3"></h4> -->
                        <form method="POST" class="needs-validation" novalidate>
                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <label for="email" class="form-label">Username / Email Address</label>
                                    <input type="text" name="USER" class="form-control" id="email" placeholder="Your email address" required>
                                </div>

                                <div class="col-sm-6">
                                    <label for="address" class="form-label">Password</label>
                                    <input type="password" name="PASSWORD" class="form-control" id="address" minlength="5" maxlength="12" placeholder="Your password" required>
                                </div>

                            </div>

                            <br class="my-2">

                            <button name="login" class="btn btn-primary" type="submit">Sign In</button>
                        </form>
                        <p class="card-text">Not a member?&nbsp;<a href="register.php">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container">

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Form validation -->
    <script src="assets/js/form-validation.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SweetAlert -->
    <!-- <script src="../assets/js/sweetalert.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js" integrity="sha512-t89+ZHqiI+cJO2EZ1zy846TMzc7K0VH22insNeb32hMoVymAMd0aYeLzmNF4WuRLDUXPVo6dzbZ1zI7MBWlqlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>