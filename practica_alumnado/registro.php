<?php
include 'conexion.php';

$nom    = $_POST['nombre'];
$ape    = $_POST['apellidos'];
$nac    = $_POST['fecha_nacimiento'];
$mail   = $_POST['email'];
$clave  = $_POST['contrasena'];

if (!isset($_POST['curso'])) {
    echo '
        <script>
            alert("Debes escoger un curso.");
            window.location = "formulario.html";
        </script>
    ';
    exit();
}
$grado = $_POST['curso'];

$qTotal = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM alumno");
$infoTotal = mysqli_fetch_assoc($qTotal);

if ($infoTotal['total'] >= 25) {
    echo '
        <script>
            alert("Límite de 25 registros alcanzado.");
            window.location = "eleccion.html";
        </script>
    ';
    exit();
}

$existe = mysqli_query($conexion, "SELECT 1 FROM alumno WHERE email='$mail' LIMIT 1");
if (mysqli_num_rows($existe) > 0) {
    echo '
        <script>
            alert("El correo indicado ya está en uso.");
            window.location = "formulario.html";
        </script>
    ';
    exit();
}

$sqlAlta = "INSERT INTO alumno (nombre, apellidos, fecha_nacimiento, curso, email, contrasena)
            VALUES ('$nom', '$ape', '$nac', '$grado', '$mail', '$clave')";

$ok = mysqli_query($conexion, $sqlAlta);

if ($ok) {
    $rs = mysqli_query($conexion, "SELECT nombre, apellidos, fecha_nacimiento, curso, email FROM alumno WHERE email='$mail'");
    $row = mysqli_fetch_assoc($rs);

    echo "<h2>Registro completado</h2>";
    echo "<ul>";
    echo "<li><strong>Nombre:</strong> " . $row['nombre'] . "</li>";
    echo "<li><strong>Apellidos:</strong> " . $row['apellidos'] . "</li>";
    echo "<li><strong>Fecha de nacimiento:</strong> " . $row['fecha_nacimiento'] . "</li>";
    echo "<li><strong>Curso:</strong> " . $row['curso'] . "</li>";
    echo "<li><strong>Email:</strong> " . $row['email'] . "</li>";
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
?>
