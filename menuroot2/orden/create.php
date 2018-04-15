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
            <img src="http://localhost/expediente/images/1ec3ed77-94bc-4b24-b1f9-13da8646b9f5.png">
            
            <h1>Registros Clínica David</h1>
        </div>
    </div>


        <div class="containerP">
            <div class="menu">
                <a href="index.php">REGRESAR</a><BR>
                <?php include "menu.php" ?>
            </div>

            <?php 
                include "../php/middleware.php";
                include "../php/sql.php";                                                 

                //SI EL FORMULARIO SE ENVIO
                if(isset($_POST['submit'])){                   
                    include 'php/createLogic.php';                    
                }    
                $id = "";
                if(isset($_GET['id']))
                    $id = $_GET['id'];                   
            ?>
            <div class="contenedorPrincipal">

                <h2>Crear Orden</h2>

                <form method="POST" action="">

                

                    <label>ID USUARIO PACIENTE</label><br>
                    <input type="number" name="user_id" value="<?php echo $id; ?>" required><br>

                    <label>FECHA</label><br>
                    <input type="date" name="fecha"><br>

                    <label>TIPO</label><br>
                    <input type="text" name="tipo"><br>

                    <label>Instrucciones de Suminitros</label><br>
                    <input type="text" name="ins_sumistro"><br>

                    <label>Instrucciones Adicionales</label><br>
                    <input type="text" name="ins_adicionales"><br>

                    <label>Destinatario</label><br>
                    <input type="text" name="destinatario"><br>

                    <label>Medicamento</label><br>
                    <input type="text" name="medicamento"><br>

                    <label>Diagnostico</label><br>
                    <input type="text" name="diagnostico"><br>

                    <label>Fecha de Inicio</label><br>
                    <input type="date" name="fec_inicio"><br>

                    <label>Fecha de Entrega</label><br>
                    <input type="date" name="fec_entrega"><br>

                    <label>Fecha de Termino</label><br>
                    <input type="date" name="fec_termino"><br>

                    <label>Estado</label><br>
                    <input type="text" name="estado"><br>

                    <label>Prioridad</label><br>
                    <select name="prioridad">
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