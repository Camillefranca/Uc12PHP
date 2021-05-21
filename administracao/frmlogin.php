<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Login</title>
    <link rel="stylesheet" href="css/estilo-admin.css">
</head>

<body>
    <div id="box-login">
        <div id="formulario-login">
            <form action="op_login.php" id="frmlogin" method="post">
                <fieldset>
                    <legend>Faça Login</legend>
                        <label><span>Login</span>
                        <input type="text" name="txt_login" id="txt_login" maxlength="20">
                    </label>
                    <label><span>Senha</span>
                        <input type="password" name="txt_senha" id="txt_senha" maxlength="20">
                    </label>
                    <input type="submit"  class="botao" name="logar" id="logar" value="Logar">
                </fieldset>
                
            </form>
            
            
        </div>
        
        
    </div>
</body>
</html>