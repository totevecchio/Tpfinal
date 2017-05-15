<?php
function guardarImagen() {
if ($_FILES["imgPerfil"]["error"] == UPLOAD_ERR_OK)
{
$nombre=$_FILES["imgPerfil"]["name"];
$archivo=$_FILES["imgPerfil"]["tmp_name"];
$ext = pathinfo($nombre, PATHINFO_EXTENSION);
$miArchivo = dirname(__FILE__);
$miArchivo = $miArchivo . "/img/";
$miArchivo = $miArchivo . "imagenNueva." . $ext;
move_uploaded_file($archivo, $miArchivo);
}
}
guardarImagen();
?>

<!DOCTYPE html>
<html>
<body>

<form action="subir.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="imgPerfil" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
