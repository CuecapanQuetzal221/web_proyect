<?php
    require "conexion.php";
    
    $consulta_sql="SELECT * FROM persona";
    $resultado=$conexion->query($consulta_sql);

    $count=mysqli_num_rows($resultado);
    echo "<table border=3px>
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
    <h1><a href='registro.php'>registro</a></h1>
    <h1><a href='eliminarP.php'>EliminarRegistro</a></h1>