<?php
session_start();

// echo $_SESSION['id'];

if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
}