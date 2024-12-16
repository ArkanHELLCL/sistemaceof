<?php
// reset_password.php
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Conectarse a la base de datos
    $conn = new mysqli("host", "usuario", "password", "basedatos");

    // Verificar si el token es válido y si no ha expirado
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE reset_token = ? AND reset_token_expiration > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        if (isset($_POST['new_password'])) {
            $new_password = hash('sha256', $_POST['new_password']);  // Hashear la nueva contraseña
            
            // Actualizar la contraseña en la base de datos
            $stmt = $conn->prepare("UPDATE usuarios SET password = ?, reset_token = NULL, reset_token_expiration = NULL WHERE reset_token = ?");
            $stmt->bind_param("ss", $new_password, $token);
            $stmt->execute();
            
            echo "Tu contraseña ha sido restablecida con éxito.";
        }
    } else {
        echo "El token es inválido o ha expirado.";
    }
}
?>