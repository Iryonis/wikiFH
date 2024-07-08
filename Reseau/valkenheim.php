<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Valkenheim</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name = "author" content="Guilhem BONNEFOUS" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wiki page of Valkenheim">
    <meta name="keywords" content="HTML5, CSS, JavaScript, PHP">
    <link rel="stylesheet" href="./styles2.css">
    <link rel="stylesheet" href="./viking.css">
    <script type = "text/javascript" src ="./script.js"></script>
</head>
<body>
    <ul id = "navbar">
        <li class = "navbar"><a href="./index.html">Accueil</a></li>
        <li class = "navbar"><a href="./ashfeld.php">Ashfeld</a></li>
        <li class = "navbar"><a class = "active" href="./valkenheim.php">Valkenheim</a></li>
        <li class = "navbar"><a href="./myre.php">Myre</a></li>
        <li class = "navbar"><a href="./wulin.php">Wu Lin</a></li>
        <li class = "navbar"><a href="./outlanders.php">Les Étrangers</a></li>
        <li id = "right" class = "navbar"><a href="./about.html" OnClick="ouvrirliens()">À propos</a></li>
    </ul>
    <p id = "top"></p>
    <header>
        <h1>Valkenheim</h1>
        <h2>Toundra gelée des Vikings</h2>
        <h4><em> "Le monde nous craint. Nous sommes les favoris des dieux. Nous pillons de nouvelles terres. Nous faisons des raids pour devenir forts. Nous vivons pour la bataille, prêts à mourir dans la gloire."</em></h4>
    </header>
    <main>
        <h3> La faction Viking : </h3>
        <p>La faction Viking est une coalition de centaines de clans et de tribus, la plus puissante étant les Warborn. Les alliances sont facilement formées et tout aussi facilement rompues. Les différends et les conflits sont au rendez-vous, mais tout étranger les verra dans un état de guerre perpétuelle. <br>
        Technologiquement parlant, ils sont les plus primitifs, la toundra gelée de Valkenheim empêchant leur croissance, mais sous-estimez leur ingéniosité à vos risques et périls.<br>
        Pour les Vikings, l'honneur est lié à la réputation. La bravoure, la noblesse, la magnanimité, le sens du fair-play, le respect des autres et la force de faire ce qui est juste sont loués. Les actes de lâcheté et de trahison sont vilipendés. </p>
        <h3> Géographie : </h3>
        <p>Qu'elle soit considérée comme un paradis hivernal ou un enfer gelé, Valkenheim est une immense toundra. <br>
        La vie végétale est plutôt rare. Si les arbres ont pu prospérer en une vaste forêt, les plantes plus petites luttent pour survivre. De ce fait, l'agriculture est particulièrement difficile. <br>
        La nourriture est rare, obligeant les tribus à tout stocker à Svengård et à la distribuer entre les clans. <br>
        Des statues antiques d'un temps oublié parsèment le paysage, se mêlant aux statues des dieux et grands guerriers Vikings, particulièrement nombreuses dans les falaises.<br>
        Valkenheim est entourée de barrières naturelles telles qu'une rivière et une chaîne de montagnes face à Ashfeld, la forteresse de Gränsgård gardant le seul moyen d'entrer. Face à Myre, la mer d'Austramar se trouve.</p> 
        <br>
        <h3> Histoire : </h3>
        <p> Après le Cataclysme, les Vikings ont déclaré la guerre aux Chevaliers d'Ashfeld dans une tentative désespérée pour obtenir des ressources. Cette guerre a fait rage durant des années, cependant, un jour, les Vikings ont disparu, se retirant vers le nord, hors de Valkenheim.
        Bientôt, les Vikings devinrent des contes, puis des mythes. <br> Des années passèrent, jusqu'au jour où ayant besoin de plus d'espace pour s'étendre et grandir, les Chevaliers commencèrent à coloniser Valkenheim. Mais au moment de défricher les terres, ils découvrirent les ruines de la civilisation Viking, apprenant que les mythes étaient bels et bien vrais. <br>
        Peu de temps après, les Vikings revinrent pour récupérer leur ancienne terre, chassant les Chevaliers hors de Valkenheim, et les poursuivant même en Ashfeld. Après des années de guerre, les Vikings furent finalement vaincu, et Ashfeld connu la paix.</p>
        <p> Malheureusement, le mont Rust est récemment entré en éruption et ses cendres ont bloqué le Soleil. Les récoltes et les animaux moururent, forçant les Vikings à recommencer à attaquer Ashfeld pour des ressources. La guerre tournait en leur faveur, mais la Légion d'Obsidienne d'Apollyon mit finalement fin à leur avancée.
        La Grande Guerre, elle, n'en était malheureusement qu'à son début. <br>
        Ainsi, Valkenheim est sous la menace constante d'une invasion de ses voisins Chevaliers et Samouraïs.</p>   
    </main>
    <br>
    <section>
        <hr>
        <br>
        <h3 class = "big">Les cartes jouables à Valkenheim :</h3>
        <div class="row">
            <?php
            $images = [
            "La fosse" => "https://cdnb.artstation.com/p/assets/images/images/011/171/305/large/carl-ross-forhonor-05.jpg?1528206386",
            "Fort de la rivière" => "./images/valkenheim/riverfort.webp",
            "Canyon" => "https://cdna.artstation.com/p/assets/images/images/005/328/610/large/charles-faubert-fh-portfolio-canyon-b.jpg?1490233775",
            "Fort en hauteur" => "./images/valkenheim/highfort.webp",
            "Chantier naval" => "https://cdnb.artstation.com/p/assets/images/images/033/568/259/large/alexandre-voyer-avoyer-shipyard-01a.jpg?1609965852",
            "Village viking" => "https://images.gamersyde.com/image_stream-36154-3277_0002.jpg",
            "Le Défi" => "https://cdna.artstation.com/p/assets/images/images/013/460/738/large/laurie-durand-gauntlet-06.jpg?1539703292",
            "Bastion sacré" => "https://i.pinimg.com/originals/d5/65/1d/d5651db393eeda91770ef28a79d74615.jpg",
            "Forteresse de Storr" => "https://cdnb.artstation.com/p/assets/images/images/019/844/741/large/joanne-yau-f04-front-2.jpg?1565238662",
            ];
            foreach ($images as $cle => $valeur){
            ?>
            <div id = "second" class="column-maps">
                <img id = "map" src=<?=$valeur?>>
                <p id="maps"><?=$cle?></p>
            </div>
            <?php }; ?>
        </div>
    </section>
    <br>
    <section>
    <br>
    <hr>
    <h3 class = "big" id = "heroes">Les héros Vikings :</h3>
    <h4><em>"Sur le champ de bataille, nous sommes des bêtes impitoyables, déchaînant notre fureur sur les faibles. Ce n'est que dans la folie de la guerre que nous nous sentons vraiment vivants. Débarrassés de la peur de la mort, nous nous réjouissons dans la bataille, accueillant une fin digne qui nous permettra d'entrer dans le Valhalla. Notre force et notre férocité sont inégalées et imparables. Il n'y a pas d'autre choix.<br> Rejoignez les Warborn ou mourez.</em></h4>
    <?php
        $images = [
        ["Le Hersir", "./images/valkenheim/hersir.png", "Combattant avec de lourdes haches à deux mains, les hersirs se retrouvent toujours en première ligne de la horde Viking et découpent tous les ennemis suffisamment fous pour se mettre en travers de leur route. Ils sont vêtus de cuirs et d’anneaux de fer et arborent fièrement les tatouages recouvrant leur corps, en souvenir d’anciennes batailles. Ces guerriers redoutables incarnent l’idéal des vrais guerriers Vikings : immense bravoure, intégrité sans faille et passion démesurée. Ils savent que l’heure de leur mort est déjà fixée à la naissance, ainsi, aucun Viking n’a peur de suivre sa destinée.<br> Bien sûr, tous comptent emporter avec eux le plus d’ennemis possible.", "hersir"],
        ["La Shaman", "./images/valkenheim/shaman.webp", "Le naturel solitaire de la Shaman a beau lui avoir fait perdre l'esprit, ne vous laissez pas berner par son comportement erratique : c'est une guerrière redoutable qui voit vos os comme un mets de choix. La Shaman vit en ermite dans les forêts de Valkenheim. Autant dire que la courtoisie lui est inconnue et que son apparence dégage une impression de sauvagerie. Elle voit les présages et communique avec les dieux à travers des rituels connus d'elle seule. Elle n'a que faire des disputes entre les factions, mais elle a lu dans les entrailles d'un Chevalier éclaireur que son avenir était lié à la guerre au Sud. Sa hachette et sa dague ont soif. Au combat, elle entre dans une rage sanguinaire dont elle ne ressort qu'après avoir pris toute vie alentour.", "shaman"],
        ["Le Berserker","./images/valkenheim/berserker.webp", "Le Berserker est un Viking chaotique et brutal muni de deux haches. Son amour inconditionnel du combat en terrifie plus d'un, alliés comme ennemis. Il noie l'adversaire sous une pluie d'attaques sans lui laisser le temps de monter une défense digne de ce nom. Il se lance à corps perdu dans la bataille, au mépris de sa défense. Seul compte son tableau de chasse.", "berserker"],
        ["Le Jarl","./images/valkenheim/jarl.png", "C'est une chose que de naître fils de Jarl, une autre que de mériter ce titre par le sang, la sueur et l'acier. Être Jarl, c'est passer sa vie au service de son peuple, occire de son épée ceux qui veulent lui nuire, protéger de son bouclier ceux qui ne peuvent pas se battre. Leur style de combat, simple mais brutal, les propulse toujours au premier rang des hostilités.", "jarl"],
        ["La Jörmungand","./images/valkenheim/jormungand.webp", "Les Jörmungand se préparent au Grand Combat du Ragnarök. Cette secte formée au lendemain du Cataclysme rassemblait d'abord les parias des Vikings, affligés d'une difformité de peau semblable à des écailles de serpent. De ce mal dû au Cataclysme, les victimes firent une identité. Ils se nommèrent en l'honneur du serpent Jörmungand qui, selon les croyances vikings, avait empoisonné et tué Thor. Peu à peu, ils se sont refermés sur eux-mêmes jusqu'à se croire nés de la chute de Thor avant le Ragnarök. Leur rite de passage est un rituel sanglant en hommage à leurs douloureuses origines : leur peau est brûlée à l'acide pour l'agrémenter d'écailles de serpent, leurs membres broyés par un marteau sacré. Beaucoup meurent pendant le rituel. Les survivants sont marqués du signe du hamarr, qui les identifie comme des guerriers Jörmungand accomplis. Ils se battent pour écraser les faibles avant l'arrivée du Ragnarök, car à leurs yeux, seuls les plus valeureux doivent survivre pour le Grand Combat.", "jormungand"],
        ["Le Highlander","./images/valkenheim/highlander.webp", "Le Highlander n'est pas une tête brûlée de plus parmi les Vikings : c'est contraint et forcé par d'anciennes alliances et obligations qu'il participe à cette guerre, lui qui préférerait largement garder ses terres. Il peut maintenir une posture défensive qui lui permet d'endurer, derrière sa claymore, les attaques des plus farouches guerriers, pour mieux frapper dès qu'il aperçoit une ouverture ! Sa force et sa vitesse véritables s'expriment dans ses balayages et ses coups de boutoir. Il n'est jamais le premier à foncer au combat : chaque mouvement est mûrement réfléchi de façon à toujours être prêt à contrer. Si les montagnes ont forgé son caractère et buriné son corps, la guerre en a fait une machine à tuer.", "highlander"],
        ["La Valkyrie","./images/valkenheim/valkyrie.webp", "<strong>Le Valhalla.</strong><br> Notre récompense pour être mort au combat. Mais qu'en est-il de ceux qui meurent ailleurs ?<br> Les Valkyries.<br> Un ordre de guerrières qui a fait un pacte avec les dieux. Chaque Valkyrie peut accéder à la gloire qui attend chaque Viking tombé au combat. Et en temps voulu, accorder une place aux plus méritants. Mais elles seules décident pour qui se battre.<br> Ce sont des spécialistes de la lance et du bouclier. Des éclaireuses efficaces.<br> <em>Et, peut-être, votre seul espoir de délivrance.</em>", "valkyrie"],
        ];
        foreach ($images as list($v1, $v2, $v3, $v4)){
        ?>
            <h2 id=<?= $v4 ?>><?= $v1 ?></h2>
    <div class="row">
        <div id = "second" class="column-characters">
            <img id = "characters" src=<?= $v2 ?>>
        </div>
        <div id = "second" class="column-characters">
            <p><?= $v3 ?></p>
            <img id = "emblem" src="./images/vikingsemblem.webp" alt="Vikings's emblem">
        </div>
        </div>
        <br>
        <?php }; ?>
    </section>
    <div class="footer">
        <a href='#top' class = "button"> Retour en haut de la page</a>
        <p>Site créé par Guilhem BONNEFOUS, dans le cadre de sa deuxième année de licence en informatique à l'Université de Bordeaux, France.</p>
        <p>2022, <a class = "bonus" href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' target="_blank"> libre de droits.</a></p>
    </div>  
</body>
</html>