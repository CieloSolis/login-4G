<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario =$_POST["email"]; 
    $contra=$_POST["password"];

    $email="cielosolislopez1909@gmail.com";
    $password="cielo192007";

if ($usuario===$email && $password===$contra ){
$hasheada =password_hash($password, PASSWORD_DEFAULT);

    $Correosanitizado=filter_var($_POST[ 'email'], FILTER_SANITIZE_EMAIL);
    header("Location: ../estructura/principal.html");


}
else{

    print("contraseña o usuario incorrectos");

}
}

?>