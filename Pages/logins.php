<?php
include 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = mysqli_query( $conn, "SELECT * FROM logins WHERE email = '$email' AND passwords = '$password'");


if (mysqli_num_rows($query_sql) > 0) {
    session_start();
    $data = mysqli_fetch_assoc($query_sql);
    $_SESSION['nama'] = $data['nama'];
    header("Location: index.php");
} else {
    echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <button><strong><a href='login.php'>Login</a></strong></button></center>";
}
