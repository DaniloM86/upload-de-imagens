<?php
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload de imagens</title>
</head>
<body>
    <h2>cadastrar imagem</h2>
    <form action="processa_upload.php" method="POST" enctype="multipart/form-data">
        <label for="">upload de imagens:</label>
        <input type="file" name="arquivos" id=""><br><br>
        <input type="submit" value="Enviar" name="btn-submit">
    </form>
</body>
</html>