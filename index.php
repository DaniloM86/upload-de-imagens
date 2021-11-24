<?php
    require_once('processa_upload.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        div{
            text-align:center;
        }
    </style>
<body>
    <div>
        <nav>
            <a href="index.php">home</a> |
            <a href="upload_img.php">upload</a> 
        </nav>
    </div>
    <h2>projeto upload de imagens</h2>
    <table>
        <thead>
            <tr>
                <th>imagens de teste</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($user as $item): ?>
           <tr>
                <td>
                    <?php echo $item['id_imagem']; ?>
                </td>
                <td>
                    <img src="<?php echo 'imagens/'. $item['nome_imagem']; ?>" width="120" heigth="120">
                </td>
            </tr>

            <?php endforeach;?>
        </tbody>
    </table>

    
</body>
</html>