<?php 
    session_start();
    session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v1.4">
    <link rel="icon" href="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-32x32.png" sizes="32x32">
    <link rel="icon" href="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-180x180.png">
    <meta name="msapplication-TileImage" content="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/11/cropped-logo-4-270x270.png">
    <title>Sistema CEOF - Resetear Contraseña</title>
</head>

<body>
    <div class="banner-inner fill">
        <div class="banner-bg fill">
            <img loading="lazy" decoding="async" width="534" height="534" src="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/12/remuneraciones.png" class="bg attachment-large size-large" alt="">                        
            <div class="overlay"></div>            
        </div>        
    </div>
    <div class="logo">
        <img src="https://sysinfo.cl/ceofconsultores/wp-content/uploads/2024/12/logo-BLANCO-400px.png">
    </div>
    <div class="wrapper recordar">
        <div class="title">Resetear contraseña</div>
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
