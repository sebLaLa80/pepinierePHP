<?php
    $titre = "Nos produits";
?>   

<?php ob_start();?>

    <p>Nos produits :</p>

    <?php
        while($donnees = $req->fetch()){
    ?>
        <div >
            <table class="produit">
                <tr>
                    <th><a href="index.php?action=afficher&idProduit=<?= $donnees["idProduit"]?>"><?= $donnees["nomProduit"] ?></a> </th>
                    <th><?= $donnees["prixProduit"] ?> $ </th>
                    <th><a href="index.php?action=ajouter&idProduit=<?= $donnees["idProduit"]?>&from=produits"> Ajouter au panier </a> </th>
                </tr>
            </table>
            <hr>
        </div>
        <?php              
        }
    ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>