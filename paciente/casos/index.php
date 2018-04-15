<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || CASOS NOTIFICABLES </title>
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
        <?php include "menu.php" ?>

    </div>

<?php 

    include "../php/middleware.php";
    include "../php/sql.php";


    $sql = $query = "SELECT * FROM casos_notificables WHERE user_id = " . $_SESSION['id'];

       
        $consult = setUserIdCreatorId($conn->query($sql), $conn);
    

?>

<div class="contenedorPrincipal">

<h1>CASOS NOTIFICABLES</h1>

        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>PACIENTE </th>                
                <th>CREADOR</th>
                <th>RESUMEN CLINICO</th>                
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php  
        foreach($consult as $obj){
            echo "
            <tr>
                <td>". $obj->id   ."</td>
                <td>". $obj->user_id   ."</td>
                <td>". $obj->creator_id   ."</td>
                <td>". $obj->res_clinico   ."</td>                
                <td>
                    <a href='php/pdf.php?id=". $obj->id ."'>PDF</a><br>
                    <a href='show.php?id=". $obj->id ."'>VER</a><br>
                    <a href='delete.php?id=". $obj->id ."'>Eliminar</a><br>
                    
                </td>
            </tr>
            
            ";
            
        }
         
        ?>
            


        </tbody>
    </table>

     </div>
</div>
    
</body>
</html>