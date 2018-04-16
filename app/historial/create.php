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

       if(isset($_POST['submit'])){
           include "php/createLogic.php";
       }

       $id = "";
            if(isset($_GET['id']))
                $id = $_GET['id'];
        
                        
    ?>
    <div class="contenedorPrincipal">
    <h1> Crear Historial </h1>
    <form method="POST" action="">
    
        <label>ID USUARIO PACIENTE</label><br>
        <input type="number" name="user_id" value="<?php echo $id; ?>" required><br>

        <label>Estado Civil<label>
        <input name="est_civil" type="text"><br>

        <label>Ocupación<label>
        <input name="ocupacion" type="text"><br>

        <label>Heredo Familiares<label>
        <input name="heredo_familiares" type="text"><br>

        <label>Vivienda<label>
        <input name="vivienda" type="text"><br>

        <label>Lugar Excretas<label>
        <input name="lugar_excretas" type="text"><br>

        <label>Animales domésticos<label>
        <input name="anim_domesticos" type="text"><br>

        <label>Agua Ingesta<label>
        <input name="agua_ingesta" type="text"><br>

        <label>Habitos Higiénicos<label>
        <input name="habitos_higienicos" type="text"><br>

        <label>Escolaridad<label>
        <input name="escolaridad" type="text"><br>

        <label>Tiempo Libre<label>
        <input name="tiempo_libre" type="text"><br>

        <label>Actividad Física<label>
        <input name="act_fisica" type="text"><br>

        <label>Patrón Sueño<label>
        <input name="patron_sueno" type="text"><br>

        <label>Notas<label>
        <input name="notasuno" type="text"><br>

        <label>Alérgias<label>
        <input name="alergias" type="text"><br>

        <label>Transfusiones<label>
        <input name="transfusiones" type="text"><br>

        <label>Quirúrgicos<label>
        <input name="quirurgicos" type="text"><br>

        <label>Congénitos<label>
        <input name="congenitos" type="text"><br>

        <label>Traumáticos<label>
        <input name="traumaticos" type="text"><br>

        <label>Enfermedades Crónico Degenerativas<label>
        <input name="enfe_crondegenerativa" type="text"><br>
        
        <label>Enfermedades Infecciosas<label>
        <input name="enfe_infecciosas" type="text"><br>

        <label>Enfermedades Exantemáticas<label>
        <input name="enfe_exantematicas" type="text"><br>

        <label>Otras Patologías<label>
        <input name="otras_patologias" type="text"><br>

        <label>Padecimiento Actual<label>
        <input name="padecimiento_act" type="text"><br>

        <label>Circulatorio<label>
        <input name="circulatorio" type="text"><br>

        <label>Digestivo<label>
        <input name="digestivo" type="text"><br>

        <label>Endocrino<label>
        <input name="endocrino" type="text"><br>

        <label>Inmunológico<label>
        <input name="inmunologico" type="text"><br>

        <label>Linfático<label>
        <input name="linfatico" type="text"><br>

        <label>Muscular<label>
        <input name="muscular" type="text"><br>

        <label>Nervioso<label>
        <input name="nervioso" type="text"><br>

        <label>Óseo<label>
        <input name="oseo" type="text"><br>

        <label>Reproductor<label>
        <input name="reproductor" type="text"><br>

        <label>Respiratorio<label>
        <input name="respiratorio" type="text"><br>

        <label>Urinario<label>
        <input name="urinario" type="text"><br>

        <label>Cardiovascular<label>
        <input name="cardiovascular" type="text"><br>

        <label>Notas<label>
        <input name="notasdos" type="text"><br>

        <label>Habitus Exterior<label>
        <input name="habitus_ext" type="text"><br>

        <label>Sexo<label>
        <input name="paciente" type="text"><br>

        <label>Signos Vitales<label>
        <input name="signos_vitales" type="text"><br>

        <label>Temperatura<label>
        <input name="temperatura" type="text"><br>

        <label>Peso<label>
        <input name="peso" type="text"><br>

        <label>Tensión Arterial<label>
        <input name="tension_arterial" type="text"><br>

        <label>Altura<label>
        <input name="altura" type="text"><br>

        <label>Frecuencia Cardiaca<label>
        <input name="frec_cardiaca" type="text"><br>

        <label>Frecuencia Respiratoria<label>
        <input name="frec_respiratoria" type="text"><br>

        <label>Índice de Masa Muscular<label>
        <input name="masa_muscular" type="text"><br>

        <label>Cabeza<label>
        <input name="cabeza" type="text"><br>

        <label>Cuello<label>
        <input name="cuello" type="text"><br>

        <label>Torax<label>
        <input name="torax" type="text"><br>

        <label>Abdomen<label>
        <input name="abdomen" type="text"><br>

        <label>Miembros<label>
        <input name="miembros" type="text"><br>

        <label>Genitales<label>
        <input name="genitales" type="text"><br>

        <label>Piel y anexos<label>
        <input name="piel_anexos" type="text"><br>

        <label>Resultados de laboratorio<label>
        <input name="resultados_lab" type="text"><br>

        <label>Gabinete<label>
        <input name="gabinete" type="text"><br>

        <label>Histopatología<label>
        <input name="histopatologia" type="text"><br>

        <label>Otros<label>
        <input name="otros" type="text"><br>

        <label>Diagnóstico o problemas clínicos<label>
        <input name="diag_probclinicos" type="text"><br>

        <label>Pronóstico<label>
        <input name="pronostico" type="text"><br>

        <label>Indicación Terapéutica<label>
        <input name="indic_terapeutica" type="text"><br>

        <label>Notas<label>
        <input name="notastres" type="text"><br>

        <input type="submit" name="submit">

    </form>    

    </div>
</div>
    
</body>
</html>

<?php
if(!isset($_POST['submit']))
    return;

    