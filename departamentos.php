<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css" media="screen" />
    <title> </title>
</head>
<body>
    <?php
        include 'componentes/header.php';
    
        $departamento=$_POST['departamentos'];

        setcookie('depat', $departamento);

        if($departamento == "Setor Administrativo") {
            include 'departamentos/setor_administrativo.php';
        } else {
            if ($departamento == "Setor Financeiro") {
                include 'departamentos/setor_financeiro.php';
            } else {
                if($departamento == "Recursos Humanos") {
                    include 'departamentos/recursos_humanos.php';
                } else {
                    if($departamento == "Setor Comercial") {
                        include 'departamentos/setor_comercial.php';
                    } else {
                        if($departamento == "Setor Operacional") {
                            include 'departamentos/setor_operacional.php';
                        }
                    }
                }
            }
        } 
    ?>

</body>
</html>