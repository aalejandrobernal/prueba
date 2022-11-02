<?php
include("cn.php");
    $vehiculo = "SELECT * FROM marca ";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/1.css">
	<title>Insertar</title>
    </head>
    <body>
            <div class="contenedor">
                <header>                            
                    <div class="contenedor1">
                        <h2 class="logotipo">Insertar Marca</h2>
                        <nav>
                           
                            <a href="ventas.php">Ventas</a>
                            <a href="vendedores.php">Vendedores</a>
                            <a href="#" class="activo">Marca</a>
                           
                        </nav>
                    </div>
                    

                    <div class="contact-wrapper animated bounceInUp">
                        <div class="form">
                            <form  action="boton_Insertar.php" method="post" enctype="multipart/form-data">
                                
                                    <label>Marca</label>
                                    <input type="text" class="input_tabla" name="marca">
                            
                                <p class="block">
                                    <!-- <input class="block" type="submit" value="Registrar"> -->
                                    <button>
                                       Registar
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </header> 
            </div>
   
    </body>
</html>