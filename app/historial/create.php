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

       if(isset($_POST['submit'])){
           include "php/createLogic.php";
       }

       $id = "";
            if(isset($_GET['id']))
                $id = $_GET['id'];
        
                        
    ?>
    <div class="contenedorPrincipal">
<<<<<<< HEAD
      <h4>HISTORIA CLÍNICA, EN CUMPLIMIENTO CON LA "Norma Oficial Mexicana NOM-004-SSA3-2012, Del expediente clínico."</h4>
      <p align="justify">Como parte de una atención profesional nos hemos permitido hacerle las siguientes preguntas. La información aquí solicitada es confidencial y constituye un requisito médico-legal para la integración de su expediente médico, de utilidad para la toma de decisiones y el tratamiento adecuado en su atención médica. Le pedimos conteste con veracidad.</p>
      <h1>&nbsp; </h1>
    <h1 align="center">Crear Historial </h1>
=======
    <h1> Crear Historial </h1>
>>>>>>> 27f3e984252e76b06b8e13fa3ac28af871bab733

    <form method="POST" action="">
    
        <p>DATOS GENERALES	</p>
      <p>
      <p>
      <p>
      <p>
          <p>
          <p>
          <label>ID USUARIO PACIENTE</label>
          <br>
        <input type="number" name="user_id" value="<?php echo $id; ?>" required><br>

        <label>Estado Civil<label>
        <input name="est_civil" type="text"><br>

        <label>Ocupación<label>
        <input name="ocupacion" type="text">
          </p>
          <p>HEREDO FAMILIARES<br>

<<<<<<< HEAD
        <label>Heredo Familiares<label>
        <textarea name="heredo_familiares" id="heredofamiliares"></textarea>
          </p>
          <p>NO PATOLÓGICOS<br>
