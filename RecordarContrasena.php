<?php 
    session_start();
    session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema CEOF - Recordar Contraseña</title>
</head>

<body>
    <div class="logo">
        <img src="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/12/logo-COLOR-400px.png">
    </div>
    <div class="wrapper recordar">
        <div class="title">Reenvio de contraseña</div>
        <form action="InicioSesion/RecordarContraseña.php" method="POST">
            <div class="field">
                <input type="email" required name="username">
                <label>Correo</label>
            </div>                        
            <div class="field">
                <input type="submit" value="Enviar">
            </div>
            <div class="signup-link"><a href="https://sysinfo.cl/ceofconsultores">Volver al sitio CEOF</a></div>
        </form>
    </div>
</body>

</html>