<?php
include_once 'conexao.php';

$txt_login = $_POST['txt_login'];
$txt_senha = $_POST['txt_senha'];

//echo "login " .$txt_login . "<br>" . "Senha =". $txt_senha;
$SQL = "SELECT * FROM adm where login = '$txt_login' and senha ='$txt_senha'";
$resultado = mysqli_query($db,$SQL);
//vericar se houve retorno de linha
if(mysqli_num_rows($resultado)>0){
    //echo "este cliente existe";
    
    header('location:principal.php');
    
}else {echo "Estes dados nao existe";}




?>
