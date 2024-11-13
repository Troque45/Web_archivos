<?php
// upload.php
$nombreArchivo = $_GET['nombre'];
$propietario = $_GET['propietario'];
$archivoTemporal = $_FILES['archivo']['tmp_name'];




$carpetaDestino = 'uploads/';


move_uploaded_file($archivoTemporal, $carpetaDestino . $nombreArchivo);



// Mostrar mensaje de éxito
echo "Archivo subido correctamente";
?>
