<?php
    require_once '../config/Conection.php';
    require_once '../mail/EnviarMail.php';
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //cambiar a myusculas
        $username = strtoupper(trim($username));
        
        try{
            $connection = new Connection();
            $pdo = $connection->connect();

            //$query = "CALL `ceofdata`.`spUsuarioxLogin_Consultar`(:username);";
            $query = "SELECT USR.*, PER.PER_Descripcion, EMP.EMP_Descripcion FROM usuarios USR LEFT JOIN empresas EMP ON EMP.EMP_Id = USR.EMP_Id JOIN perfil PER ON PER.PER_Id = USR.PER_Id WHERE ucase(trim(USR.USR_Usuario)) =:username;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                'username' => $username
            ]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if($user && $user['USR_Estado'] === 1){     //Usuario existe y esta activo
                if(password_verify($password, $user['USR_Clave'])){
                    $_SESSION['user'] = $user['USR_Id'];
                    $_SESSION['username'] = $user['USR_Usuario'];
                    $_SESSION['per_id'] = $user['PER_Id'];
                    $_SESSION['per_descripcion'] = $user['PER_Descripcion'];
                    $_SESSION['emp_descripcion'] = $user['EMP_Descripcion'];
                    
                    header('Location: ../dashboard/index.php');
                    exit();          
                }else{
                    echo 'Usuario o contraseña incorrectos';
                }
            }else{
                echo 'Usuario o contraseña incorrectos';//.password_hash($password, PASSWORD_BCRYPT);
            }

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
        
    }