<?php 
class Manager{

    function connexionBD(){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=pepiniere;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
    
        return $bdd;
    }
}
?>