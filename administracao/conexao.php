<?php
$host       ='localhost';
$usuario    ='root';
$senha       ='';
$banco      ='site_dinamico';

//instrucao de conexao para receber os parametros
$db = mysqli_connect($host,$usuario,$senha,$banco);

if (!$db){
    echo "Error ao conectar";
    
}

?>