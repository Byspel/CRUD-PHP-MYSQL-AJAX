<?php
$nombres = $_POST['nombres'];
$ocupacion = $_POST['ocupacion'];
$telefono = $_POST['telefono'];
$sitioweb = $_POST['sitioweb'];
require('Conexion.php');
$con = Conectar();
$sql = 'INSERT INTO personas (nombres, ocupacion, telefono, sitioweb) VALUES (:nombres, :ocupacion, :telefono, :sitioweb)';
$q = $con->prepare($sql);
$q->execute(array(':nombres'=>$nombres, ':ocupacion'=>$ocupacion, ':telefono'=>$telefono, ':sitioweb'=>$sitioweb));
?>
