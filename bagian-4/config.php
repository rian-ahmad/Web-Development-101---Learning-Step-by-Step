<?php

// mendefiniksan konstanta
define('DB_NAME', 'family');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

// melakukan checking koneksi
$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
} else {
    // hanya ditampilkan pada saat koneksi sukses
    echo 'Successfully connected!';
}

?>