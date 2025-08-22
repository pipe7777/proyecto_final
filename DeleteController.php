<?php
include_once "Conexion.php";

$conexion = new Conexion();
$conexion = $conexion->conectar();

if (!$conexion) {
    header("Location: ../Index.php?mensaje=SinConexion");
    exit();
}

// Obtener el ID del registro a eliminar, por ejemplo desde GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: ../Index.php?mensaje=IdNoValido");
    exit();
}

$id = $_GET['id'];

try {
    $consulta = "DELETE FROM registropersonas WHERE Id = :id";
    $stmt = $conexion->prepare($consulta);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: ../Index.php");
    } else {
        header("Location: ../Index.php?mensaje=ErrorAlEliminar");
    }
} catch (PDOException $e) {
    // En caso de error puedes manejarlo aquí
    header("Location: ../Index.php?mensaje=ErrorPDO");
    exit();
}
?>
