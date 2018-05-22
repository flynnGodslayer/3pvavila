<?php  
include_once 'conexion.php';
$sql = "SELECT
    nombre, apaterno, amaterno, telefono, email
FROM
    usuarios USUARIOS
;";
$usuarios = queryPSQL($sql);
?>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>apaterno</th>
                    <th>amaterno</th>
                    <th>nombre</th>
                    <th>telefono</th>
                    <th>email</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($usuario = pg_fetch_assoc($usuarios)) :
                    ?>
                    <tr>             
                        <td><?php echo $usuario['nombre']; ?></td>         
                        <td><?php echo $usuario['apaterno']; ?></td>
                        <td><?php echo $usuario['amaterno']; ?></td>
                        <td><?php echo $usuario['telefono']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                    </tr>
                    <?php
                endwhile;
                 ?>
            </tbody>
        </table>
