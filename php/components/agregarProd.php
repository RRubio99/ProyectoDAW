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

    $result = mysqli_query($con,"SELECT * FROM productos;");

    while($row = mysqli_fetch_array($result)) {

        if($row['nombre_producto']== $nombre){
            $em = "Ya existe ese producto";
            header("Location: ../agregarProducto.php?error=$em");
        }
    }

    $imagenURL = '../images/shop/products/'.$foto;

    $sql="INSERT INTO productos(nombre_producto, descripcion_producto, fotos_producto, precio_producto, cantidad_producto,
        tipo_producto, origen_producto) VALUES ('$nombre','$descripcion','$imagenURL',$precio,$cantidad,'$tipo','$origen');";
    
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }

    mysqli_close($con);

    header("Location: ../shop.php");

?>