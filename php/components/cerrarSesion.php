<?php

session_start();

// borrar las variables de sesión
session_unset();

// destruir la sesión
session_destroy();

header("Location: ../home.php");

?>