<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    $valid_nombre = 'Cielo';
    $valid_apellido = 'Solis';
    $valid_edad = '16';
    $valid_direccion = 'Calle 1';
    $valid_usuario = 'cielosolislopez1909';
    $valid_contrasena = '12345678';
    
    if ($nombre == $valid_nombre && $apellido == $valid_apellido && $edad == $valid_edad && $direccion == $valid_direccion && $usuario == $valid_usuario && $contrasena == $valid_contrasena) {
        session_start();
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['edad'] = $edad;
        $_SESSION['direccion'] = $direccion;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contrasena'] = $contrasena;
        
        header('Location: ../estructura/paginaprincipal.html');
    } else {
        Print "Los datos son incorrectos.";
    }
}
?>