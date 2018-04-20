<?php 
    if(!isset($_POST['name']))
        return;

    $asunto =  $_POST['name'] . "|| NUEVO CONTACTO";
    $mensaje =  "Contacto: " . $_POST['name'] . 
                    "<br> Correo:" . $_POST['email'] .
                    "<br><br> MENSAJE: " . $_POST['message'];

    $destinatario = "jfcr@live.com";

    require_once("php/mail.php");

    session_start();
    $_SESSION['mail'] = true;

    header( 'LOCATION: contacto.php');
