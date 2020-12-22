<?php
    
    require("controleurs/controleurs.php");
    //Routeur. Genre de super-controlleur qui choisit quel contrôleur appeler selon l'action demandée 

    session_start();
    setlocale (LC_TIME, 'fr_CA','fra');
    $_SESSION["date"] = strftime('%d %B %Y');

    if(isset($_GET["action"])){
        if($_GET["action"] == "afficher" && isset($_GET["idProduit"])){ 
            afficherProduit($_GET["idProduit"]);
        
        }else if($_GET["action"] == "ajouter" && isset($_GET["idProduit"]) && isset($_GET["from"])){
             ajouterAuPanier($_GET["idProduit"], $_GET["from"]);
            
        }else if($_GET["action"] == "afficherPanier"){
            getPanier();
           
       }else if($_GET["action"] == "supprimer" && isset($_GET["idProduit"])){
            supprimerDuPanier($_GET["idProduit"]);
       
   }else{
            echo "Erreur, affichage impossible";
        }
        
    }else{
        //Controleur par défaut, affichage de la page d'acceuil
        getProduits();
    }
    
   
?>

