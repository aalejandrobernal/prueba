<?php
   
    include("cn.php");
    $ventas = "SELECT * FROM ventas ";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Insertar Ventas</title>
    </head>
    <body>
            <div class="contenedor">
                <header>                            
                    <div class="contenedor1">
                        <h2 class="logotipo">Insertar Ventas</h2>
                        <nav>
                            <a href="#" class="activo">Ventas</a>
                            <a href="vendedor.php">Vendedores</a>
                            <a href="vehiculos" >Marca</a>
                        </nav>
                    </div>
                    

                    <div class="contact-wrapper animated bounceInUp">
                        <div class="form">
                            <form  action="boton_insert_ventas.php" method="post" enctype="multipart/form-data">
                                <p>
                                    <label>ID VENDEDOR</label>
                                    <input type="text" class="input_tabla" name="ID">
                                </p>
                                <p>
                                    <label>MATRICULA</label>
                                    <input type="text" class="input_tabla" name="MARTRICULA">
                                </p>
                                <p> 
                                    <label>VALOR</label>
                                    <input type="number" class="input_tabla" name="VALOR">
                                </p>
                                
                               
                                

                                <p class="block">
                                    
                                    <button>
                                        INGRESAR VENTA
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </header> 
            </div>
    
    </body>
</html>