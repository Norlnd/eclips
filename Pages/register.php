<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phonenumb = $_POST["phonenumber"];
$password = $_POST["password"];

$query_sql = "INSERT INTO logins (passwords, email, nama, phonenumber) 
            VALUES ('$password', '$email', '$fullname', '$phonenumb' )";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
