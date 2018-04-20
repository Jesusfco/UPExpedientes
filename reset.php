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
                            <li><a href="contacto.php">Contacto</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
				
			</div>
        </nav>
        <div class="space">
        
            <div class="cardForm">
                <br>
                    <h3>Recuperar Contraseña</h3>
                    
                    <div class="row">
					<div class="col-md-12">
                        <?php 
                            session_start();
                            if(isset($_SESSION['reset']))
                            {
                                if($_SESSION['reset'] == true){
                                    echo "
                                    <script>
                                        alert('REVISA TU CORREO PARA RECUPERAR TU CONTRASEÑA');
                                    </script>";

                                    $_SESSION['reset'] = false;
                                }
                            }
                        ?>
						<form method="POST" action="resetLogic.php">
							
							<div class="form-group">
								<label for="name">Correo</label>
								<input name="email" type="mail" class="form-control" id="email" required>
							</div>
							
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" value="Enviar ">
							</div>
						</form>
					</div>
                
            </div>
    
        </div>        

    </body>
</html>