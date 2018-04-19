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
        // $sql = "SELECT * FROM historial_clinico WHERE id = '" . $id . "' ";
        if(isset($_POST['submit'])){
           include "php/updateLogic.php";
        }

        $sql = "SELECT * FROM historial_clinico WHERE id = '" . $id . "' ";
        $res = $conn->query($sql);
        $obj = $res->fetch_object();
        
                        
    ?>
    <div class="contenedorPrincipal">
    <h1> Actualizar Historial </h1>
    <form method="POST" action="">
    
        <label>ID USUARIO<label>
        <input name="user_id" type="number" value="<?php echo $obj->user_id ?>" disabled><br>

        <label>Estado Civil<label>
        <input name="est_civil" type="text" value="<?php echo $obj->est_civil ?>"><br>

        <label>Ocupación<label>
        <input name="ocupacion" type="text" value="<?php echo $obj->ocupacion ?>"><br>

        <label>Heredo Familiares<label>
        <input name="heredo_familiares" type="text" value="<?php echo $obj->heredo_familiares ?>"><br>

        <label>Vivienda<label>
        <input name="vivienda" type="text" value="<?php echo $obj->vivienda ?>"><br>

        <label>Lugar Excretas<label>
        <input name="lugar_excretas" type="text" value="<?php echo $obj->lugar_excretas ?>"><br>

        <label>Animales domésticos<label>
        <input name="anim_domesticos" type="text" value="<?php echo $obj->anim_domesticos ?>"><br>

        <label>Agua Ingesta<label>
        <input name="agua_ingesta" type="text" value="<?php echo $obj->agua_ingesta ?>"><br>

        <label>Habitos Higiénicos<label>
        <input name="habitos_higienicos" type="text" value="<?php echo $obj->habitos_higienicos ?>"><br>

        <label>Escolaridad<label>
        <input name="escolaridad" type="text" value="<?php echo $obj->escolaridad ?>"><br>

        <label>Tiempo Libre<label>
        <input name="tiempo_libre" type="text" value="<?php echo $obj->tiempo_libre ?>"><br>

        <label>Actividad Física<label>
        <input name="act_fisica" type="text" value="<?php echo $obj->act_fisica ?>"><br>

        <label>Patrón Sueño<label>
        <input name="patron_sueno" type="text" value="<?php echo $obj->patron_sueno ?>"><br>

        <label>Notas<label>
        <input name="notasuno" type="text" value="<?php echo $obj->notasuno ?>"><br>

        <label>Alérgias<label>
        <input name="alergias" type="text" value="<?php echo $obj->alergias ?>"><br>

        <label>Transfusiones<label>
        <input name="transfusiones" type="text" value="<?php echo $obj->transfusiones ?>"><br>

        <label>Quirúrgicos<label>
        <input name="quirurgicos" type="text" value="<?php echo $obj->quirurgicos ?>"><br>

        <label>Congénitos<label>
        <input name="congenitos" type="text" value="<?php echo $obj->congenitos ?>"><br>

        <label>Traumáticos<label>
        <input name="traumaticos" type="text" value="<?php echo $obj->traumaticos ?>"><br>

        <label>Enfermedades Crónico Degenerativas<label>
        <input name="enfe_crondegenerativa" type="text" value="<?php echo $obj->enfe_crondegenerativa ?>"><br>
        
        <label>Enfermedades Infecciosas<label>
        <input name="enfe_infecciosas" type="text" value="<?php echo $obj->enfe_infecciosas ?>"><br>

        <label>Enfermedades Exantemáticas<label>
        <input name="enfe_exantematicas" type="text" value="<?php echo $obj->enfe_exantematicas ?>"><br>

        <label>Otras Patologías<label>
        <input name="otras_patologias" type="text" value="<?php echo $obj->otras_patologias ?>"><br>

        <label>Padecimiento Actual<label>
        <input name="padecimiento_act" type="text" value="<?php echo $obj->padecimiento_act ?>"><br>

        <label>Circulatorio<label>
        <input name="circulatorio" type="text" value="<?php echo $obj->circulatorio ?>"><br>

        <label>Digestivo<label>
        <input name="digestivo" type="text" value="<?php echo $obj->digestivo ?>"><br>

        <label>Endocrino<label>
        <input name="endocrino" type="text" value="<?php echo $obj->endocrino ?>"><br>

        <label>Inmunológico<label>
        <input name="inmunologico" type="text" value="<?php echo $obj->inmunologico ?>"><br>

        <label>Linfático<label>
        <input name="linfatico" type="text" value="<?php echo $obj->linfatico ?>"><br>

        <label>Muscular<label>
        <input name="muscular" type="text" value="<?php echo $obj->muscular ?>"><br>

        <label>Nervioso<label>
        <input name="nervioso" type="text" value="<?php echo $obj->nervioso ?>"><br>

        <label>Óseo<label>
        <input name="oseo" type="text" value="<?php echo $obj->oseo ?>"><br>

        <label>Reproductor<label>
        <input name="reproductor" type="text" value="<?php echo $obj->reproductor ?>"><br>

        <label>Respiratorio<label>
        <input name="respiratorio" type="text" value="<?php echo $obj->respiratorio ?>"><br>

        <label>Urinario<label>
        <input name="urinario" type="text" value="<?php echo $obj->urinario ?>"><br>

        <label>Cardiovascular<label>
        <input name="cardiovascular" type="text" value="<?php echo $obj->cardiovascular ?>"><br>

        <label>Notas<label>
        <input name="notasdos" type="text" value="<?php echo $obj->notasdos ?>"><br>

        <label>Habitus Exterior<label>
        <input name="habitus_ext" type="text" value="<?php echo $obj->habitus_ext ?>"><br>

        <label>Sexo<label>
        <input name="paciente" type="text" value="<?php echo $obj->paciente ?>"><br>

        <label>Signos Vitales<label>
        <input name="signos_vitales" type="text" value="<?php echo $obj->signos_vitales ?>"><br>

        <label>Temperatura<label>
        <input name="temperatura" type="text" value="<?php echo $obj->temperatura ?>"><br>

        <label>Peso<label>
        <input name="peso" type="text" value="<?php echo $obj->peso ?>"><br>

        <label>Tensión Arterial<label>
        <input name="tension_arterial" type="text" value="<?php echo $obj->tension_arterial ?>"><br>

        <label>Altura<label>
        <input name="altura" type="text" value="<?php echo $obj->altura ?>"><br>

        <label>Frecuencia Cardiaca<label>
        <input name="frec_cardiaca" type="text" value="<?php echo $obj->frec_cardiaca ?>"><br>

        <label>Frecuencia Respiratoria<label>
        <input name="frec_respiratoria" type="text" value="<?php echo $obj->frec_respiratoria ?>"><br>

        <label>Índice de Masa Muscular<label>
        <input name="masa_muscular" type="text" value="<?php echo $obj->masa_muscular ?>"><br>

        <label>Cabeza<label>
        <input name="cabeza" type="text" value="<?php echo $obj->cabeza ?>"><br>

        <label>Cuello<label>
        <input name="cuello" type="text" value="<?php echo $obj->cuello ?>"><br>

        <label>Torax<label>
        <input name="torax" type="text" value="<?php echo $obj->torax ?>"><br>

        <label>Abdomen<label>
        <input name="abdomen" type="text" value="<?php echo $obj->abdomen ?>"><br>

        <label>Miembros<label>
        <input name="miembros" type="text" value="<?php echo $obj->miembros ?>"><br>

        <label>Genitales<label>
        <input name="genitales" type="text" value="<?php echo $obj->genitales ?>"><br>

        <label>Piel y anexos<label>
        <input name="piel_anexos" type="text" value="<?php echo $obj->piel_anexos ?>"><br>

        <label>Resultados de laboratorio<label>
        <input name="resultados_lab" type="text" value="<?php echo $obj->resultados_lab ?>"><br>

        <label>Gabinete<label>
        <input name="gabinete" type="text" value="<?php echo $obj->gabinete ?>"><br>

        <label>Histopatología<label>
        <input name="histopatologia" type="text" value="<?php echo $obj->histopatologia ?>"><br>

        <label>Otros<label>
        <input name="otros" type="text" value="<?php echo $obj->otros ?>"><br>

        <label>Diagnóstico o problemas clínicos<label>
        <input name="diag_probclinicos" type="text" value="<?php echo $obj->diag_probclinicos ?>"><br>

        <label>Pronóstico<label>
        <input name="pronostico" type="text" value="<?php echo $obj->pronostico ?>"><br>

        <label>Indicación Terapéutica<label>
        <input name="indic_terapeutica" type="text" value="<?php echo $obj->indic_terapeutica ?>"><br>

        <label>Notas<label>
        <input name="notastres" type="text" value="<?php echo $obj->notastres ?>"><br>

        <input type="submit" name="submit">

    </form>    

    </div>
</div>
    
</body>
</html>