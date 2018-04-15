<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || USUARIOS </title>
    <link rel="stylesheet" href="css/styles.css
    ">
</head>
<body>

<div class="header">
    <div class="centrar">
        <img src="http://localhost/expediente/images/1ec3ed77-94bc-4b24-b1f9-13da8646b9f5.png">
        
        <h1>Registros Clínica David</h1>
    </div>
</div>


<div class="containerP">
    <div class="menu">
    <a href="http://localhost/expediente/menuroot2/">REGRESAR</a>
        
        <br><br><br>
        <a href="">Salir</a>

    </div>

    <?php 
        include "php/middleware.php";
        include "php/sql.php";

        $id = $_GET['id'];
        $query = "SELECT * FROM usuario WHERE id = '" . $id . "' ";

        //GENERAR CONSULTA  
        $res = $conn->query($query);
        $obj = $res->fetch_object();
        
    ?>
    <div class="contenedorPrincipal">

        <h1>ELIMINAR USUARIO <?php echo $obj->name; ?> </h1>

        
        <h3>¿Confirma eliminar Usuario?></h3>

        <a href="php/delete.php?id=<?php echo $obj->id; ?>">ELIMINAR </a><br>
        <a href="http://localhost/expediente/menuroot2/">REGRESAR</a>
    </div>
</div>
    
</body>
</html>