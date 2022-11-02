<?php
   
    include("cn.php");
    $pelicula = "SELECT * FROM vendedores ";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Insertar</title>
    </head>
    <body>
            <div class="contenedor">
                <header>                            
                    <div class="contenedor1">
                        <h2 class="logotipo">Vendedor-Insertar</h2>
                        <nav>
                            <a href="ventas.php">Ventas</a>
                            <a href="vendedor.php">Vendedores</a>
                            <a href="#" class="activo">Marca</a>
                        </nav>
                    </div>
                    

                    <div class="contact-wrapper animated bounceInUp">
                        <div class="form">
                            <form  action="boton_insert_ven.php" method="post" enctype="multipart/form-data">
                                <p>
                                    <label>ID</label>
                                    <input type="text" class="input_tabla" name="ID">
                                </p>
                                <p>
                                    <label>Nombre</label>
                                    <input type="text" class="input_tabla" name="NOMBRE">
                                </p>
                                <p>
                                    <label>Telefono</label>
                                    <input type="number" class="input_tabla" name="TELEFONO">
                                </p>
                                <p>
                                    <label>Direccion</label>
                                    <input type="text" class="input_tabla" name="DIRECCION">
                                </p>
                               
                                

                                <p class="block">
                                    <!-- <input class="block" type="submit" value="Registrar"> -->
                                    <button>
                                        Actualizar
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </header> 
            </div>
    
    </body>
</html>