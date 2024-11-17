<?php

if (!empty($_POST["btningresar"])) {
        $usuario = $_POST["username"];
        $clave = $_POST["password"];
        $sql = $conexion->query("select * from users where username ='$usuario' and password='$clave'");
        if($datos=$sql ->fetch_object()){
            header("Location: confirmacion.php"); // Redirigir a la página de confirmación
        }else{
           echo '
            <div class="alert-container" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.5); z-index: 9999; display: flex; justify-content: center;
            align-items: center;">
                <div class="alert" style="background-color: purple; color: white; border: 2px solid black;
                padding: 20px; text-align: center; border-radius: 5px;">
                    <strong>ACCESO DENEGADO</strong>
                    <br><br>
                    <button type="button" class="btn" style="background-color: black; color: white;"
                    onclick="cerrarAlerta()">Aceptar</button>
                </div>
            </div>
            <script>
                function cerrarAlerta() {
                    document.querySelector(".alert-container").style.display = "none";
                }
            </script>
            ';
    }
}
?>



