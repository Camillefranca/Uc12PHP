<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="css/estilo-admin.css">
 
</head>
<body>
 <!--corpo principal da pagina---->
 <div id="principal">
     <div id="cabecalho">
          <div id="titulo_topo">
              <img class="imagem" src="img/a-admin.png" alt="">
          </div>
     </div>
     
     <!--corpo principal da pagina---->
     <div id="corpo">
         <div id="esquerdo">
             <div id="sessao">Categoria</div>
             <ul>
                 <li><a href="principal.php?link=2">Cadastrar</a></li>
                 <li><a href="principal.php?link=3">Lista/Editar</a></li>
             </ul>         
             
              <div id="sessao">Post</div>
             <ul>
                 <li><a href="principal.php?link=4">Cadastrar</a></li>
                 <li><a href="principal.php?link=5">Lista/Editar</a></li>
             </ul>         
             
              <div id="sessao">Noticias</div>
             <ul>
                 <li><a href="principal.php?link=6">Noticias</a></li>
                 <li><a href="principal.php?link=7">Lista/Editar</a></li>
             </ul>         
             
             
         </div>
          
         <div id="direito">
            
            <?php
                $link = $_GET["link"];
                $pag[1] = 'home.php';
                $pag[2] = 'frm_categoria.php';
                $pag[3] = 'lst_categoria.php';
                $pag[4] = 'frm_post.php';
                $pag[5] = 'lst_post.php';
                $pag[6] = 'frm_noticias.php';
                $pag[7] = 'lst_noticias.php';
                
             
             
             if(!empty($link)){
                 if (file_exists($pag[$link])){
                     include $pag[$link];
                 }else {include 'home.php';}
                 
             }else
                 {include 'home.php';}
             
             ?>
       
         </div>
         
         
         
     </div>
     
       </div> 
     
  
 
 
</body>
</html>