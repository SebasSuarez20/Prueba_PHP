<?php
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$Search = $_GET['Search'];

function GetAll()
{
  require_once('../Conexion/Conexion.php');
  $Conexion = new Conexion();
  $GetConexion = $Conexion->ConnSuccesfull();
  $Query = "SELECT * FROM aspirante";
  $Execute = mysqli_query($GetConexion, $Query);
  $GetRows = array();

  while ($Rows = mysqli_fetch_assoc($Execute)) {
    $GetRows[] = $Rows;
  }

  echo json_encode($GetRows);
}

if (isset($_GET['Search'])) {
  GetAll();
} else {
  echo "No se encontro el valor.";
}
