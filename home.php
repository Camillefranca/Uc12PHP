
<?php 
include "administracao/conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Home</title>
</head>
<body>
     <!-------conteiner principal-------->
      <div id="container-post">
         <h3>Posts recentes</h3>
         <div id="container-posts-recentes">
           <!-------conteiner post recente-------->
                     
              <div id="ultimo-post-lancado">
                 
                <?php
                  $sql_ultimo = "SELECT * FROM pot ORDER BY id_post DESC LIMIT 1";
                  $qry_ultimo = mysqli_query($db,$sql_ultimo);
                  $linha = mysqli_fetch_array($qry_ultimo);
                  
                  $id_post = $linha['id_post'];
                  
                ?>  
                 
                 <small>Publicado em <?php echo $linha['data_post'];?> </small>
                  
            <img src="administracao/img/<?php echo $linha['img_post'];?>" class="imagem">
                 <h1><a href="index.php?link="><?php echo $linha['titulo_post'];?></a></h1>
                 <p><?php echo $linha['descricao_post'];?>
                 </p>
                  
              </div>
              <!-------conteiner dos box-------->
            <div id="lista-posts-recentes">
              
              <?php
                
              $sql_lista = "SELECT * FROM pot ORDER BY id_post DESC LIMIT 1,6";
              $qry_lista = mysqli_query($db,$sql_lista);
                while($coluna = mysqli_fetch_array($qry_lista)){
                    $id_post = $coluna['id_post'];
                
            ?>    
              
              
               <!-------imagens do box'x-------->
                <div id="caixa-post-recente">
                    <a href="index.php?link"><img src="administracao/img/<?php echo $coluna['img_post'];?>" class="post-recente"></a>
                    <h3><a href="index.php?link="><?php echo $coluna['titulo_post'];?></a></h3>
                    <small class="texto">Publicado em <?php echo $coluna['data_post'];?>  </small>
                </div>
                <?php }?>
                
                
                
                
                
             </div>             
         </div>
     </div>
</body>
</html>