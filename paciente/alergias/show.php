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
                <a href="index.php">REGRESAR</a><br>
                <?php include "menu.php" ?>
            </div>

            <?php 
                include "../php/middleware.php";
                include "../php/sql.php";                                                 

                $id = $_GET['id'];                

                $sql = "SELECT * FROM alergias WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>ALERGIA # <?php echo $obj->id; ?> </h2>
            
                    <h5>ID USUARIO PACIENTE</h5>
                    <p><?php echo $obj->user_id; ?></p>

                    <h5>TIPO DE MUESTRA</h5>
                    <p><?php echo $obj->tipo_reaccion; ?></p>

                    <h5>NUMERO DE MUESTRAS</h5>
                    <p><?php echo $obj->descripcion; ?></p>

                    <h5>FECHA DE RECOLECCION</label>
                    <p><?php echo $obj->medicamento; ?></p>

                    <h5>FECHA DE ENTREGA</h5>
                    <p><?php echo $obj->fec_deteccion; ?></p>       

                    <h5>Registro creado el:</h5>
                    <p><?php echo $obj->created_at; ?></p>                               
        
            </div>
        </div>
    
    </body>
</html>