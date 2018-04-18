<?php


//crea  usuario
$sql = "INSERT INTO `usuario` (`id`, `name`, `curp`, `password`, `cargo`, `status`, `correo`, `fec_ingreso`) 
VALUES (NULL, '". $_POST['name'] ."', '". $_POST['curp'] ."', '". $_POST['password'] ."', '". $_POST['cargo'] ."',
 '". $_POST['status'] ."', '". $_POST['correo'] ."', '". $_POST['fec_ingreso'] ."')";        
        
 //INSTRUCCION
 $conn->query($sql);
 //OBTENEMOS EL ID DEL ULTIMO REGISTRO CREADO O CONSULTADO
 $userid = $conn->insert_id;

 //CREAMOS REGISTRO DE LA TABLA DE DOMICILIO
 $sql = "INSERT INTO `domicilo` (`id`, `user_id`, `calle`, `num_ext`, 
 `num_int`, `municipio`, `localidad`, `colonia`, `cod_postal`, `cel_uno`, `cel_dos`) 
 VALUES (NULL, $userid, '". $_POST['calle'] ."', ". $_POST['num_ext'] .", ". $_POST['num_int'] .", 
 '". $_POST['municipio'] ."', '". $_POST['localidad'] ."', '". $_POST['colonia'] ."', ". $_POST['cod_postal'] .",
  '". $_POST['cel_uno'] ."', '". $_POST['cel_dos'] ."')";


 $conn->query($sql);

 //CREAMOS REGISTRO DE LA TABLA DE PACIENTES
 $sql = "INSERT INTO `paciente` (`id`, `user_id`, `nombre`, `ape_pat`, `ape_mat`, `fecnac`,
  `sexo`, `direccion`, `telefono`, `nivel_eco`, `vivienda`, `tipo_sang`, `discapacidad`, `etnia`, `religion`) VALUES 
 (NULL, '". $userid . "', '". $_POST['nombre'] ."', '". $_POST['ape_pat'] ."', '". $_POST['ape_mat'] ."', 
 '". $_POST['fecnac'] ."', '". $_POST['sexo'] ."', '". $_POST['direccion'] ."', '". $_POST['telefono'] ."', 
 '". $_POST['nivel_eco'] ."', '". $_POST['vivienda'] ."', '". $_POST['tipo_sang'] ."', '". $_POST['discapacidad'] ."',
  '". $_POST['discapacidad'] ."', '". $_POST['religion'] ."')";


  $conn->query($sql);

  header("Location: http://localhost/UPExpedientes/app/");


