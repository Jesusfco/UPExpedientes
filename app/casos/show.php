<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || CASO NOTIFICABLE </title>
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
                <?php include "../menu.php" ?>
            </div>

            <?php 
                include "../php/middleware.php";
                include "../php/sql.php";                                                 

                $id = $_GET['id'];                

                $sql = "SELECT * FROM casos_notificables WHERE id = '" . $id . "' ";

                $consult = setUserIdCreatorId($conn->query($sql), $conn);
                $obj = $consult[0];
                
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>RESUMEN CLÍNICO # <?php echo $obj->id; ?> </h2>
            
                    <h5> USUARIO PACIENTE</h5>
                    <p><?php echo $obj->user_id; ?></p>

                    <h5>CREADOR</h5>
                    <p><?php echo $obj->creator_id; ?></p>

                    <h5>RESUMEN CLINICO</h5>
                    <p><?php echo $obj->res_clinico; ?></p>
                    

                    <h5>DESCRIPCION DE ACCIONES</h5>
                    <p><?php echo $obj->desc_acciones; ?></p>  
                    
                    <h5>RIESGOS</h5>
                    <p><?php echo $obj->riesgos; ?></p>  

                    <h5>Registro creado el:</h5>
                    <p><?php echo $obj->created_at; ?></p>                               
        
            </div>
        </div>
    
    </body>
</html>