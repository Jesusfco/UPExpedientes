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
    <h1> Esploración Física </h1>
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
    <h5>Habitus Exterior<h5>
        <p> <?php echo $obj->habitus_ext ?></p>

        <h5>Sexo<h5>
        <p> <?php echo $obj->paciente ?></p>

        <h5>Signos Vitales<h5>
        <p> <?php echo $obj->signos_vitales ?></p>

        <h5>Temperatura<h5>
        <p> <?php echo $obj->temperatura ?></p>

        <h5>Peso<h5>
        <p> <?php echo $obj->peso ?></p>

        <h5>Tensión Arterial<h5>
        <p> <?php echo $obj->tension_arterial ?></p>

        <h5>Altura<h5>
        <p> <?php echo $obj->altura ?></p>

        <h5>Frecuencia Cardiaca<h5>
        <p> <?php echo $obj->frec_cardiaca ?></p>

        <h5>Frecuencia Respiratoria<h5>
        <p> <?php echo $obj->frec_respiratoria ?></p>

        <h5>Índice de Masa Muscular<h5>
        <p> <?php echo $obj->masa_muscular ?></p>

        <h5>Cabeza<h5>
        <p> <?php echo $obj->cabeza ?></p>

        <h5>Cuello<h5>
        <p> <?php echo $obj->cuello ?></p>

        <h5>Torax<h5>
        <p><?php echo $obj->torax ?></p>

        <h5>Abdomen<h5>
        <p> <?php echo $obj->abdomen ?></p>

        <h5>Miembros<h5>
        <p> <?php echo $obj->miembros ?></p>

        <h5>Genitales<h5>
        <p> <?php echo $obj->genitales ?></p>

        <h5>Piel y anexos<h5>
        <p> <?php echo $obj->piel_anexos ?></p>    

    </form>    

</div>

</body>
</html>

<?php
if(!isset($_POST['submit']))
return;         