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
                <li><button id="b2"  type="button" onclick="changerSite();">Thèmes site</button></li>
			</ul>
    </div>
    
    <div class="contenu">
        <?= $contenu ?>
    </div>

    <div class="pied"> 
        <p><?= "Nous sommes le " . $_SESSION["date"] ?> </p>
        <p>Dernière mise à jour le 16 décembre 2020 </p>
    </div>

    </body>

    <script>

        var site = document.getElementsByTagName("BODY")[0];
                    
                    function changerSite(){
                        if (!site.classList.contains('inversion')){
                            site.classList.add('inversion');
                            console.log("3");
                        }else{
                            site.classList.remove('inversion');
                            console.log("4");
                        }
                    }

    </script>

</html>