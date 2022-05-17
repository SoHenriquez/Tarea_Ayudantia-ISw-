<?php

require_once('../conexion/conexion.php');



$ConsultaSql =  "SELECT * FROM imagenes;";
$consulta =  mysqli_query($con,$ConsultaSql);


                
?>