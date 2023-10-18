<?php
if(isset($_GET['enviar'])){
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];
    $passwordmd5 =md5($password);
    $conexion = new mysqli('localhost', 'root', '', 'faster');
    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$passwordmd5'";
    $resultado = $conexion->query($consulta);
    if($resultado == true){
        if($resultado-> num_rows> 0){
            while($fila = $resultado->fetch_assoc()){
                $nombres = $fila['nombres'];
                $email = $fila['email'];
            }
            $resultado->close();
            header("location: resultado.php?mensaje=nombres: ". $nombres. " ". " email: ". $email);
        }else{
            header('location: resultado.php?mensaje=mal');
        }
    }

}
?>