<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || RECETAS </title>
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


    $sql = $query = "SELECT * FROM citas";

    if(isset($_POST['search']))
        $sql = $query = "SELECT * FROM citas WHERE user_id LIKE '%" . $_POST['search'] . "%' ";

    else if(isset($_GET['userid']))
        $sql = $query = "SELECT * FROM citas WHERE user_id = " . $_GET['userid'];               

        $object = doctorId($conn->query($sql), $conn);


?>

<div class="contenedorPrincipal">

<h1>CITAS </h1>
<a href="create.php">Crear CITA</a>
        <form method="POST" action="">
            <input type="text" name="search"  placeholder="id usuario">
        </form>

        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>PACIENTE </th>
                <th>DOCTOR</th>
                <th>FECHA</th>
                <th>HORA</th>                
                <th>ACCIONES</th>
            </tr>
        </thead>

        <tbody>

        <?php  
        
            foreach ($object as $obj) {
                echo "
                <tr>
                    <td>". $obj->id   ."</td>
                    <td>". $obj->user_id   ."</td>
                    <td>". $obj->medico_id   ."</td>
                    <td>". $obj->fecha   ."</td>
                    <td>". $obj->hora   ."</td>                
                    <td>
                        <a href='update.php?id=". $obj->id ."'>Modificar</a><br>
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