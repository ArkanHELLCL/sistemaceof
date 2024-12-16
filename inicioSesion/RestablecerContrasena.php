<?php
require_once '../config/Conection.php';
require_once '../mail/EnviarMail.php';

function generateResetToken($email) {
    $connection = new Connection();
    $pdo = $connection->connect();

    $query = "CALL `ceofdata`.`spUsuarioxEmail_Consultar`(:email);";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'email' => $email
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user && $user['USR_Estado'] === 1){     //Usuario existe y esta activo
        // Generar el token
        $token = bin2hex(random_bytes(32));  // Token de 64 caracteres (32 bytes)
        $token_expiration = date('Y-m-d H:i:s', strtotime('+1 hour'));  // Expira en 1 hora
        
        // Guardar el token y la fecha de expiración en la base de datos
        /*$stmt = $conn->prepare("UPDATE usuarios SET reset_token = ?, reset_token_expiration = ? WHERE email = ?");
        $stmt->bind_param("sss", $token, $token_expiration, $email);
        $stmt->execute();*/
        $query = "CALL `ceofdata`.`spUsuarioToken_Modificar`(:token, :token_expiration, :usrid);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'token' => $token,
            'token_expiration' => $token_expiration,
            'usrid' => $user['USR_Id']
        ]);

        
        // Enviar el enlace por correo electrónico
        $reset_link = "http://sistemaceof.cl/ResetPassword.php?token=$token";
        $subject = "Restablecer tu contraseña";
        $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: $reset_link. Este enlace es válido por 1 hora.";
        $headers = "From: no-reply@sysinfo.cl";

        mail($email, $subject, $message, $headers);
        
        echo "Se ha enviado un enlace de restablecimiento de contraseña a tu correo.";
    } else {
        echo "El email no existe en nuestra base de datos.";
    }
}
?>