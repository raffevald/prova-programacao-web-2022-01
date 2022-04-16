<?php

    

    $departamento=$_POST['departamentos'];



    if($departamento == "Setor Administrativo") {
        echo "<h4> $departamento </h4>";
        include 'departamentos/setor_administrativo.php';
    } else {
        if ($departamento == "Setor Financeiro") {
            echo "<h4> $departamento </h4>";
            include 'departamentos/setor_financeiro.php';
        } else {
            if($departamento == "Recursos Humanos") {
                echo "<h4> $departamento </h4>";
                include 'departamentos/recursos_humanos.php';
            } else {
                if($departamento == "Setor Comercial") {
                    echo "<h4> $departamento </h4>";
                    include 'departamentos/setor_comercial.php';
                } else {
                    if($departamento == "Setor Operacional") {
                        echo "<h4> $departamento </h4>";
                        include 'departamentos/setor_operacional.php';
                    }
                }
            }
        }
    } 

?>