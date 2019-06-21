<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login |CódigoMasters|</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div><header id="header" class="alt">
		<h1><a href="index.html">I.E.P MAHATMA GANDHI</a></h1>
		<a href="#nav">Menu</a>
	</header></div>
    
    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear Cuenta</span>
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="validar.php" method="post">
            
                
                <input type="text"  name="mail" placeholder="Correo" required>
                <input type="pass" name="pass" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form method="post" action="">
                <input type="text"  name="realname" placeholder="Nombre" required>
                
                <input type="text" name="nick" placeholder="Correo" required>
                
                <input type="pass" name="pass" placeholder="Contraseña" required>
                
                <input type="rpass" name="rpass" placeholder="Repite" required>
                
                <input type="submit" name="submit" value="Registrarse">
            </form>
        </div>
        <?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
        <div class="reset-password">
            <a href="#">Olvide mi Contraseña?</a>
        </div>
    </div>
    <script src="assets/js/jquery-3.1.1.min.js"></script>    
    <script src="assets/js/main2.js"></script>
</body>
</html>