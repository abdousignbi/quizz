<?php
//fonction de validation
function est_vide(string $valeur):bool{
    return empty($valeur);
}

function est_entier($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}

function est_numerique($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}

function est_email($valeur):bool{
    if (filter_var($valeur ,FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}
function form_valid($arrayError):bool{
    if (count($arrayError)==0) {
        return true;
    }
    return false;
}
 function longueur_password(string $valeur ,int $min=6 , int $max=10):bool{
     return strlen($valeur) < $min ||strlen($valeur) > $max ; 
 }

    function valide_email(string $valeur , string $key, array &$arrayError):void{
        if (est_vide($valeur)) {
            $arrayError[$key]= 'le champs est obligatoire';
        }elseif (!est_email($valeur)) {
            $arrayError[$key]= 'saisir un email valide (exemple@gmail.com)';
        }
    }

    function validation_password(string $valeur,array &$arrayError, string $key ,int $min=6 , int $max=10):void{
        if (est_vide($valeur)) {
            $arrayError[$key]= 'le champs est obligatoire';
        }elseif (strlen($valeur) < $min ||strlen($valeur) > $max  ) {
            $arrayError[$key]= "la taille est compris entre $min et $max ";
        }
      
    }
    function validation_username(string $valeur , string $key,array &$arrayError){
        if (est_vide($valeur)) {
            $arrayError[$key]= 'le champs est obligatoire';
        }
    }
    function valide_bithdate(string $valeur, string $key , &$arrayError){
        if (est_vide($valeur)) {
            $arrayError[$key]= 'le champs est obligatoire';
        }elseif (!est_numerique($valeur)) {
            
        }
    }
    function verif_sexe(){
        
    }
?>