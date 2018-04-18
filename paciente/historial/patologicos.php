<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || USUARIOS </title>
    <link rel="stylesheet" href="../css/styles.css
    ">
</head>
<body>

<div class="header">
    <div class="centrar">
        <img src="../../images/logo2.png">
        
        <h1>Registros Clínica David</h1>
    </div>
</div>


<div class="containerP">
    <div class="menu">
        <?php include "menu.php" ?>

    </div>

    <?php 
        include "../php/middleware.php";
        include "../php/sql.php";

        $id = $_GET['id'];                

        $sql = "SELECT * FROM historial_clinico WHERE id = '" . $id . "' ";
        $res = $conn->query($sql);
        $obj = $res->fetch_object();
        
                        
    ?>
            <div class="contenedorPrincipal">
    <h1> Patológicos </h1>
                <div class="showLinks">
                    <a href="show.php?id=<?php echo $obj->id; ?>">Estado y Ocupación</a>
                    <a href="heredofamiliares.php?id=<?php echo $obj->id; ?>">Heredo Familiares</a>
                    <a href="nopatologicos.php?id=<?php echo $obj->id; ?>">No Patológicos</a>
                    <a href="patologicos.php?id=<?php echo $obj->id; ?>">Patológicos</a>
                    <a href="padecimientoactual.php?id=<?php echo $obj->id; ?>">Padecimiento Actual</a>
                    <a href="aparatossistemas.php?id=<?php echo $obj->id; ?>">Aparatos y Sistemas</a>
                </div><BR>
                <div class="showLinks">
                    <a href="exploracionfisica.php?id=<?php echo $obj->id; ?>">Exploración Física</a>
                    <a href="estudios.php?id=<?php echo $obj->id; ?>">Estudios Laboratorio, Gabinete y otros</a>
                    <a href="diagnostico.php?id=<?php echo $obj->id; ?>">Diagnóstico</a>
                    <a href="pronostico.php?id=<?php echo $obj->id; ?>">Pronóstico</a>
                    <a href="indicacion.php?id=<?php echo $obj->id; ?>">Indicación Terapéutica</a>
                    <a href="adicionales.php?id=<?php echo $obj->id; ?>">Adicionales</a>
                </div><BR>
    <form method="POST" action=""> 
        <h5>Alérgias<h5>
        <p> <?php echo $obj->alergias ?></p>

        <h5>Transfusiones<h5>
        <p> <?php echo $obj->transfusiones ?></p>

        <h5>Quirúrgicos<h5>
        <p> <?php echo $obj->quirurgicos ?></p>

        <h5>Congénitos<h5>
        <p> <?php echo $obj->congenitos ?></p>

        <h5>Traumáticos<h5>
        <p> <?php echo $obj->traumaticos ?></p>

        <h5>Enfermedades Crónico Degenerativas<h5>
        <p> <?php echo $obj->enfe_crondegenerativa ?></p>
        
        <h5>Enfermedades Infecciosas<h5>
        <p> <?php echo $obj->enfe_infecciosas ?></p>

        <h5>Enfermedades Exantemáticas<h5>
        <p><?php echo $obj->enfe_exantematicas ?></p>

        <h5>Otras Patologías<h5>
        <p> <?php echo $obj->otras_patologias ?></p> 

    </form>    

</div>

</body>
</html>

<?php
if(!isset($_POST['submit']))
return;   