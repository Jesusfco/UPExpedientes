<?php 
    include "../php/middleware.php";
    include "../php/sql.php";                                                 

    if(!isset($_GET['id']))
        header ('Location: index.php');

        
    $id = $_GET['id'];

    $sql = "DELETE FROM auxiliar_diagnostico WHERE id = '" . $id . "' ";

    $conn->query($sql);

    header ('Location: index.php');