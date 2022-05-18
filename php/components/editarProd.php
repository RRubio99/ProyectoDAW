<?php

    session_start();

    $con=mysqli_connect("localhost","root","","proyectofinal");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    # Validation helper function
    include "func-validation.php";

    $nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
    $foto = $_POST['foto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $tipo = $_POST['tipo'];
    $origen = $_POST['origen'];
    $id = $_POST['id'];

    #Nombre
    $text = "Nombre";
	$location = "../agregarProducto.php";
	$ms = "error";
    is_empty($nombre, $text, $location, $ms, "");

    #Descripción
    $text = "Descripción";
    is_empty($descripcion, $text, $location, $ms, "");

    #Foto
    $text = "Foto";
    is_empty($foto, $text, $location, $ms, "");

    #Precio
    $text = "Precio";
    is_empty($precio, $text, $location, $ms, "");

    #cantidad
    $text = "Cantidad";
    is_empty($cantidad, $text, $location, $ms, "");

    #tipo
    $text = "Tipo";
    is_empty($tipo, $text, $location, $ms, "");

    #origen
    $text = "Origen";
    is_empty($origen, $text, $location, $ms, "");


    mysqli_query($con,"UPDATE productos SET nombre_producto='$nombre', descripcion_producto='$descripcion',
        fotos_producto='$foto', precio_producto=$precio, cantidad_producto=$cantidad, tipo_producto='$tipo',
        origen_producto='$origen'
      WHERE id_producto=$id;");

    mysqli_close($con);

    header("Location: ../shop.php");

?>