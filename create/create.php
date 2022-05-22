<?php
include("../conexion/conexion.php");
?>
<form action="post.php" method="post">
    <input type="text" name="imagen" placeholder="imagen">
    <input type="submit" value="Enviar">
</form>
<div class="row">
                <div class="col-4"></div>
                <div class="col-5"><?php  if(isset($_GET['sumbit']) && !empty($_GET['sumbit']) && $_GET['valor']){
                $idImagen = 3;    
                $idImagen = $_GET['valor'];
                $Consultasql2 = "SELECT url FROM imagenes WHERE id = $idImagen ;" ;
                $consulta2 = mysqli_query($con,$Consultasql2);
                $dato = $consulta2->fetch_assoc();
                $Imagen = $dato["url"];

                echo"<img src=".$Imagen." alt='el gato' style='width:300px;height:300px;'>";
                

                } ?>
                </div>
                
            </div>
            