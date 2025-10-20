<?php
include 'conexion.php';

$nom    = $_POST['nombre_producto'];
$stock    = $_POST['stock_producto'];
$compra    = $_POST['precio_compra'];
$venta   = $_POST['precio_venta'];



$existe = mysqli_query($conexion, "SELECT 1 FROM stock WHERE nombre='$nom' LIMIT 1");
if (mysqli_num_rows($existe) > 0) {
    ;
    $sqlinsertar1="UPDATE stock set stock=stock+$stock where nombre='$nom';";
    $ok = mysqli_query($conexion, $sqlinsertar1);
    if ($ok) {
    $rs = mysqli_query($conexion, "SELECT nombre,stock,precioCompra,precioVenta FROM stock WHERE nombre='$nom'");
    $row = mysqli_fetch_assoc($rs);

    echo "<h2>Registro completado</h2>";
    echo "<ul>";
    echo "<li><strong>Nombre:</strong> " . $row['nombre'] . "</li>";
    echo "<li><strong>stock:</strong> " . $row['stock'] . "</li>";
    echo "<li><strong>precioCompra:</strong> " . $row['precioCompra'] . "</li>";
    echo "<li><strong>precioVenta:</strong> " . $row['precioVenta'] . "</li>";
    echo "</ul>";
    echo '<a href="eleccion.html"><button id="boton">Volver</button></a>';
} else {
    echo '
        <script>  
            alert("No se pudo guardar el usuario.");
            window.location = "eleccion.html";
        </script>
    ';
}
    exit();
}

$sqlinsertar1="INSERT INTO stock(nombre,stock,precioCompra,precioVenta) 
                VALUES ('$nom','$stock','$compra','$venta')";
$ok = mysqli_query($conexion, $sqlinsertar1);
if ($ok) {
    $rs = mysqli_query($conexion, "SELECT nombre,stock,precioCompra,precioVenta FROM stock WHERE nombre='$nom'");
    $row = mysqli_fetch_assoc($rs);

    echo "<h2>Registro completado</h2>";
    echo "<ul>";
    echo "<li><strong>Nombre:</strong> " . $row['nombre'] . "</li>";
    echo "<li><strong>stock:</strong> " . $row['stock'] . "</li>";
    echo "<li><strong>precioCompra:</strong> " . $row['precioCompra'] . "</li>";
    echo "<li><strong>precioVenta:</strong> " . $row['precioVenta'] . "</li>";
    echo "</ul>";
    echo '<a href="eleccion.html"><button id="boton">Volver</button></a>';
} else {
    echo '
        <script>  
            alert("No se pudo guardar el usuario.");
            window.location = "eleccion.html";
        </script>
    ';
}



mysqli_close($conexion);
exit;

?>
