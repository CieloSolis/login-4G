<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];

    $valid_correo='cielosolislopez1909@gmail.com';
    
    if ($correo== $valid_correo) {
        session_start();
        $_SESSION['correo'] = $correo;
        
        header('Location: ../estructura/recuperar.html');
    } else {
        Print "Vuele a intentarlo.";
    }
}    
?>
