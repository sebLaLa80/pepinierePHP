<?php
    $titre = $donnees["nomProduit"];
?>   

<?php ob_start();?>

    <p><?= $donnees["nomProduit"] ?></p>
    <p><img src=<?= $donnees["imageProduit"] ?> alt=<?= $donnees["nomProduit"] ?>></p>
    <p><?= $donnees["descriptionProduit"] ?></p>
    <p><?= $donnees["prixProduit"] ?></p>
    <p><?= $donnees["quantiteProduit"] ?></p>
    

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>