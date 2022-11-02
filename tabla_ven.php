<?php
    include("cn.php");
    $vendedores = "SELECT * FROM vendedores";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Tabla Vendedores</title>
    </head>
    
    <body>
    <div class="contenedor">
        <header>                            
            <div class="contenedor1">
                <h2 class="logotipo">Tabla Vendedores</h2>
                <nav>
                            <a href="ventas.php">Ventas</a>
                            <a href="vendedor.php">Insertar Vendedores</a>
                            <a href="#" class="activo">Marca</a>
                           
                </nav>
            </div>
        </header>
    </div>
    <div id="main">
        <table class="tabla">
            <thead>
                <tr>
                    <!-- <th class="header_tabla">ID</th> -->
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th>DIRECCION</th>
                </tr>
            </thead>
                <?php $resultado = mysqli_query($conexion, $vendedores);        
                while($row = mysqli_fetch_assoc($resultado)) { ?> 
                <tr>
                    <td class="item_tabla"><?php echo $row ["id"] ?></td>
                    <td class=item_tabla><?php echo $row ["nombre"] ?></td>
                    <td class=item_tabla><?php echo $row ["telefono"] ?></td>
                    <td class=item_tabla><?php echo $row ["direccion"] ?></td>
                    <td class=item_tabla>
                    <a href="actu.php?id=<?php echo $row ["id"];?>" class=item_tabla_link>Editar</a>
                    <a href="eliminar.php?id=<?php echo $row ["id"];?>" class=item_tabla_link>Eliminar</a>
                    </td>
                </tr>
                <?php } mysqli_free_result($resultado); ?>
        </table>
    </div>   
    
    </body>
</html>