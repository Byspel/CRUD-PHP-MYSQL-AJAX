<?php
$idP = $_POST['idP'];
require('Conexion.php');
$con = Conectar();
$sql = 'DELETE FROM personas WHERE id=:idPersona';
$q = $con->prepare($sql);
$q->execute(array(':idPersona'=>$idP));
?>
