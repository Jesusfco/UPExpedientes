<!DOCTYPE html>
<html lang="en">
<head>
<!-- <?php
    include "php/mostrar.php"?> -->
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
    <?php include "../menu.php" ?>

    </div>

    <?php 
        include "../php/middleware.php";
        include "../php/sql.php";

        $query = "SELECT * FROM usuario WHERE name LIKE '%%' ORDER BY name ASC";

        if(isset($_POST['search'])){
            $query = 'SELECT * FROM usuario WHERE name LIKE "%' . $_POST['search'] . '%" ORDER BY name ASC';
        }

        if($res = $conn->query($query)){
            
            // while ($obj = $res->fetch_object()) {
            //     printf ("%s (%s)\n", $obj->curp, $obj->correo);
            // }
        }
    ?>
    <div class="contenedorPrincipal">
    <div class="showLinks">
                    <a href="create.php">Crear Usuario </a>
                    <a href="recetas/create.php">Crear Receta</a>
                    <a href="orden/create.php">Crear Orden</a>
                    <a href="muestras/create.php">Crear Muestra</a>
                    <a href="alergias/create.php">Crear Alergia</a>
                    <a href="historial/create.php">Crear Historial</a>
                    <a href="citas/create.php">Crear Cita</a>
                    <a href="casos/create.php">Crear Caso N.</a>
                    <a href="auxiliar/create.php">Crear Auxiliar D.</a>
                </div><BR>

        <h1>Usuarios</h1>
        <a href="create.php">CREAR USUARIO </a>
        <form method="POST" action="">
            <input type="text" name="search" placeholder="NOMBRE DE USUARIO" AUTOFOCUS>
        </form>

        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre </th>
                <th>CURP</th>
                <th>Tipo</th>
                <th>Coreo</th>
                <th>Status</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php  while ($obj = $res->fetch_object()) {
            echo "
            <tr>
                <td>". $obj->id   ."</td>
                <td>". $obj->name   ."</td>
                <td>". $obj->curp   ."</td>
                <td>". $obj->cargo   ."</td>
                <td>". $obj->correo   ."</td>
                <td>". $obj->status   ."</td>
                <td>
                    <a href='update.php?id=". $obj->id ."'>Modificar</a><br>
                    <a href='show.php?id=". $obj->id ."'>Ver</a><br>                    
                    
                    
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