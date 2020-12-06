<?php

require("modeles/ProduitManager.php");
require("modeles/PanierManager.php");

function getProduits(){
    $produitManager = new ProduitManager();
    $req = $produitManager->getProduits();

    $nombreArticles = getNombrePanier();
    
    require("vues/vueProduits.php");
}

function afficherProduit($idProduit){
    $produitManager = new ProduitManager();
    $donnees = $produitManager->afficherProduit($idProduit);

    $nombreArticles = getNombrePanier();
    
    require("vues/vueAfficherProduit.php");
}

function ajouterAuPanier($idProduit, $from){
    $panierManager = new PanierManager();
   
    $lignesAffectees = $panierManager->ajouterAuPanier($idProduit);

    $nombreArticles = getNombrePanier();

    //Vérifier si une ligne a été affectée
    if($lignesAffectees > 0){
        //Le travail du controleur est "terminé", il n'y a pas de vue associée  supprimerDuPanier($idProduit)

        if ($from == "panier"){
            header("Location:index.php?action=afficherPanier"); 
        }else{
            header("Location:index.php");
        }
    }else{
        echo "Ajout impossible";
    }
}

function getPanier(){
    $panierManager = new PanierManager(); 
    $req = $panierManager->getPanier();

    $nombreArticles = getNombrePanier();
    
    require("vues/vuePanier.php");
}

function getNombrePanier(){

    $panierManager = new PanierManager();

    $nombreArticles = $panierManager->getNombrePanier();

    return $nombreArticles;

}

function supprimerDuPanier($idProduit){
    $panierManager = new PanierManager();
   
    $lignesAffectees = $panierManager->supprimerDuPanier($idProduit);

    $nombreArticles = getNombrePanier();

    //Vérifier si une ligne a été affectée
    if($lignesAffectees > 0){
        //Le travail du controleur est "terminé", il n'y a pas de vue associée  supprimerDuPanier($idProduit)
        
        header("Location:index.php?action=afficherPanier");
    }else{
        echo "Retrait impossible";
    }
}

?>