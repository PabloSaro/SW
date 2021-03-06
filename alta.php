<!DOCTYPE html>
<?php 
  session_start(); 
  ?>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>	
<body class="landing is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">IVELITE</a> tu agencia de viajes.</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
									<li><a href="buscador.html">Buscador</a></li>
									<li><a href="contacto.html">Contacto</a></li>
									<li><a href="foro.html">Foro</a></li>
									<li><a href="nosotros.html">Sobre nosotros</a></li>
									<li><a href="home.php">Guias Turisticas</a></li>
								</ul>
							</li>
							<li><a href="alta.php" class="button">Regístrate</a></li> 
						</ul>
					</nav>
				</header>
	<!-- LOGIN -->
				<section id="banner">
					<h2>Formulario de registro</h2>
					<form action="procesarAlta.php" method="POST">
					<fieldset>
					<p>Email: <input type="text" name="email" placeholder="Enter your email"/></p>
					<p>Name: <input type="text" name="username" placeholder="Enter your name"/></p>
					<p>Password: <input type="password" name="password" placeholder="Enter your pass"/></p>
					<button class="button primary" type="submit">Registrarse</button>
					</fieldset>
					</form>
				</section>	
   <!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
				</footer>	

<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>				
</body>
</html>
