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
            <img src="../images/logo2.png">
            
            <h1>Registros Clínica David</h1>
        </div>
    </div>


        <div class="containerP">
            <div class="menu">
                <a href="index.php">REGRESAR</a>
                <?php include "../menu.php" ?>
            </div>

            <?php 
                include "php/middleware.php";
                include "php/sql.php";                                                 

                //SI EL FORMULARIO SE ENVIO
                if(isset($_POST['submit'])){                   
                    include 'php/createLogic.php';                    
                }                       
            ?>
            <div class="contenedorPrincipal">

                <h2>Usuario NUEVO</h2>

                <form method="POST" action="">

                <h2>Tabla Usuario</h2>

                <label>NOMBRE COMPLETO</label>
                <input type="text" name="name" required><br>

                <label>CORREO</label>
                <input type="text" name="correo" required><br>

                <label>CURP</label>
                <input type="text" name="curp"><br>

                <label>Tipo de usuario</label>
                <select name="cargo" required>                    
                    <option value="doctor">doctor</option> 
                    <option value="paciente">paciente</option>                        
                </select><br>

                <label>STATUS</label>
                <select name="status" required>                    
                    <option value="activo">activo</option> 
                    <option value="inactivo">inactivo</option>                        
                </select><br>

                <label>CONTRASEÑA</label>
                <input type="text" name="password" required><br>

                <label>FECHA DE INGRESO</label>
                <input type="date" name="fec_ingreso" required><br>                                                              
                
                <h2>Tabla Domicilio</h2>

                <label>CALLE</label>
                <input type="text" name="calle"><br>

                <label>Numero externo</label>
                <input type="number" name="num_ext"><br>

                <label>Numero interno</label>
                <input type="number" name="num_int"><br>

                <label>MUNICIPIO</label>
                <input type="text" name="municipio"><br>

                <label>LOCALIDAD</label>
                <input type="text" name="localidad"><br>

                <label>COLONIA</label>
                <input type="text" name="colonia"><br>

                <label>CODIGO POSTAL</label>
                <input type="number" name="cod_postal"><br>

                <label>CELULAR 1</label>
                <input type="number" name="cel_uno"><br>

                <label>CELULAR 2</label>
                <input type="number" name="cel_dos"><br>

                

                <h2>Tabla PACIENTE</h2>

                <label>NOMBRE:</label>
                <input type="text" name="nombre"><br>

                <label>Apellido Paterno</label>
                <input type="text" name="ape_pat"><br>

                <label>Apellido Materno</label>
                <input type="text" name="ape_mat"><br>

                <label>Fecha de Nacimiento:</label>
                <input type="date" name="fecnac"><br>

                <label>SEXO:</label>
                <select name="sexo" required>        
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select><br>

                <label>DIRECCION </label>
                <input type="text" name="direccion"><br>

                <label>TELEFONO </label>
                <input type="phone" name="telefono"><br>

                <label>NIVEL ECONOMICO </label>
                <select name="nivel_eco">        
                    <option value="alto">Alto</option>
                    <option value="medio">Medio</option>
                    <option value="bajo">Bajo</option>
                </select><br>

                <label>VIVIENDA </label>
                <input type="text" name="vivienda"><br>

                <label>TIPO SANGUINEO </label>
                <input type="text" name="tipo_sang"><br>

                <label>DISCAPACIDAD </label>
                <input type="text" name="discapacidad"><br>

                <label>ETNIA </label>
                <input type="text" name="etnia"><br>

                <label>RELIGION </label>
                <input type="text" name="religion"><br>

                <input type="submit" name="submit" placeholder="modificar datos">
            </form>

        
            </div>
        </div>
    
    </body>
</html>