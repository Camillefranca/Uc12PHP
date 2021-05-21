<?php 
	include "conexao.php";

if (isset($_GET['id'])){ 
    $id = $_GET['id'];
}        
  
if (isset($_GET['acao'])){ 
    $acao = $_GET['acao'];
} else{$acao = '';}  

if ($acao !=""){
	
	$sql = "SELECT * FROM noti WHERE id_noticia = '$id'";
	
	$qry = mysqli_query($db,$sql);	
	$linha = mysqli_fetch_array($qry);

	$id_categoria = $linha['id_categoria'];	
    
    	
$txt_titulo		=$linha['titulo_noticia'];
$txt_noticia    =$linha['noticia'];
$txt_imagem		=$linha['img_noticia'];
$ativo		    =$linha['noticia_ativa'];
$txt_data       =$linha['data_noticia'];
    
} 
  





?>


<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Criando um site completo </title>
<link href="estilo-admin.css" type = "text/css" rel="stylesheet" media="all" >


</head>	
<body>
		<div id="box-cadatro">
			<div id="formulario-maior">
				<form id ="frmpost" name="frmpost"  method="post" action="op_noticias.php" >
					<fieldset>
						<legend> Cadastro de Noticia</legend>				
							<label>
								<span> Título da notícia</span>	
								<input type = "text" name="txt_titulo" id="txt_titulo" value ="<?php  if(isset($txt_titulo)){print($txt_titulo);}  ?>">
							</label>
							
							<label>
								<span>Conteúdo do notícia</span>
								<textarea  name="txt_conteudo" id="txt_conteudo" rows="30"> <?php  if(isset($txt_noticia)){print($txt_noticia);}  ?> </textarea>
							</label>
							
							<label>
								<span>Categoria</span>
								<select name="id_categoria">
									<?php 
										
										$sql_cat = "SELECT * FROM cat order by categoria";
										$resultado = mysqli_query($db,$sql_cat);
										
										while($coluna = mysqli_fetch_array($resultado))
										{
											$valor = $coluna['id_categoria'];
											
											if ($id_categoria ==$valor)
											{
												 $selecionado = "selected";
											}
											else
											{
												$selecionado ="";
											}
											
											echo "<option value='$valor' $selecionado> $coluna[categoria] </option>";
                                        }
									?>
								</select>
							</label>
							
							<label>
								<span>Escolha a imagem</span>
								<input type="type" name="txt_imagem" value ="<?php if(isset($txt_imagem)){print($txt_imagem);}  ?>">
							</label>
							<label>
								<span>Data do noticia</span>
								<input type="text" name="txt_data" id="txt_data" value ="<?php if(isset($txt_data)){print($txt_data);}  ?>" >
							
							</label>
							
							
							<label>
                                  <span>ativa</span>
                                  <input type="text" name="txt_ativo" id="txt_ativo"  value ="<?php if(isset($ativo)){print($ativo);}  ?>">	
                            </label>
							
							
							<input type="hidden" name ="id" value="<?php echo $id; ?>">
							<input type="hidden" name ="txt_nome_imagem" value="<?php echo $linha[img_noticia]; ?>">
							<input type="hidden" name ="acao" value="<?php if ($acao!=""){echo $acao;}else{echo "Inserir";} ?>">							
							<input type="submit" name= "logar" id="logar" value = "<?php if ($acao!=""){echo $acao;}else{echo "Inserir";} ?>" class="botao" >					
					</fieldset>
				</form>				
			</div>		
		</div>		
</body>
</html>

