<?php
include 'conexion.php';

$usuarioMail = $_POST['correo'];
$clave = $_POST['contrasena'];

$buscar = mysqli_query($conexion, "SELECT * FROM alumno WHERE email='$usuarioMail' AND contrasena='$clave'");

if (mysqli_num_rows($buscar) > 0) {
    $eliminar = mysqli_query($conexion, "DELETE FROM alumno WHERE email='$usuarioMail' AND contrasena='$clave'");
    echo '
        <script>
            alert("Registro borrado con éxito.");
            window.location.href = "eleccion.html";
        </script>
    ';
} else {
    echo '
        <script>
            alert("No se encontró ninguna coincidencia. Verifique sus datos.");
            window.location.href = "borrar.html";
        </script>
    ';
}
?>

