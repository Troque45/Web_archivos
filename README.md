# Web_archivos

<!DOCTYPE html>
<html>
<head>
    <titleWeb de archivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sube aquí tus archivos</h1>
    <br>
    <br>
    <br>
    <form action="upload.php" method="get" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Nombre del archivo">
        <input type="text" name="propietario" placeholder="Propietario">
        <input type="file" name="archivo">
        <input type="submit" value="Subir">
    </form>
    <div id="resultado"></div>
    <script src="script.js"></script>
</body>
</html>
