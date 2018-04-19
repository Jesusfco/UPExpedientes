<?php
session_start();

// echo $_SESSION['id'];

if(!isset($_SESSION['id'])){
    header('LOCATION: ' . $url . 'login.php');
} else if($_SESSION['cargo'] == 'paciente'){
    header('LOCATION: ' . $url . 'login.php');
}

$sql = "SELECT * FROM usuario WHERE id = '". $_SESSION['id'] ."'";

$res = $conn->query($sql);
$obj = $res->fetch_object();

if($obj->status == 'inactivo')
    header('LOCATION: ' . $url . 'login.php');