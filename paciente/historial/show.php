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
        <img src="http://localhost/expediente/images/1ec3ed77-94bc-4b24-b1f9-13da8646b9f5.png">
        
        <h1>Registros Clínica David</h1>
    </div>
</div>


<div class="containerP">
    <div class="menu">
    <a href="index.php">REGRESAR</a><br>
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
    <h1> VER Historial Clinico </h1>
    <form method="POST" action="">
    
        <h5>ID USUARIO<h5>
        <p> <?php echo $obj->user_id ?></p>

        <h5>Estado Civil</h5>
        <p> <?php echo $obj->est_civil ?></p>

        <h5>Ocupación</h5>
        <p> <?php echo $obj->ocupacion ?>"</p>

        <h5>Heredo Familiares</h5>
        <p> <?php echo $obj->heredo_familiares ?> </p>

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

        <h5>Padecimiento Actual<h5>
        <p> <?php echo $obj->padecimiento_act ?></p>

        <h5>Circulatorio<h5>
        <p> <?php echo $obj->circulatorio ?></p>

        <h5>Digestivo<h5>
        <p> <?php echo $obj->digestivo ?></p>

        <h5>Endocrino<h5>
        <p> <?php echo $obj->endocrino ?></p>

        <h5>Inmunológico<h5>
        <p> <?php echo $obj->inmunologico ?></p>

        <h5>Linfático<h5>
        <p> <?php echo $obj->linfatico ?></p>

        <h5>Muscular<h5>
        <p> <?php echo $obj->muscular ?></p>

        <h5>Nervioso<h5>
        <p> <?php echo $obj->nervioso ?></p>

        <h5>Óseo<h5>
        <p> <?php echo $obj->oseo ?></p>

        <h5>Reproductor<h5>
        <p> <?php echo $obj->reproductor ?></p>

        <h5>Respiratorio<h5>
        <p> <?php echo $obj->respiratorio ?></p>

        <h5>Urinario<h5>
        <p> <?php echo $obj->urinario ?></p>

        <h5>Cardiovascular<h5>
        <p> <?php echo $obj->cardiovascular ?></p>

        <h5>Notas<h5>
        <p> <?php echo $obj->notasdos ?></p>

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

        <h5>Resultados de laboratorio<h5>
        <p> <?php echo $obj->resultados_lab ?></p>

        <h5>Gabinete<h5>
        <p> <?php echo $obj->gabinete ?></p>

        <h5>Histopatología<h5>
        <p> <?php echo $obj->histopatologia ?></p>

        <h5>Otros<h5>
        <p> <?php echo $obj->otros ?></p>

        <h5>Diagnóstico o problemas clínicos<h5>
        <p> <?php echo $obj->diag_probclinicos ?></p>

        <h5>Pronóstico<h5>
        <p> <?php echo $obj->pronostico ?></p>

        <h5>Indicación Terapéutica<h5>
        <p> <?php echo $obj->indic_terapeutica ?></p>

        <h5>Notas<h5>
        <p> <?php echo $obj->notastres ?></p>

        <input type="submit" name="submit">

    </form>    

    </div>
</div>
    
</body>
</html>