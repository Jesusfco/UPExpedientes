<?php
include "php/url.php";
include "php/sql.php";

if(!isset($_POST['email']))
    header('LOCATION: index.html');

$sql = "SELECT * FROM usuario WHERE correo = '". $_POST['email'] ."'";

$res = $conn->query($sql);

if($res == false){
    header('LOCATION: reset.php');
}

$obj = $res->fetch_object();


$key = $obj->id . time();

$sql = "INSERT INTO `reset_passwords` (`id`, `user_id`, `key2`) 
VALUES (NULL, '" . $obj->id ."', '" . $key ."')";

$res = $conn->query($sql);


$asunto =  $obj->name . "|| RESETEA TU CONTRASEÑA || CLINICA DAVID";
$mensaje =  "<a href='". $url . "updatePassword.php?key=". $key . "'>Recuperar Contraseña!</a>";

$destinatario = $obj->correo;

require_once("php/mail.php");

session_start();
$_SESSION['reset'] = true;
header('LOCATION: reset.php');