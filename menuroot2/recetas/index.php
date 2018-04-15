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


    $sql = $query = "SELECT * FROM receta!";

    if(isset($_POST['userid']))
        $sql = $query = "SELECT * FROM receta WHERE user_id = " . $_POST['userid'];

    else if(isset($_GET['userid']))
        $sql = $query = "SELECT * FROM receta WHERE user_id = " . $_GET['userid'];
       
        $res = $conn->query($sql);
    

?>

<div class="contenedorPrincipal">

<h1>RECETAS </h1>
<a href="create.php">Crear Receta</a>
        <form method="POST" action="">
            <input type="text" name="search"  placeholder="id usuario">
        </form>

        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>PACIENTE </th>
                <th>CREADOR</th>
                <th>Medicamento</th>
                <th>Fecha de creación</th>                
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php  
        if($res){
            while ($obj = $res->fetch_object()) {
                echo "
                <tr>
                    <td>". $obj->id   ."</td>
                    <td>". $obj->user_id   ."</td>
                    <td>". $obj->creator_id   ."</td>
                    <td>". $obj->medicamento   ."</td>
                    <td>". $obj->created_at   ."</td>                
                    <td>
                        <a href='update.php?id=". $obj->id ."'>Modificar</a><br>
                        <a href='show.php?id=". $obj->id ."'>Modificar</a><br>
                        <a href='delete.php?id=". $obj->id ."'>Eliminar</a><br>
                        
                    </td>
                </tr>
                
                ";
            }
        }
         
        ?>
            


        </tbody>
    </table>

     </div>
</div>
    
</body>
</html>