<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "expediente";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");
