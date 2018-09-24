<?php
$conexion = new mysqli("localhost", "root", "", "nba");

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

$resultado = $conexion->query($consulta);
$equipos = [];
while($fila = $resultado->fetch_assoc()){
	array_push($equipos, $fila);
var_dump($consulta);

$consulta = "SELECT * FROM equipos = '76ers' ";


?>