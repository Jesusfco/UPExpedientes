<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
	<!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- CSS DEL LOGIN -->
    <link rel="stylesheet" href="css/login.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>



<!-- <div class="gtco-loader"></div> -->
	
	

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.html"><img src="images/logo2.png" alt="Free HTML5 Website Template by FreeHTML5.co"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Inicio</a></li>
							<li><a href="about.html">Acerca de nosotros</a></li>
							<li class="has-dropdown">
								<a href="services.html">Servicios</a>
								<ul class="dropdown">
									<li><a href="#">Consulta General</a></li>
									<li><a href="#">Cirugia General</a></li>
									<li><a href="#">Laparoscopia</a></li>
									<li><a href="#">Endoscopia</a></li>
									<li><a href="#">Gastroenterologia</a></li>
								</ul>
							</li>
							
							<li><a href="portfolio.html">Conócenos</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
				
			</div>
        </nav>
        <div class="space">
        
            <div class="cardForm">
                <form action="" method="POST">
                    <h3>Iniciar Sesión</h3>
                    <img src="">
                    <div>
                        <i class="material-icons">email</i>
                        <input name="email" type="mail" placeholder="Correo" required autofocus><br>
                        <i class="material-icons">security</i>
                        <input name="password" type="password" placeholder="Contraseña" required><br>
                        <button>Iniciar Sesión</button>
                    </div>
                </form> 
            </div>
    
        </div>        

    </body>
</html>

<?php 


//VERIFICO SI YA ESTA AUTENTIFICADO
session_start();
if(isset($_POST['cargo'])){
    $cargo = $_POST['cargo'];

    if($cargo == 'doctor' || $cargo == 'ADMINISTRADOR')
    header ('Location: menuroot2/');

    else if($cargo == 'paciente')
        header ('Location: pacientes/');

}

//VERIGICA SI SE MANDO EL FORMULARIO DE LOGIN
if(!isset($_POST['email']))    
    return;
    //YA NO EJECURA LO SIGUIENTE



include 'php/sql.php';
//VERIFICO SI   UIERE ENTRAR COMO SUPERUSUARIO
if($_POST['email'] == 'superusuario' && $_POST['password'] == '12345'){    
    
        $_SESSION['id']= 2;
        $_SESSION['user']= "ADMINISTRADOR";
        $_SESSION['email']= "ADMINISTRADOR";
        $_SESSION['cargo']= "ADMINSITRADOR";
        $_SESSION['status']= "activo";
        $_SESSION["ultimoingreso"]= date("Y-n-j H:i:s");
        header ('Location: app/');

}


$sql = "SELECT * FROM usuario WHERE correo = '". $_POST['email'] ."'";

$res = $conn->query($sql);
$obj = $res->fetch_object();

//Si no hay coincidencias de correo hasta aqui ejecutas
if($obj == false)    
    return;

if($obj->password ==  $_POST['password']){

    if($obj->status == 'status') return;
    $sql = "UPDATE `usuario` SET 
        `fec_ingreso` = '" . date("Y-n-j") . "'
        WHERE `usuario`.`id` = '" . $obj->id . "'";
    
        

    $_SESSION['id']=$obj->id;
    $_SESSION['user']=$obj->name;
    $_SESSION['email']=$obj->correo;
    $_SESSION['cargo']=$obj->cargo;
    $_SESSION['status']= $obj->status;
    $_SESSION["ultimoingreso"]= date("Y-n-j H:i:s");

    if($obj->cargo == 'doctor')
    header ('Location: app/');

    else if($obj->cargo == 'paciente')
    header ('Location: paciente/');

  
}
?>