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
    <h1> No patolóligos </h1>
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
    <h5>Vivienda<h5>
        <p> <?php echo $obj->vivienda ?></p>

        <h5>Lugar Excretas<h5>
        <p> <?php echo $obj->lugar_excretas ?></p>

        <h5>Animales domésticos<h5>
        <p> <?php echo $obj->anim_domesticos ?></p>

        <h5>Agua Ingesta<h5>
        <p> <?php echo $obj->agua_ingesta ?></p>

        <h5>Habitos Higiénicos<h5>
        <p> <?php echo $obj->habitos_higienicos ?></p>

        <h5>Escolaridad<h5>
        <p> <?php echo $obj->escolaridad ?></p>

        <h5>Tiempo Libre<h5>
        <p> <?php echo $obj->tiempo_libre ?></p>

        <h5>Actividad Física<h5>
        <p> <?php echo $obj->act_fisica ?></p>

        <h5>Patrón Sueño<h5>
        <p> <?php echo $obj->patron_sueno ?></p>

        <h5>Notas<h5>
        <p> <?php echo $obj->notasuno ?></p>

    </form>    

</div>

</body>
</html>

<?php
if(!isset($_POST['submit']))
return;         