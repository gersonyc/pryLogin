<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form method="POST" class="form">
            <h1 class="title">Inicio</h1>
            <div class="inp">
                <input type="text" name="username"  class="input" placeholder="Usuario"required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="password" class="input" placeholder="Contraseña" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <input name="btningresar" class="submit" type="submit" value="Inicio Sesion"> 
            <p class="footer">No tienes cuenta? <a href="#" class="link">Por favor, Regístrate</a></p>
            
            <?php
            include("conexion_bd.php");
            include("controlador.php");
            ?>
        </form>        
        <div></div>
        
        <div class="banner">
            <h1 class="wel_text">BIENVENIDO<br></h1>
            <p class="para"><br><br></p>
        </div>
    </div>
</body>
</html>


