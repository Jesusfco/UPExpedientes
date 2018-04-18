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
                
                if(isset($_POST['submit'])){
                    
                    include 'php/updateLogic.php';                    
                } 

                $sql = "SELECT * FROM orden WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>ACTUALIZAR ORDEN</h2>

                <form method="POST" action="">                

                    <label>ID USUARIO</label><br>
                    <input type="number" name="user_id" value="<?php echo $obj->user_id; ?>" disabled><br>

                    <label>FECHA</label><br>
                    <input type="date" name="fecha" value="<?php echo $obj->fecha; ?>"><br>

                    <label>TIPO</label><br>
                    <input type="text" name="tipo" value="<?php echo $obj->tipo; ?>"><br>

                    <label>Instrucciones de Suminitros</label><br>
                    <input type="text" name="ins_sumistro" value="<?php echo $obj->ins_sumistro; ?>"><br>

                    <label>Instrucciones Adicionales</label><br>
                    <input type="text" name="ins_adicionales" value="<?php echo $obj->ins_adicionales; ?>"><br>

                    <label>Destinatario</label><br>
                    <input type="text" name="destinatario" value="<?php echo $obj->destinatario; ?>"><br>

                    <label>Medicamento</label><br>
                    <input type="text" name="medicamento" value="<?php echo $obj->medicamento; ?>"><br>

                    <label>Diagnostico</label><br>
                    <input type="text" name="diagnostico" value="<?php echo $obj->diagnostico; ?>"><br>

                    <label>Fecha de Inicio</label><br>
                    <input type="date" name="fec_inicio" value="<?php echo $obj->fec_inicio; ?>"><br>

                    <label>Fecha de Entrega</label><br>
                    <input type="date" name="fec_entrega" value="<?php echo $obj->fec_entrega; ?>"><br>

                    <label>Fecha de Termino</label><br>
                    <input type="date" name="fec_termino" value="<?php echo $obj->fec_termino; ?>"><br>

                    <label>Estado</label><br>
                    <input type="text" name="estado" value="<?php echo $obj->estado; ?>"><br>

                    <label>Prioridad</label><br>
                    <select name="prioridad">
                        <option value="<?php echo $obj->user_id; ?>"> <?php echo $obj->user_id; ?></option>
                        <option value="BAJA">Baja</option>
                        <option value="MEDIA">Media</option>
                        <option value="ALTA">Alta</option>
                    </select>
                                                                
                    <input type="submit" name="submit" placeholder="CREAR DATOS">

                    </form>

        
            </div>
        </div>
    
    </body>
</html>