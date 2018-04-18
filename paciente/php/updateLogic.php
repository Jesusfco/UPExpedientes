<?php

$sql = "UPDATE `usuario` SET 
        `name` = '" . $_POST['name'] . "', 
        `curp` = '" . $_POST['curp'] . "', 
        `status` = '" . $_POST['status'] . "', 
        `correo` = '" . $_POST['correo'] . "'
        WHERE `usuario`.`id` = '" . $_SESSION['id'] . "'";

       $sql;

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo " <br> user ACTUALZIADO correctamente <br>";

$sql = 'UPDATE `domicilo` SET 
    `calle` = "'. $_POST['calle'] .'", 
    `num_ext` = '. $_POST['num_ext'] .', 
    `num_int` = '. $_POST['num_int'] .', 
    `municipio` = "'. $_POST['municipio'] .'", 
    `localidad` = "'. $_POST['localidad'] .'", 
    `colonia` = "'. $_POST['colonia'] .'", 
    `cod_postal` = '. $_POST['cod_postal'] .', 
    `cel_uno` = "'. $_POST['cel_uno'] .'", 
    `cel_dos` = "'. $_POST['cel_dos'] .'" 
    WHERE `domicilo`.`user_id` = '. $_SESSION['id'] ;

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo " domicilio ACTUALIZADO correctamente<br>";

    
    $update3 = 'UPDATE `paciente` SET 
    `nombre` = "'. $_POST['nombre'] . '",
    `ape_pat` = "'. $_POST['ape_pat'] .'", 
    `ape_mat` = "'. $_POST['ape_mat'] .'", 
    `fecnac` = "'. $_POST['fecnac'] .'", 
    `sexo` = "'. $_POST['sexo'] .'", 
    `direccion` = "'. $_POST['direccion'] .'", 
    `telefono` = "'. $_POST['telefono'] .'", 
    `nivel_eco` = "'. $_POST['nivel_eco'] .'", 
    `vivienda` = "'. $_POST['vivienda'] .'", 
    `tipo_sang` = "'. $_POST['tipo_sang'] .'", 
    `discapacidad` = "'. $_POST['discapacidad'] .'", 
    `etnia` = "'. $_POST['etnia'] .'", 
    `religion` = "'. $_POST['religion'] .'" 
    WHERE `paciente`.`user_id` = "'.$_SESSION['id'] .'"';

    $stmt = $conn->prepare($update3);
    $stmt->execute();
    echo "paciente ACTUALIZADO correctamente<br>";

