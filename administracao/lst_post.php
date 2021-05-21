<?php include "conexao.php"; ?> 

<!DOCTYPE html>
<html>
<head>


<title> Criando um site completo </title>
<link href="estilo-admin.css" type = "text/css" rel="stylesheet" media="all" >
</head>	
<body>
	
	<table width ="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#660000">
		<tr bgcolor="#993300" align= "center">
			<td width="15%" height="20"><strong><font size="2" color="#FFF"> Código </font></strong> </td>
			<td width="60%" height="20"><strong><font size="2" color="#FFF"> Título</font></strong> </td>
			<td width="15%" height="20"><strong><font size="2" color="#FFF"> Ativo </font></strong></td>
			<td colspan="2" height="20"><strong><font size="2" color="#FFF"> Opções </font></strong></td>
		<tr>
		
		<?php 
			$sql = "SELECT * FROM pot";
			$qry = mysqli_query($db,$sql);
			
			while($linha = mysqli_fetch_array($qry)){		
		?>
		
		<tr bgcolor="#FFF">
			<td><font size="2" face = "verdana, arial, helvetica, sans-serif"> <?php echo $linha['id_post']; ?> </font> </td>
			<td><font size="2" face = "verdana, arial, helvetica, sans-serif"> <?php echo $linha['titulo_post']; ?> </font> </td>
			<td><font size="2" face = "verdana, arial, helvetica, sans-serif"> <?php echo $linha['post_ativo']; ?> </font></td>
			
			
			
			
			<td align="center"><font size="2" face = "verdana, arial, helvetica, sans-serif"><a href="principal.php?link=4&acao=Alterar&id=<?php echo $linha['id_post']; ?>"><img src="img/alterar.gif" border="0" width="16" height="16"> </a> </font></td>
           
            <td align="center"><font size="2" face = "verdana, arial, helvetica, sans-serif"><a href="principal.php?link=4&acao=Excluir&id=<?php echo $linha['id_post']; ?>"><img src="img/excluir.gif" border="0" width="16" height="16"> </a></font></td>
		<tr>
	<?php } ?>
	
	</table>

</body>
</html>