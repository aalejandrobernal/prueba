<?php
    include("cn.php");
    $id = $_GET["id"];
    $vendedor = "SELECT * FROM vendedores WHERE id = '$id'";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Actualizar</title>
    </head>
    <script>
        function confirmacion (){

            var respuesta = confirm(" Desea continuar con la actualizacion ?");
            if (respuesta == true ){
                return true;
            }   else{
                return false;
            } 
        }

    </script>
    <body>
            <div class="contenedor">
                <header>                            
                    <div class="contenedor1">
                                <h2 class="logotipo">Actualizar</h2>
                                <nav>
                                <nav>
                                    <a href="ventas.php">Ventas</a>
                                    <a href="vendedor.php">Vendedores</a>
                                    <a href="#" class="activo">Marca</a>
                                </nav>
                    </div>
            <div class="contact-wrapper animated bounceInUp">
                <div class="form">  
                    <form  action="boton_actualizar.php" method="post" enctype="multipart/form-data">
                        
                        <?php $resultado = mysqli_query($conexion, $vendedor);        
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                        <p>
                            <label>ID</label>
                            <input type="number" class="input_tabla" value="<?php echo $row ["id"] ?>" name="ID">
                            </p>
                        <p>
                            <label>NOMBRE</label>
                            <input type="text" class="input_tabla" value="<?php echo $row ["nombre"] ?>" name="nombre">
                        </p>
                        <p>
                            <label>TELEFONO</label>
                            <input type="number" class="input_tabla" value="<?php echo $row ["telefono"] ?>" name="telefono">
                        </p>
                        <p>
                            <label>DIRECCION</label>
                            <input type="text" class="input_tabla" value="<?php echo $row ["direccion"] ?>" name="direccion">
                        </p>
                       

                        <p class="block">
                            <button onclick='return confirmacion()'>
                                Actualizar
                            </button>
                         </p>
                        
                        <?php } mysqli_free_result($resultado)?>
                        
                    </form>
                </div>
            </div>
                </header> 
            </div>




    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main2.js"></script>
    </body>
</html>