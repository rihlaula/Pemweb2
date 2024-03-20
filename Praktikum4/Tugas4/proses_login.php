<?php
//tangkap input login
$email = $_POST ['email'];
$password = $_POST ['password'];

// validasi login
if ($email == 'adminlala@gmail.com' && $password == 'asdfgh') {
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}