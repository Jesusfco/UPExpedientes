<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "expediente";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");


    function setUserIdCreatorId ($consult, $conn){
        $sql2 = "SELECT name, id FROM usuario";

        $usuarios = [];
        $result = $conn->query($sql2);
        foreach($result as $re) {
            $usuarios[] = $re;
        }

        $x = [];

        while($obj = $consult->fetch_object()){

            foreach($usuarios as $user){
                if($obj->user_id == $user['id'])                    
                    $obj->user_id = $user['name'];
                if($obj->creator_id == $user['id'])                    
                    $obj->creator_id = $user['name'];                
            }
            $x[] = $obj;
        }

        return $x;

    }

    function doctorId($consult, $conn){
        $sql2 = "SELECT name, id FROM usuario";

        $usuarios = [];
        $result = $conn->query($sql2);
        foreach($result as $re) {
            $usuarios[] = $re;
        }

        $x = [];

        while($obj = $consult->fetch_object()){

            foreach($usuarios as $user){
                if($obj->user_id == $user['id'])                    
                    $obj->user_id = $user['name'];
                if($obj->medico_id == $user['id'])                    
                    $obj->medico_id = $user['name'];                
            }
            $x[] = $obj;
        }

        return $x;

    }

    function setUserId ($consult, $conn){
        $sql2 = "SELECT name, id FROM usuario";

        $usuarios = [];
        $result = $conn->query($sql2);
        foreach($result as $re) {
            $usuarios[] = $re;
        }

        $x = [];

        while($obj = $consult->fetch_object()){

            foreach($usuarios as $user){

                if($obj->user_id == $user['id']){
                    $obj->user_id = $user['name'];
                    break;
                }                

            }

            $x[] = $obj;
            
        }

        return $x;

    }



$sql = "SELECT * FROM usuario WHERE id = '". $_SESSION['id'] ."'";

$res = $conn->query($sql);
$obj = $res->fetch_object();

if($obj->status == 'inactivo')
    header('LOCATION: ../login.php');