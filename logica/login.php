<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $valid_usuario = 'cielosolislopez1909@gmail.com';
        $valid_contrasena = '87654321';

        if ($usuario == $valid_usuario && $contrasena == $valid_contrasena) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contrasena'] = $contrasena;
            
            header('Location: ../estructura/inicio.html');
        } else {
            Print "El usuario o la contraseña son incorrectos.";
        }
    }

    

?>