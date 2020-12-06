
<?php

require_once("Manager.php");
    class ProduitManager extends Manager{

        function getProduits(){

            $bdd = $this->connexionBD();
        
            $req = $bdd->prepare('SELECT * from produits');
            $req->execute(array());
        
            return $req;
        }

        function afficherProduit($idProduit){
            $bdd = $this->connexionBD();
        
            $req = $bdd->prepare('SELECT * from produits WHERE idProduit = :idProduit');
            $req->execute(array(
                "idProduit"=> $idProduit
            ));
        
            //Au lieu de retourner une table, on retourne l'unique ligne concernée
            return $req->fetch();
        
        }
        

    }

?>