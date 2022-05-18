<?php

session_start();

if(isset($_POST['revision'])){

    $con=mysqli_connect("localhost","root","","proyectofinal");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    
    $item_array_id = array_column($_SESSION['carrito'],"product_id");

    $result = mysqli_query($con,"SELECT * FROM productos;");

    while($row = mysqli_fetch_array($result)) {

        foreach($item_array_id as $id){
            if($row['id_producto']== $id){
                //Crear sql e insertarlo
                $nombre = 'product-quantity'. $row['id_producto'];
                $nom = $_POST[$nombre];
                $usuario = $_SESSION['id_usuario'];
                $producto = $row['id_producto'];
                $sql="INSERT INTO carrito(id_usuario, id_producto, cantidad) 
                    VALUES ($usuario,$producto,$nom);";
                
                if (!mysqli_query($con,$sql)) {
                    die('Error: ' . mysqli_error($con));
                }
            }
        }
    }

    mysqli_close($con);

    header("Location: ../checkout.php");

}else{

    if(isset($_POST['borrar'])){

        $id = $_POST['borrar_product_id'];

        foreach($_SESSION['carrito'] as $key => $value){

			if($value['product_id'] == $id){
				unset($_SESSION['carrito'][$key]);

                header("Location: ../cart.php");
				
			}
		}

    }

}   

?>