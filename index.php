<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen"/>
    <link rel="stylesheet" href="css/login.css" media="screen"/>
    <title>Login page</title>
</head>
<body>
    <div class="container">
        <div class="login-page container">
            <h4 class="nome-sistema">Sistema da empresa fulano de tal</h4>
            <div class="cont" >
                <img src="assets/logo/logo.jpg">
                <form action="login_controler.php" method="post">    
                    <br/>
                    <input name="usuario" type="text" size="30" placeholder="Usuário" />
                    <br/>
                    <input name="senha" type="password" size="30" placeholder="Senha"/>
                    <br/>
                    <input type="submit" value="Entrar"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>