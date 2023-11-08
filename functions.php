<?php

$conn = mysqli_connect("localhost", "root", "", "timevibe's");



function registrasi($data) {
global $conn;

$username = strtolower(stripslashes($data["username"]));
$email = $data["email"];
$password = mysqli_real_escape_string($conn, $data["password"]);

$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar')
            </script>";
            return false;
}
$result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert(Email sudah terdaftar')
            </script>";
            return false;
}

$password = password_hash($password, PASSWORD_DEFAULT);


mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password')");

return mysqli_affected_rows($conn);
}

?>