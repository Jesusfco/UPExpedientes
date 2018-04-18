<?php
session_start();

// echo $_SESSION['id'];

if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
} else if($_SESSION['cargo'] == 'paciente'){
    header("Location: ../paciente/");    
}