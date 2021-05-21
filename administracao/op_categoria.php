<?php

include_once 'conexao.php';

$acao = $_POST['acao'];
$id = $_POST['id'];

$txt_categoria = $_POST['txt_categoria'];
$txt_ativo = $_POST['txt_ativo'];

if($acao == 'Inserir'){
$sql = "INSERT INTO cat(categoria,cat_ativo) VALUES('$txt_categoria','$txt_ativo')";
 
$resultado = mysqli_query($db,$sql);
    header('location:principal.php?link=3') ;                                      
    
}
if ($acao =='Alterar'){
    $sql = "UPDATE cat set
             categoria = '$txt_categoria',
             cat_ativo = '$txt_ativo'
             where id_categoria = '$id'";
$resultado = mysqli_query($db,$sql);    
header('location:principal.php?link=3');    
    
}

if($acao=='Excluir'){
    $sql = "DELETE FROM cat where id_categoria = '$id'";
    $resultado = mysqli_query($db,$sql);    
    header('location:principal.php?link=3');
}


?>
