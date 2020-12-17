<?php

require_once("Manager.php");

class PanierManager extends Manager{
    
    function getPanier(){

        $bdd = $this->connexionBD();
        
        $req = $bdd->prepare('SELECT produits.idProduit, produits.nomProduit, produits.prixProduit, panier.quantiteProduit from produits, panier WHERE produits.idProduit = panier.idProduit');
        $req->execute();
    
        
        return $req;
    
    }

    function ajouterAuPanier($idProduit){

            $bdd = $this->connexionBD();

            //verifier si l'item est deja dans le panier
        
            $req = $bdd->prepare('SELECT * from panier WHERE idProduit = :idProduit');
                $req->execute(array(
                    "idProduit"=> $idProduit
                ));

            $count = $req->rowCount();

            //si l'item n'est pas dans le panier on ajoute
            
            if ($count < 1){ 
                $req = $bdd->prepare("INSERT INTO panier(quantiteProduit, idProduit) VALUES(:quantiteProduit, :idProduit)");
                $req->execute(array(
                "quantiteProduit"=>1,
                "idProduit"=>$idProduit
            ));

            //si l'item est dans le panier on incremente la qty

            }else{ 
                $req = $bdd->prepare("UPDATE panier SET quantiteProduit = quantiteProduit +1 where idProduit=$idProduit");
                $req->execute();
            }

            return $req->rowCount();
            

    }

    function supprimerDuPanier($idProduit){

        $bdd = $this->connexionBD();

        $req = $bdd->prepare('DELETE from panier WHERE idProduit = :idProduit');
        $req->execute(array(
            "idProduit"=> $idProduit
        ));

        return $req->rowCount();

    }

    function getNombrePanier(){

        $bdd = $this->connexionBD();

        $req = $bdd->prepare("SELECT SUM(quantiteProduit) as total from panier");
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);

        return $row['total'];

    }

    function verifierQtyStock($idProduit){

        $bdd = $this->connexionBD();

        //verifier si l'item est en stock
       
        $req = $bdd->prepare('SELECT quantiteProduit from produits WHERE idProduit = :idProduit');
            $req->execute(array(
                "idProduit"=> $idProduit
            ));
        
        $row = $req->fetch();

        return $row['quantiteProduit'];
        
    }

    function getQtyProduit($idProduit){

        $bdd = $this->connexionBD();

        $req = $bdd->prepare("SELECT quantiteProduit from panier WHERE idProduit = :idProduit");

        $req->execute(array(
            "idProduit"=> $idProduit
        ));

        $row = $req->fetch();

        return $row['quantiteProduit'];

    }
    

}


?>