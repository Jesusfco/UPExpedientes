<?php 
    
    include '../../php/url.php';
    include "../../php/sql.php";   
    include "../php/middleware.php";

?>

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
        <?php include "../menu.php" ?>

    </div>

    <?php 

        $id = $_GET['id'];                

        $sql = "SELECT * FROM historial_clinico WHERE id = '" . $id . "' ";
        $res = $conn->query($sql);
        $obj = $res->fetch_object();
        
                        
    ?>
    <div class="contenedorPrincipal">

    
    <h1> Estado y Ocupación </h1>

<div class="showLinks">
                    <a href="show.php?id=<?php echo $obj->id; ?>">Estado y Ocupación</a>
                    <a href="heredofamiliares.php?id=<?php echo $obj->id; ?>">Heredo Familiares</a>
                    <a href="nopatologicos.php?id=<?php echo $obj->id; ?>">No Patológicos</a>
<<<<<<< HEAD
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
=======
                    <a href="muestras/create.php?id=<?php echo $obj->id; ?>">Patológicos</a>
                    <a href="alergias/create.php?id=<?php echo $obj->id; ?>">Padecimiento Actual</a>
                    <a href="historial/create.php?id=<?php echo $obj->id; ?>">Aparatos y Sistemas</a>
                </div><BR>
                <div class="showLinks">
                    <a href="citas/create.php?id=<?php echo $obj->id; ?>">Exploración Física</a>
                    <a href="recetas/create.php?id=<?php echo $obj->id; ?>">Estudios Laboratorio, Gabinete y otros</a>
                    <a href="orden/create.php?id=<?php echo $obj->id; ?>">Diagnóstico</a>
                    <a href="muestras/create.php?id=<?php echo $obj->id; ?>">Pronóstico</a>
                    <a href="alergias/create.php?id=<?php echo $obj->id; ?>">Indicación Terapéutica</a>
                    <a href="historial/create.php?id=<?php echo $obj->id; ?>">Adicionales</a>
>>>>>>> 27f3e984252e76b06b8e13fa3ac28af871bab733
                </div><BR>

    <form method="POST" action="">
    
        <h5>ID USUARIO<h5>
        <p> <?php echo $obj->user_id ?></p>

        <h5>Estado Civil</h5>
        <p> <?php echo $obj->est_civil ?></p>

        <h5>Ocupación</h5>
        <p> <?php echo $obj->ocupacion ?>"</p>
    </form>    

    </div>
</div>
    
</body>
</html>