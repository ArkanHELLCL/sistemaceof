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
    <title>Sistema CEOF - Login v1</title>
    <link rel="icon" href="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-32x32.png" sizes="32x32">
    <link rel="icon" href="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-180x180.png">
    <meta name="msapplication-TileImage" content="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-270x270.png">
</head>

<body>
    <div class="logo">
        <img src="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/12/logo-COLOR-400px.png">
    </div>
    <div class="wrapper">
        <div class="title">Inicia sesion</div>
        <form action="InicioSesion/InicioSesion.php" method="POST">
            <div class="field">
                <input type="text" required name="username">
                <label>Usuario</label>
            </div>
            <div class="field">
                <input type="password" required name="password">
                <label>Clave</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Recordar</label>
                </div>
                <div class="pass-link"><a href="RecordarContrasena.php">Olvido su contrasena?</a></div>
            </div>
            <div class="field">
                <input type="submit" value="Ingresar">
            </div>
            <div class="signup-link"><a href="https://sysinfo.cl/ceofconsultores">Volver al sitio CEOF</a></div>
        </form>
    </div>
</body>

</html>
