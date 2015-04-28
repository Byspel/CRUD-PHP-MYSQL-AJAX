<?php
$nombres = $_POST['nombres'];
$ocupacion = $_POST['ocupacion'];
$telefono = $_POST['telefono'];
$sitioweb = $_POST['sitioweb'];
$idP = $_POST['idP'];
require('Conexion.php');
$con = Conectar();
$sql = 'UPDATE personas SET nombres=:nombres, ocupacion=:ocupacion, telefono=:telefono, sitioweb=:sitioweb WHERE id=:idPersona';
$q = $con->prepare($sql);
$q->execute(array(':nombres'=>$nombres, ':ocupacion'=>$ocupacion, ':telefono'=>$telefono, ':sitioweb'=>$sitioweb, ':idPersona'=>$idP));
?>
