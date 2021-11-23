<?php

// require_once('conexão.php');

$conn =mysqli_connect('localhost','root','','imagens');

if(isset($_POST['btn-submit'])){
    $image = time().'-'.$_FILES['arquivos']['name'];

     $diretorio = 'imagens/';
     $target_file = $diretorio .basename($image);

    //  move_uploaded_file($_FILES['arquivos']['tmp_name'], $target_file);

     if(move_uploaded_file($_FILES['arquivos']['tmp_name'], $target_file)){
        $sql ="INSERT INTO tb_imagem SET nome_imagem ='$image'";

         if(mysqli_query($conn, $sql)){
             header('location:index.php');
         }    
     }
}

$results =mysqli_query($conn, "SELECT * FROM tb_imagem");
$user    =mysqli_fetch_all($results, MYSQLI_ASSOC); 