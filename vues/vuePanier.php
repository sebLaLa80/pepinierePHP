<?php
    $titre = "Mon Panier";
?>   

<?php ob_start();?>

    <p>Mon panier :</p>

    <?php
        while($donnees = $req->fetch()){
    ?>
        <div >
            <table class="produitPanier">
                <tr>
                    <th><?= $donnees["nomProduit"]?></th>
                    <th><?= $donnees["prixProduit"] ?> $ </th>
                    <th><?= $donnees["quantiteProduit"]?></th>
                    <th><a href="index.php?action=ajouter&idProduit=<?= $donnees["idProduit"]?>&from=panier"> Ajouter</a> </th>
                    <th><a href="index.php?action=supprimer&idProduit=<?= $donnees["idProduit"]?>"> Supprimer</a> </th>
                </tr>
            </table>
            <hr>
        </div>
        <?php              
        }
    ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>