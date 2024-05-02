<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password= $_POST['password'];

        $valid_email = 'cielosolislopez1909@gmail.com';
        $valid_password = '12345678';

        if ($email== $valid_email && $password == $valid_password) {
            session_start();
            $_SESSION['email'] = $email;
            
            header('Location: ../estructura/login.html');
        } else {
            Print "El usuario o la contraseña son incorrectos.";
        }
    }
?>