<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>

<?php
    require "conexion.php";
    
    $consulta_sql="SELECT * FROM persona";
    $resultado=$conexion->query($consulta_sql);

    $count=mysqli_num_rows($resultado);
    echo "<table border=3px class='striped'>
            <tr>
                <th>folio</th>
                <th>nombre</th>
                <th>curp</th>
                <th>numero_de_cuenta</th>
                <th>carrera</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>email</th>
                <th>password</th>
                <th>fecha_registro</th>
                <th>permisos</th>
            
            </tr>
    ";

            if ($count>0){
                while($row=mysqli_fetch_assoc($resultado)){
                    echo"<tr>";
                        echo "<td>".$row['folio']."</td>";
                        echo "<td>".$row['nombre']."</td>";
                        echo "<td>".$row['curp']."</td>";
                        echo "<td>".$row['numero_de_cuenta']."</td>";
                        echo "<td>".$row['carrera']."</td>";
                        echo "<td>".$row['direccion']."</td>";
                        echo "<td>".$row['telefono']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['password']."</td>";
                        echo "<td>".$row['fecha_registro']."</td>";
                        echo "<td>".$row['permisos']."</td>";
                    echo "</tr>";
            }
            echo "</table>";
        }else{

?>

            <h1 style='color:blue'>Sin ningun registro</h1>
<?php } ?>
<a href="registro.php" class="waves-effect waves-light btn">Nuevo Registro</a>
<a href="eliminarP.php" class="waves-effect waves-light btn orange">Eliminar Registro</a>
    
</body>
</html>
