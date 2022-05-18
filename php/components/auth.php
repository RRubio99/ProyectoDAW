<?php 
session_start();

if (isset($_POST['correo']) && 
	isset($_POST['contrasena'])) {
    
    $con=mysqli_connect("localhost","root","","proyectofinal");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    # Validation helper function
	include "func-validation.php";
	

	$email = $_POST['correo'];
	$password = $_POST['contrasena'];

	# simple form validation

	$text = "Email";
	$location = "../login.php";
	$ms = "error";
    is_empty($email, $text, $location, $ms, "");

    $text = "Contraseña";
	$location = "../login.php";
	$ms = "error";
    is_empty($password, $text, $location, $ms, "");

    # search for the email

    $result = mysqli_query($con,"SELECT * FROM usuarios WHERE correo_usuario='$email';");
    $row_cnt = mysqli_num_rows($result);

    # if the email exists
    if ($row_cnt === 1) {

        while($row = mysqli_fetch_array($result)) {
            $id_usuario = $row['id_usuario'];
            $nombre_usuario = $row['nombre_usuario'];
            $correo_usuario = $row['correo_usuario'];
            $contrasena_usuario = $row['contrasena_usuario'];
            $nacimiento_usuario = $row['nacimiento_usuario'];
            $tarjeta_usuario = $row['tarjeta_usuario'];
            $direccion_usuario = $row['direccion_usuario'];
            $pais_usuario = $row['pais_usuario'];
            
            if ($email === $correo_usuario) {
                if ($password === $contrasena_usuario) {
                    $_SESSION['id_usuario'] = $id_usuario;
                    $_SESSION['nombre_usuario'] = $nombre_usuario;
                    $_SESSION['correo_usuario'] = $correo_usuario;
                    $_SESSION['contrasena_usuario'] = $contrasena_usuario;
                    $_SESSION['nacimiento_usuario'] = $nacimiento_usuario;
                    $_SESSION['tarjeta_usuario'] = $tarjeta_usuario;
                    $_SESSION['direccion_usuario'] = $direccion_usuario;
                    $_SESSION['pais_usuario'] = $pais_usuario;
                    header("Location: ../home.php");
                }else {
                    # Error message
                    $em = "Correo o contraseña incorrectos";
                    header("Location: ../login.php?error=$em");
                }
            }else {
                # Error message
                $em = "Correo o contraseña incorrectos";
                header("Location: ../login.php?error=$em");
            }
        }

    }else{
    	# Error message
    	$em = "Correo o contraseña incorrectos";
    	header("Location: ../login.php?error=$em");
    }

}else {
	# Redirect to "../login.php"
	header("Location: ../login.php");
}

?>