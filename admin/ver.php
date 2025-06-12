<?php
// Verificación simple
$pass = "secreto123"; // Cambialo a lo que vos quieras

if ($_GET['clave'] != $pass) {
  echo "Acceso denegado 🚫";
  exit();
}

// Muestra los datos
echo "<h1>Datos capturados (educativo)</h1><pre>";
readfile("../datos.txt");
echo "</pre>";
?>
