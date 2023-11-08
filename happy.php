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

    <title>Happy Mood</title>
</head>

<body>
    <section id="section1happy" style="position: relative;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/happyvibes5.jpeg" class="d-block w-100" alt="HappyImages">
                </div>
                <div class="carousel-item">
                    <img src="img/happyvibes2.jpeg" class="d-block w-100" alt="HappyImages">
                </div>
                <div class="carousel-item">
                    <img src="img/happyvibes3.jpeg" class="d-block w-100" alt="HappyImages">
                </div>
            </div>
        </div>
        <img src="img/wave9.svg" alt="Wave" class="wave10 bg-transparent" style="position: absolute; bottom: 0;">
    </section>

    <section id="section2happy" style="width: 100%; height: auto; background-color: #FAAF08">
        <div class="fact">
            <p>"When we feel happy, our energy and creativity peak. Take advantage of this moment to achieve great
                things!"</p>
        </div>
    </section>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>