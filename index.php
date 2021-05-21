<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site Dinamico</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="principal">
        <div id="cabecalho">
            <div id="banner-superior">
                <a href="index.php"><img src="img/informatica.jpg" alt=""></a>
            </div>
            <div id="menu-superior">
                <ul>
                    <li><a href="index.php?link=1">Home</a></li>
                    <li><a href="index.php?link=2" >EBD</a></li>
                    <li><a href="index.php?link=3">Radio Web</a></li>
                    <li><a href="index.php?link=4">Contato</a></li>
                </ul>
                
            </div>
        </div>
        
        <div id="corpo">
            <div id="esquerdo">
               <ul>
                   <li><a href="index.php?link=5">Departamento</a></li>
                   <li><a href="index.php?link=6">Treinamento</a></li>
                   <li><a href="index.php?link=7">Suporte</a></li>
                   
               </ul>
            
            </div><!--***************fim esquerdo---------->
            <div id="centro">
                <?php
					  $link = $_GET["link"];
					  $pag[1] = 'home.php';
					  $pag[7] = 'suport.php';
                      $pag[5] = 'departamento.php';
                      $pag[6] = 'treinamento.php';
				      $pag[3] = 'radio.php';
						if (!empty($link))
						{
						
								if (file_exists($pag[$link]))						
								{
									include $pag[$link];
										
								
								}else {
								
									include "home.php";
								
								}
						}
						else
						{
							include "home.php";					
						
						}
					
					
					?>
                
                
            </div>
              
              
            
            <div id="direito">
                
               <div id="noticias">
                    <img src="img/noticias.png" class="ladDireito" >
                </div>
                
                <div id="iten-noticias"> 
                
                <?php
               
              $sql_lista = "SELECT * FROM noti ORDER BY id_noticia DESC LIMIT 1,3";
              $qry_lista = mysqli_query($db,$sql_lista);
                while($coluna = mysqli_fetch_array($qry_lista)){
                    $id_noticia = $coluna['id_noticia'];
               
            ?>   
               
               <!-------imagens do box'x-------->

                    <div class="descer"> 
                    <a  href="index.php?link"></a>
                    <h3><a href="index.php?link="><?php echo $coluna['titulo_noticia'];?></a></h3>
                    <small class="texto">Publicado em <?php echo $coluna['data_noticia'];?>  </small>
                </div>
                <?php }?>
                </div>
                
            </div>
            
        </div>
        
        
        
    <!--<div id="rodape" class="clear">rodape</div> -->   
    </div>
    
    
</body>
</html>