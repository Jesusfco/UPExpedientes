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
                <a href="index.php">REGRESAR</a>
                <?php include "menu.php" ?>

            </div>

            <?php 
                include "php/middleware.php";
                include "php/sql.php";
                                
                $id = $_GET['id'];

                $query1 = "SELECT * FROM usuario WHERE id = '" . $id . "' ";
                $query2 = "SELECT * FROM domicilo WHERE user_id = " . $id ;
                $query3 = "SELECT * FROM paciente WHERE user_id = " . $id ;


                //SI EL FORMULARIO SE ENVIO
                if(isset($_POST['submit'])){
                    $res1 = $conn->query($query1);
                    $obj1 = $res1->fetch_object();
                    include 'php/updateLogic.php';                    
                }   
                //consultamos
                $res1 = $conn->query($query1);
                $obj1 = $res1->fetch_object();                 

                $res2 = $conn->query($query2);
                $obj2 = $res2->fetch_object();  

                $res3 = $conn->query($query3);
                $obj3 = $res3->fetch_object();  
                
            ?>
            <div class="contenedorPrincipal">

                <h2>Usuario <?php echo $obj1->curp; ?></h2>
            <form method="POST" action="">

                <h2>Tabla Usuario</h2>

                <label>NOMBRE COMPLETO</label>
                <input type="text" name="name" value="<?php echo $obj1->name; ?>"><br>

                <label>CURP</label>
                <input type="text" name="curp" value="<?php echo $obj1->curp; ?>"><br>

                <label>CARGO: <?php echo $obj1->cargo; ?></label><br>
                
                
                

                
                <label>CORREO</label>
                <input type="text" name="correo" value="<?php echo $obj1->correo; ?>"><br>

                <label>STATUS</label>
                <select name="status">
                    <option value="<?php echo $obj1->status; ?>"><?php echo $obj1->status; ?></option>
                    <option value="activo">activo</option> 
                    <option value="inactivo">inactivo</option>                        
                </select>
                
                <h2>Tabla Domicilio</h2>

                <label>CALLE</label>
                <input type="text" name="calle" value="<?php echo $obj2->calle; ?>"><br>

                <label>Numero externo</label>
                <input type="number" name="num_ext" value="<?php echo $obj2->num_ext; ?>"><br>

                <label>Numero interno</label>
                <input type="number" name="num_int" value="<?php echo $obj2->num_int; ?>"><br>

                <label>MUNICIPIO</label>
                <input type="text" name="municipio" value="<?php echo $obj2->municipio; ?>"><br>

                <label>LOCALIDAD</label>
                <input type="text" name="localidad" value="<?php echo $obj2->localidad; ?>"><br>

                <label>COLONIA</label>
                <input type="text" name="colonia" value="<?php echo $obj2->colonia; ?>"><br>

                <label>CODIGO POSTAL</label>
                <input type="number" name="cod_postal" value="<?php echo $obj2->cod_postal; ?>"><br>

                <label>CELULAR 1</label>
                <input type="number" name="cel_uno" value="<?php echo $obj2->cel_uno; ?>"><br>

                <label>CELULAR 2</label>
                <input type="number" name="cel_dos" value="<?php echo $obj2->cel_dos; ?>"><br>
                
                <h2>Tabla PACIENTE</h2>

                    <label>NOMBRE:</label>
                    <input type="text" name="nombre" value="<?php echo $obj3->nombre; ?>"><br>

                    <label>Apellido Paterno</label>
                    <input type="text" name="ape_pat" value="<?php echo $obj3->ape_pat; ?>"><br>

                    <label>Apellido Materno</label>
                    <input type="text" name="ape_mat" value="<?php echo $obj3->ape_mat; ?>"><br>

                    <label>Fecha de Nacimiento:</label>
                    <input type="date" name="fecnac" value="<?php echo $obj3->fecnac; ?>"><br>

                    <label>SEXO:</label>
                    <select name="sexo">
                        <option value="<?php echo $obj3->sexo; ?>"> <?php echo $obj3->sexo; ?></option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select><br>

                    <label>DIRECCION </label>
                    <input type="text" name="direccion" value="<?php echo $obj3->direccion; ?>"><br>

                    <label>TELEFONO </label>
                    <input type="phone" name="telefono" value="<?php echo $obj3->telefono; ?>"><br>

                    <label>NIVEL ECONOMICO </label>
                    <select name="nivel_eco">
                        <option value="<?php echo $obj3->nivel_eco; ?>"> <?php echo $obj3->nivel_eco; ?></option>
                        <option value="pobre">pobre</option>
                        <option value="rico">rico</option>
                    </select><br>

                    <label>VIVIENDA </label>
                    <input type="text" name="vivienda" value="<?php echo $obj3->vivienda; ?>"><br>

                    <label>TIPO SANGUINEO </label>
                    <input type="text" name="tipo_sang" value="<?php echo $obj3->tipo_sang; ?>"><br>

                    <label>DISCAPACIDAD </label>
                    <input type="text" name="discapacidad" value="<?php echo $obj3->discapacidad; ?>"><br>

                    <label>ETNIA </label>
                    <input type="text" name="etnia" value="<?php echo $obj3->etnia; ?>"><br>

                    <label>RELIGION </label>
                    <input type="text" name="religion" value="<?php echo $obj3->religion; ?>"><br>
                                <input type="submit" name="submit" placeholder="modificar datos">
                </form>

        
            </div>
        </div>
    
    </body>
</html>