=======
>>>>>>> 27f3e984252e76b06b8e13fa3ac28af871bab733
        

        <label>Vivienda<label>
        <textarea name="vivienda" id="vivienda"></textarea>
        <br>

        <label>Lugar Excretas<label>
        
        <textarea name="lugar_excretas" id="lugar_excretas"></textarea>
        <br>

        <label>Animales domésticos<label>
        
        <textarea name="anim_domesticos" id="anim_domesticos"></textarea>
        <br>

        <label>Agua Ingesta<label>
        <textarea name="agua_ingesta" id="agua_ingesta"></textarea>
        <br>

        <label>Habitos Higiénicos<label>
        <textarea name="habitos_higienicos" id="habitos_higienicos"></textarea>
        <br>

        <label>Escolaridad<label>
        <textarea name="escolaridad" id="escolaridad"></textarea>
        <br>

        <label>Tiempo Libre<label>
        <textarea name="tiempo_libre" id="tiempo_libre"></textarea>
        <br>

        <label>Actividad Física<label>
        <textarea name="act_fisica" id="act_fisica"></textarea>
        <br>

        <label>Patrón Sueño<label>
        <textarea name="patron_sueno" id="patron_sueno"></textarea>
        <br>

        <label>Notas<label>
        <textarea name="notasuno" id="notasuno"></textarea>
          </p>
          <p>PATOLÓGICOS<br>

        <label>Alérgias<label>
        <textarea name="alergias" id="alergias"></textarea>
        <br>

        <label>Transfusiones<label>
        <textarea name="transfusiones" id="transfusiones"></textarea>
        <br>

        <label>Quirúrgicos<label>
        <textarea name="quirurgicos" id="quirurgicos"></textarea>
        <br>

        <label>Congénitos<label>
        <textarea name="congenitos" id="congenitos"></textarea>
        <br>

        <label>Traumáticos<label>
        <textarea name="traumaticos" id="traumaticos"></textarea>
        <br>

        <label>Enfermedades Crónico Degenerativas<label>
        <textarea name="enfe_crondegenerativa" id="enfe_crondegenerativa"></textarea>
        <br>
        
        <label>Enfermedades Infecciosas<label>
        <textarea name="enfe_infecciosas" id="enfe_infecciosas"></textarea>
        <br>

        <label>Enfermedades Exantemáticas<label>
        
        <textarea name="enfe_exantematicas" id="enfe_exantematicas"></textarea>
        <br>

        <label>Otras Patologías<label>
        <textarea name="otras_patologias" id="otras_patologias"></textarea>
        <br>

        <label>Padecimiento Actual<label>
        <textarea name="padecimiento_act" id="padecimiento_act"></textarea>
        <br>

        <label>Circulatorio<label>
        <textarea name="circulatorio" id="circulatorio"></textarea>
        <br>

        <label>Digestivo<label>
        <textarea name="digestivo" id="digestivo"></textarea>
        <br>

        <label>Endocrino<label>
        <textarea name="endocrino" id="endocrino"></textarea>
        <br>

        <label>Inmunológico<label>
       
        <textarea name="inmunologico" id="inmunologico"></textarea>
        <br>

        <label>Linfático<label>
        <textarea name="linfatico" id="linfatico"></textarea>
        <br>

        <label>Muscular<label>
        <textarea name="muscular" id="muscular"></textarea>
        <br>

        <label>Nervioso<label>
       
        <textarea name="nervioso" id="nervioso"></textarea>
        <br>

        <label>Óseo<label>
        
        <textarea name="oseo" id="oseo"></textarea>
        <br>

        <label>Reproductor<label>
        
        <textarea name="reproductor" id="reproductor"></textarea>
        <br>

        <label>Respiratorio<label>
        <textarea name="respiratorio" id="respiratorio"></textarea>
        <br>

        <label>Urinario<label>
        <textarea name="urinario" id="urinario"></textarea>
        <br>

        <label>Cardiovascular<label>
        <textarea name="cardiovascular" id="cardiovascular"></textarea>
        <br>

        <label>Notas<label>
        <textarea name="notasdos" id="notasdos"></textarea>
        <br>

        <label>Habitus Exterior<label>
        <textarea name="habitus_ext" id="habitus_ext"></textarea>
        <br>

        <label>Sexo<label>
        <input name="paciente" type="text">
        <label for="paciente"></label>
        <br>

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
       
        <textarea name="cabeza" id="cabeza"></textarea>
        <br>

        <label>Cuello<label>
        
        <textarea name="cuello" id="cuello"></textarea>
        <br>

        <label>Torax<label>
        <textarea name="torax" id="torax"></textarea>
        <br>

        <label>Abdomen<label>
       
        <textarea name="abdomen" id="abdomen"></textarea>
        <br>

        <label>Miembros<label>
        <textarea name="miembros" id="miembros"></textarea>
        <br>

        <label>Genitales<label>
        
        <textarea name="genitales" id="genitales"></textarea>
        <br>

        <label>Piel y anexos<label>
        <textarea name="piel_anexos" id="piel_anexos"></textarea>
        <br>

        <label>Resultados de laboratorio<label>
        <textarea name="resultados_lab" id="resultados_lab"></textarea>
        <br>

        <label>Gabinete<label>
        <textarea name="gabinete" id="gabinete"></textarea>
        <br>

        <label>Histopatología<label>
        <textarea name="histopatologia" id="histopatologia"></textarea>
        <br>

        <label>Otros<label>
        <textarea name="otros" id="otros"></textarea>
        <br>

        <label>Diagnóstico o problemas clínicos<label>
        <textarea name="diag_probclinicos" id="diag_probclinicos"></textarea>
        <br>

        <label>Pronóstico<label>
        <textarea name="pronostico" id="pronostico"></textarea>
        <br>

        <label>Indicación Terapéutica<label>
        <textarea name="indic_terapeutica" id="indic_terapeutica"></textarea>
        <br>

        <label>Notas<label>
        <textarea name="notastres" id="notastres"></textarea>
        <br>

        <input type="submit" name="submit">
<<<<<<< HEAD
          </p>
          </p>
          </p>
          </p>
          </p>
        </p>
        </p>
    </form>    
=======

        </form>    
>>>>>>> 27f3e984252e76b06b8e13fa3ac28af871bab733

    </div>
</div>
    
</body>
</html>

<?php
if(!isset($_POST['submit']))
    return;

    