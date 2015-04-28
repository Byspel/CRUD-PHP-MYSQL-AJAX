<?php
function Conectar(){
  $conn = null;
  $host = '127.0.0.1';
  $db = 'base_datos';
  $user = 'root';
  $pwd = 'root';
  try {
    $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
  }catch(PDOException $e){
    echo ':( Error al conectar con la base de datos '.$e;
    exit;
  }
  return $conn;
}
?>
