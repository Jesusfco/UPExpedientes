<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || USUARIOS </title>
    <link rel="stylesheet" href="css/styles.css
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
        <a href="create.php">Crear Usuario</a>
        
        <br><br><br>
        <a href="php/closeSession.php">Salir</a>

    </div>

    <?php 
        include "php/middleware.php";
        include "php/sql.php";

        $query = "SELECT * FROM usuario";

        if(isset($_POST['search'])){
            $query = 'SELECT * FROM usuario WHERE name LIKE "%' . $_POST['search'] . '%"';
        }

        if($res = $conn->query($query)){
            
            // while ($obj = $res->fetch_object()) {
            //     printf ("%s (%s)\n", $obj->curp, $obj->correo);
            // }
        }
    ?>
    <div class="contenedorPrincipal">

        <h1>Usuarios</h1>
        <form method="POST" action="">
            <input type="text" name="search" >
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
                    <a href='status.php?id=". $obj->id ."'>Dara de Baja</a><br>                    
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