<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css" media="screen" />
    <title>Dashboard</title>
    <meta charset="utf-8">
</head>
<body>

    <?php
        include 'componentes/header.php';
    ?>

    <div class="container-conteudo">
        <div class="container-dash-expla">
            <h3>Explicação de como a pagina funciona</h3>
            <p>
            Na página seguinte, depois de feito o login, deve haver uma imagem ilustrativa da empresa,
            um texto de um parágrafo explicando a função desta página e a data e horário do sistema.
            Logo abaixo você terá um formulário com um combo-box com todos os departamentos.
            </p>
        </div>
        <div class="container-departamento">
            <div>
                <img src="assets/empresa/img1.png"/>
            </div>
            <div>
                <h3>Escolha o seu departamento</h3>
                <form action="departamentos.php" method="post">  
                    <select id=cbPais name="departamentos">
                        <option value="Setor Administrativo">Setor Administrativo</option>
                        <option value="Setor Financeiro">Setor Financeiro</option>
                        <option value="Recursos Humanos">Recursos Humanos</option>
                        <option value="Setor Comercial">Setor Comercial</option>
                        <option value="Setor Operacional">Setor Operacional</option>
                    </select>
                    <br/>
                    <input type="submit" value="Selecionar"/>
                </form>
            </div>
        </div>
    </div>

</body>
</html>