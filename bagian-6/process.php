<?php
// Mendapatkan seluruh data form yang telah dikirimkan
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prosees data dan dikirimkan respon
echo "Formulir terkirim! nama: $name, Email: $email, Pesan: $message";

?>