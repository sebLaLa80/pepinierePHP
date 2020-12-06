<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $titre ?></title>
	<link href="public/styles/style.css" rel="stylesheet" />
    </head>
        
    <body>
        
    <div class="navigation">
			<ul class="menu">
				<li><a href="index.php">Produits</a></li>
				<li><a href="index.php?action=afficherPanier">Mon Panier</a> (<?= $nombreArticles ?>)</li>
			</ul>
    </div>
    
    <div class="contenu">
        <?= $contenu ?>
    </div>

    <div class="pied"> 
        <p><?= date('l jS \of F Y ') ?> </p>
        <p> </p>
    </div>

    </body>
</html>