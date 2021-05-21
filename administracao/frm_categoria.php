<?php 
include "conexao.php";

if (isset($_GET['id'])){ 
    $id = $_GET['id'];
}        
  
if (isset($_GET['acao'])){ 
    $acao = $_GET['acao'];
} else{$acao = '';}       


if ($acao !=""){
	
	$sql = "SELECT * FROM cat WHERE id_categoria = '$id'";
	
	$qry = mysqli_query($db,$sql);	
	$linha = mysqli_fetch_array($qry);	
	

	$categoria 	= $linha['categoria'];
	$ativo		= $linha['cat_ativo'];

} 
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<title> Criando um site completo </title>
<link href="estilo-admin.css" type = "text/css" rel="stylesheet" media="all" >

</head>


	
<body>
		<div id="box-cadatro">
			<div id="formulario-menor">
				<form id ="frmcategoria" name="frmcategoria" method="post" action="op_categoria.php" >
					<fieldset>
						<legend> Cadastro de Categoria</legend>				
							<label>
								<span> Categoria</span>	
								<input type = "text" name="txt_categoria" id="txt_categoria" value ="<?php  if(isset($categoria)){print($categoria);}  ?>">
							</label>
							
							<label>
								<span>ativo</span>
								<input type="text" name="txt_ativo" id="txt_ativo" value="<?php if(isset($ativo)) {print($ativo);} ?>">
							</label>
							<input type="hidden" name ="id" value="<?php echo $id; ?>">
							
							
							<input type="hidden" name ="acao" value="<?php if ($acao!=""){echo $acao;}else{echo "Inserir";} ?>">	
													
							<input type="submit" name= "logar" id="logar" value = "<?php if ($acao!=""){echo $acao;}else{echo "Inserir";} ?>" class="botao" >					
					</fieldset>
				</form>				
			</div>		
		</div>		
</body>
</html>