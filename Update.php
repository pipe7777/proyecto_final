<?php

if(!isset($_GET['id'])  || empty($_GET['id'])){
header("Location: index.php?error="."Invalid ID");
exit();


}
$id = $_GET['id'];
 

if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error="."Invalid ID");
    exit();
}
$id = $_GET['id'];

include_once "Controller/conexion.php";
$con=new Conexion();
$con=$con ->conectar();

if(!$con) {
    header("Location: index.php?error="."Sin Conexion");
    exit();

}

$sql = "SELECT * FROM `registropersonas` WHERE Id= :id";
$con=$con->prepare($sql);
$con->bindparam(':id',$id);
$con->execute();

if($con->RowCount() == 0){
     header("Location: index.php?error="."no existe el dato");
}

$registro = $con->fetch(PDO::FETCH_ASSOC);

echo $registro['Nombre'];





?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'Layout/Layout.php'; ?>
    <div class="container mt-5">
        <!-- Aquí va el contenido de tu página, por ejemplo el formulario de actualización -->
        <h2>Actualizar Registro</h2>
        <form action="Controller/UpdateController.php" method="POST">

    <div class="row">
      <div class="col">
          <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Nombre']);?>" name="nombre">
      </div>
      <div class="col">
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Apellido']);?>" name="apellido">

      </div>

      <div class="row">
            <div class="col">
<input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Id']);?>" name="id" readonly>
      </div>
      <div class="col">
        <input type="email" class="form-control" value="<?php echo htmlspecialchars($registro['Correo']);?>" name="correo">
    </div>
    <div class="row">
      <div class="col">
          <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Edad']);?>" name="edad">
      </div>
       <div class="col">
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Telefono']);?>" name="tel">
    </div>
    </div>
    <button>registrarse<button>
   </form>
        <!-- ... -->
    </div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>