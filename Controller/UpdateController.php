<?php
include_once "Conexion.php";

$conexion = new Conexion();
$conexion = $conexion->conectar();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$id = $_POST['id']; // Este solo se usa en el WHERE
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$tel = $_POST['tel'];

if ($conexion) {
    $consulta = "UPDATE `registropersonas` 
                 SET `Nombre` = :nombre, 
                     `Apellido` = :apellido, 
                     `Edad` = :edad, 
                     `Correo` = :correo, 
                     `Telefono` = :tel 
                 WHERE `Id` = :id";

    $stmt = $conexion->prepare($consulta);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':edad', $edad);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: ../Index.php?mensaje=Correcto");
    } else {
        header("Location: ../Index.php?mensaje=ErrorAlActualizar");
    }
} else {
    header("Location: ../Index.php?mensaje=SinConexion");
    exit();
}
?>
