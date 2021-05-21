<?php

include "conexao.php";


$acao	= $_POST['acao'];
$id		= $_POST['id'];

$txt_titulo		= $_POST["txt_titulo"];
$txt_conteudo	= $_POST["txt_conteudo"];
$id_categoria	= $_POST["id_categoria"];
$txt_imagem		= $_POST["txt_imagem"];
$txt_data		= $_POST["txt_data"];
$ativo		    = $_POST["txt_ativo"];



//noticias

if($acao=="Inserir"){	
	
$sql = "INSERT INTO noti (id_categoria,titulo_noticia,img_noticia,data_noticia,noticia_ativa,noticia)
    VALUES 
	('$id_categoria','$txt_titulo','$txt_imagem','$txt_data','$ativo','$txt_conteudo')";	
		
	mysqli_query($db,$sql)	or die("Não foi possível fazer inclusao" );
	
	header('location:principal.php?link=7'); 
}

if($acao=="Alterar"){
	$sql="UPDATE noti SET


    id_categoria     ='$id_categoria',
    titulo_noticia   ='$txt_titulo',
    img_noticia      ='$txt_imagem',
    data_noticia     = '$txt_data',
    noticia_ativa    = '$ativo',
    noticia          ='$txt_conteudo'

    WHERE id_noticia 	= '$id' ";

	
	
	mysqli_query($db,$sql)	or die("Não foi possível fazer alteração" );
		
	header('location:principal.php?link=7'); 
}

if ($acao == "Excluir"){

	$sql="DELETE FROM noti WHERE id_notica= '$id' ";
	mysqli_query($db,$sql) or die("Não foi possível excluir os dados");
	header('location:principal.php?link=7'); 
}

?>