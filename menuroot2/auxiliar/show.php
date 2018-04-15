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
                <a href="index.php">REGRESAR</a><br>
                <?php include "menu.php" ?>
            </div>

            <?php 
                include "../php/middleware.php";
                include "../php/sql.php";                                                 

                $id = $_GET['id'];                

                $sql = "SELECT * FROM auxiliar_diagnostico WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>AUXILIAR DIAGNOSTICO # <?php echo $obj->id; ?> </h2>
            
                    <h5>ID USUARIO PACIENTE</h5>
                    <p><?php echo $obj->user_id; ?></p>

                    <h5>TIPO DE ESTUDIO</h5>
                    <p><?php echo $obj->tipo_estudio; ?></p>

                    <h5>DIAGNOSTICO RELACIÓN</h5>
                    <p><?php echo $obj->diagno_relacion; ?></p>

                    <h5>URGENCIA</label>
                    <p><?php echo $obj->urgencia; ?></p>

                    <h5>INDICACIONES</h5>
                    <p><?php echo $obj->indicaciones; ?></p>       

                    <h5>REGISTRO CREADO EL:</h5>
                    <p><?php echo $obj->created_at; ?></p>                               
        
            </div>
        </div>
    
    </body>
</html>