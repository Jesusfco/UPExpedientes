<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || USUARIOS </title>
    <link rel="stylesheet" href="../css/styles.css">
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
                <a href="index.php">REGRESAR</a>
                <?php include "../menu.php" ?>
            </div>

            <?php 
                include "../php/middleware.php";
                include "../php/sql.php";                                                 

                $id = $_GET['id'];
                $sql = "SELECT * FROM receta WHERE id = '" . $id . "' ";
                if(isset($_POST['submit'])){
                    $res = $conn->query($sql);
                    $obj = $res->fetch_object();
                    include 'php/updateLogic.php';                    
                } 

                $sql = "SELECT * FROM receta WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>Actualizar Receta</h2>

                <form method="POST" action="">

                

                <label>ID USUARIO</label><br>
                <input type="number" name="user_id" value="<?php echo $obj->user_id; ?>" disabled><br>

                <label>MEDICAMENTO</label><br>
                <input type="text" name="medicamento" value="<?php echo $obj->medicamento; ?>"><br>

                <label>Unidad de Medida</label><br>
                <input type="text" name="unidad_medida" value="<?php echo $obj->unidad_medida; ?>"><br>

                <label>Dosis</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->dosis; ?>"><br>

                <label>Frecuencia</label><br>
                <input type="text" name="frecuencia" value="<?php echo $obj->frecuencia; ?>"><br>

                <label>Via de administracion</label><br>
                <input type="text" name="via_administracion" value="<?php echo $obj->via_administracion; ?>"><br>

                <label>Fecha de Inicio</label><br>
                <input type="date" name="fec_inicio" value="<?php echo $obj->fec_inicio; ?>"><br>

                <label>Fecha de Fin</label><br>
                <input type="date" name="fec_fin" value="<?php echo $obj->fec_fin; ?>"><br>

                <label>Indicaciones</label><br>
                <input type="text" name="indicaciones_ad" value="<?php echo $obj->indicaciones_ad; ?>"><br>

                

                

                

                <input type="submit" name="submit" placeholder="ACTUALIZAR datos">
            </form>

        
            </div>
        </div>
    
    </body>
</html>