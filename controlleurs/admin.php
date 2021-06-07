admin
<?php 
if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&view=connexion');
    
     if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['view'])) {
            if ($_GET['view'] == 'list.question') {
                require(ROUTE_DIR.'views/joueur/list.question.html.php');
            }
           
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }
?>