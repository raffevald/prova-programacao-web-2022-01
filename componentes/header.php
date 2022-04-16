<?php

    setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
    date_default_timezone_set( 'America/Sao_Paulo' );

    $setor = $_COOKIE['depat'];
    $user = $_COOKIE['users'];
    
    echo '
        <div class="container-dash">
            <div class="dash-logo" >
                <div class="img-cotainer">
                    <img class="logo-dashboard" src="assets/logo/logo.jpg">
                </div>
                <div>
                    <h4 class="nome-sistema">Sistema da empresa fulano de tal</h4>
                </div> 
            </div>
            <div>
                <h3>';
                    echo $setor; echo '
                </h3>
            </div>
            <div>
                <h3>
                    Usuario atual: '; echo $user; echo '
                </h3>
            </div>
            <div>
                <h4 class="nome-sistema"> '; echo strftime( '%Y-%m-%e %T', strtotime('now'));   echo '</h4>
            </div>     
        </div>';
    

?>



        
