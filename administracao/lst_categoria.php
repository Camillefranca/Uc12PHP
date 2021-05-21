
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Categorias</title>
   
</head>

<body>
     <table border="1" cellpadding="0" celspacing="0" bgcolor="#600000">
         <tr bgcolor="993300" align="center">
             <td width="15%" heigth="20"><strong><font size="2" color="#fff">Código</font></strong></td>
             <td width="60%" heigth="20"><strong><font size="2" color="#fff">Categoria</font></strong></td>
             <td width="60%" heigth="20"><strong><font size="2" color="#fff">Ativo</font></strong></td>
             <td colspan="2" heigth="20"><strong><font size="2" color="#fff">Categoria</font></strong></td>
             
          </tr>
          
          <?php include_once 'conexao.php'; ?>
          <?php
             $sql = "select * from cat";
             $qry =mysqli_query($db,$sql);
              while($linha = mysqli_fetch_array($qry)){
                  
              ?>
          
           <tr bgcolor="#fff">
             <td><?php echo $linha['id_categoria']; ?></td>
             <td><?php echo $linha['categoria']; ?></td>
             <td><?php echo $linha['cat_ativo']; ?></td>
            
           <td><a href="principal.php?link=2&acao=Alterar&id=<?php echo $linha['id_categoria']; ?>"><img src="img/alterar.gif" borde="0" width="16" heigth="16"></a></td>   
            <td><a href="principal.php?link=2&acao=Excluir&id=<?php echo $linha['id_categoria']; ?>"><img src="img/excluir.gif" borde="0" width="16" heigth="16"></a></td>            
                          

         </tr>

        <?php }?>
         
     </table>
    
</body>
</html>