<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['view'])) {
            if ($_GET['view'] == 'connexion') {
                require(ROUTE_DIR.'views/security/connexion.html.php');
            }elseif ($_GET['view'] == 'inscription') {
                require_once(ROUTE_DIR.'views/security/inscription.html.php');
            }elseif($_GET['view']=='deconnexion') {
                require(ROUTE_DIR.'views/security/connexion.html.php');
            }
           
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }
 ?> 