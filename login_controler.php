<?php
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    setcookie('depat', 'Dashboard');

    if($usuario == "fernando" and $senha == "espiral22") {
        setcookie('users', $usuario);
        include 'dashboard.php';
    }
    else {
        include 'index.php';
    }

?>
