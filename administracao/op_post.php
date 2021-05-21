<?php

include "conexao.php";


$acao = $_POST['acao'];
$id = $_POST['id'];

$txt_titulo		= $_POST["txt_titulo"];
$txt_conteudo	= $_POST["txt_conteudo"];
$id_categoria	= $_POST["id_categoria"];
$txt_imagem		= $_POST["txt_imagem"];
$txt_ativo		= $_POST["txt_ativo"];
$txt_data       = $_POST["txt_data"];



	
if($acao=="Inserir"){	
    

	
	$sql = "INSERT INTO pot (id_categoria, titulo_post, descricao_post, img_post, data_post, post_ativo) VALUES 
		('$id_categoria','$txt_titulo','$txt_conteudo', '$txt_imagem', '$txt_data','$txt_ativo')";	
		
	mysqli_query($db,$sql) or die("não foi possível inserir os dados");
	
	header('location:principal.php?link=5'); 
	
}

if($acao=="Alterar"){
	$sql="UPDATE pot SET
		
		id_categoria  	= '$id_categoria',
		titulo_post		='$txt_titulo',
		descricao_post	='$txt_conteudo',		
		img_post 		='$txt_imagem',
		data_post 		= '$txt_data',
		post_ativo 		='$txt_ativo'
		
		WHERE id_post = '$id' ";

	
	
	mysqli_query($db,$sql)	or die("Não foi possível fazer alteração");
		
	header('location:principal.php?link=5'); 
}

if ($acao == "Excluir"){

	$sql="DELETE FROM pot WHERE id_post= '$id' ";
	mysqli_query($db,$sql) or die("Não foi possível excluir os dados");
	header('location:principal.php?link=5');  

}
?>


