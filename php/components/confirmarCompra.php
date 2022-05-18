<?php

    session_start();

    $con=mysqli_connect("localhost","root","","proyectofinal");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $product_id = array_column($_SESSION['carrito'],'product_id');

    $result = mysqli_query($con,"SELECT * FROM carrito c INNER JOIN productos p ON 
        c.id_producto = p.id_producto; ");


    while($row = mysqli_fetch_array($result)) {

        foreach($product_id as $id){
            if($row['id_producto']== $id){

                $totalParcial = (int)$row['precio_producto'] * (int)$row['cantidad'];
                
                $usuario = $_SESSION['id_usuario'];
                $producto = $row['id_producto'];
                $cantidadProducto = $row['cantidad'];

                $sql="INSERT INTO historial(id_usuario, id_producto, cantidad_producto, total_precio) 
                    VALUES ($usuario,$producto,$cantidadProducto,$totalParcial);";

                if (!mysqli_query($con,$sql)) {
                    die('Error: ' . mysqli_error($con));
                }

                //Actualizar cantidad productos
                $result2 = mysqli_query($con,"SELECT * FROM productos p WHERE id_producto = $producto; ");

                while($row2 = mysqli_fetch_array($result2)) {
                    $productoNuevo = (int)$row2['cantidad_producto'] - (int)$cantidadProducto;

                    $sql2="UPDATE productos SET cantidad_producto = $productoNuevo 
                        WHERE productos.id_producto = $producto;";

                    if (!mysqli_query($con,$sql2)) {
                        die('Error: ' . mysqli_error($con));
                    }
                }

            }
        }
    }
    //Vaciar carrito
    $result3 = mysqli_query($con,"DELETE FROM carrito;");

    unset($_SESSION['carrito']);

    header("Location: ../confirmation.php");


?>