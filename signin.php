<?php
require 'functions.php';

if(isset($_POST["login"]) ) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT *  FROM user WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1 ) {

        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"]) )  {
            header("location: index.php");
            exit;   
        }
    }

    $error = true;

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- My font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">

    <title>SignIn TimeVibe's</title>
</head>

<body>
    <section id="Sign">
        <div class="container d-flex justify-content-center">
            <div class="Sign-page shadow p-3 mb-5 bg-body rounded">
                <h1>Welcome back!</h1>
                <?php if(isset($error) ) : ?>
                <div class="alert alert-danger mb-3" role="alert" style="width: 80%; margin: auto;">
                    Email / Password Salah!
                </div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="user@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="*******">
                    </div>
                    <p class="havent">
                        Don’t have TimeVibe’s account? <a href="signup.php">Sign Up now
                        </a></p>
                    <button type="submit" name="login" class="btn" style="width: 100px;">Sign In</button>
                </form>
            </div>
        </div>
    </section>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>