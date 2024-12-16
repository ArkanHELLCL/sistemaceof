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
    <title>Sistema CEOF - Resetear Contraseña</title>
</head>

<body>
    <div class="logo">
        <img src="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/12/logo-COLOR-400px.png">
    </div>
    <div class="wrapper recordar">
        <div class="title">Reenvío de contraseña</div>
        <form action="InicioSesion/ResetContrasena.php" method="POST">
            <div class="field">
                <input type="password" required name="new_password">
                <label>Nueva Contraseña</label>
            </div>                        
            <div class="field">
                <input type="submit" value="Restablecer contraseña">
            </div>
            <div class="signup-link"><a href="https://sysinfo.cl/ceofconsultores">Volver al sitio CEOF</a></div>
        </form>
    </div>
</body>

</html>