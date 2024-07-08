<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Myre</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name = "author" content="Guilhem BONNEFOUS" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wiki page of Myre">
    <meta name="keywords" content="HTML5, CSS, JavaScript, PHP, For Honor">
    <link rel="stylesheet" href="./styles2.css">
    <link rel="stylesheet" href="./samourai.css">
    <script type = "text/javascript" src ="./script.js"></script>
</head>
<body>
    <ul id = "navbar">
        <li class = "navbar"><a href="./index.html">Accueil</a></li>
        <li class = "navbar"><a href="./ashfeld.php">Ashfeld</a></li>
        <li class = "navbar"><a href="./valkenheim.php">Valkenheim</a></li>
        <li class = "navbar"><a class = "active" href="./myre.php">Myre</a></li>
        <li class = "navbar"><a href="./wulin.php">Wu Lin</a></li>
        <li class = "navbar"><a href="./outlanders.php">Les Étrangers</a></li>
        <li id = "right" class = "navbar"><a href="./about.html" OnClick="ouvrirliens()">À propos</a></li>
    </ul>
    <p id = "top"></p>
    <header>
        <h1>Myre</h1>
        <h2>Terres marécageuses des Samouraïs</h2>
        <h4><em>"Chassés de nos terres, nous reconstruisons. Nos talents sont incontestables, nos cœurs sont forts, et notre dévouement : absolu. On se souviendra de nous."</em></h4>
    </header>
    <main>
        <h3>La faction des Samouraïs :</h3>
        <p>La faction des Samouraïs est la plus unifiée des trois factions, de peu cependant, car les Daimyos se battent souvent pour la domination. C'est également la faction la moins nombreuse et ils font face à une menace d'extinction presque constante. C'est grâce à leurs compétences, leur ruse, leur ingéniosité et leur détermination qu'ils sont encore là.<br>
        Ils sont dirigés par un empereur, et l'Empire de l'Aube est divisé en plusieurs maisons, chacune dirigée par un Daimyo. La maison régnante actuelle appartient à Ayu et est connue sous le nom de la Maison des Élus.<br>
        L'honneur est très apprécié chez les samouraïs. Ils sont fidèles jusqu'à la mort, luttant pour défendre ceux auxquels ils ont prêté serment, même dans des situations désespérées, et jurant de venger leur maître, si celui-ci venait à périr.</p>
        <h3> Géographie :</h3>
        <p>De toutes les terres des trois factions, Myre la plus inhospitalière, à tel point que même les Chevaliers et les Vikings ont essayé de l'éviter, ne l'envahissant finalement que pour obtenir un avantage dans leur guerre.<br>
        C'est une étendue de marais, de rochers et de friches marécageuses. Les plantes et les arbres toxiques menacent tous ceux qui ne font pas attention et son paysage en constante évolution a été responsable de la disparition d'armées entières sans laisser de trace. De nombreux endroits sont sujets aux inondations, les rivières engloutissant des étendues de jungle un moment avant de se retirer dans le néant le lendemain.<br> C'est Myre.<br> C'est le pays des Samouraïs de l'Empire de l'Aube.</p>    
        <h3> Histoire : </h3>
        <p>Après le Cataclysme, Myre est restée inhabitée pendant longtemps car ni les chevaliers ni les vikings ne voulaient braver ce qu'il y avait là-dedans. Cependant, alors que leur guerre se prolongeait, ils ont commencé à s'étendre dans le Myre pour essayer de gagner des avantages.<br>
        Ils ne savaient pas que les Samouraïs étaient venus de l'autre côté de l'océan et avaient commencé à s'installer dans les terres marécageuses, après avoir perdu leur patrie à cause du Cataclysme 500 ans auparavant. Les Vikings ont tenté de les attaquer avec une armée mais ils ont été massacrés en moins d'une journée.<br>
        À l'heure actuelle, les Samouraïs vivent dans le Myre depuis cinq cents ans, terraformant le continent pour refléter un mélange du marécage d'origine et de leur propre patrie.<br>
        Pendant le Grand Raid, trois équipes d'éclaireurs vikings ont été envoyées pour essayer de trouver un chemin à travers les marais; aucun n'est revenu. C'est Runa qui a finalement trouvé le succès lorsqu'elle a obtenu des cartes qui indiqueraient aux Vikings comment naviguer dans le marais et entrer dans Koto, la capitale Samouraïs.</p>
    </main>
    <br>
    <section>
        <hr>
        <br>
        <h3 class = "big">Les cartes jouables en Myre :</h3>
        <div class="row">
            <?php
            $images = [
            "Le Sanctuaire" => "https://cdna.artstation.com/p/assets/images/images/010/926/888/large/damian-buzugbe-arena-sm-courtyard-01.jpg?1526985176",
            "Le Pont du Sanctuaire" => "https://cdna.artstation.com/p/assets/images/images/005/969/608/large/jeong-h-shin-jeongshin-2017-forhonor-03a.jpg?1510178028",
            "Forêt" => "https://cdna.artstation.com/p/assets/images/images/005/327/676/large/charles-faubert-fh-portfolio-forest-a.jpg?1490226962",
            "Ruines de la Tour" => "https://cdna.artstation.com/p/assets/images/images/005/847/766/large/jay-paul-singh-mann-chaput-towerruins-ashfeld-03.jpg?1494216672",
            "Surveillance" => "https://cdnb.artstation.com/p/assets/images/images/013/459/681/large/laurie-durand-overwatch-03.jpg?1539700289",
            "Jardins du Temple" => "https://cdna.artstation.com/p/assets/covers/images/013/460/016/large/laurie-durand-thumbnail-logo-garden.jpg?1539701175",
            "Marché de la ville" => "https://cdna.artstation.com/p/assets/images/images/008/859/216/large/jeong-h-shin-03-2-market-town-viking-attacker-sp.jpg?1515730604",
            "Tête de pont" => "https://cdnb.artstation.com/p/assets/images/images/013/463/367/large/richard-court-beachhex-011.jpg?1539709922",
            "Canopée" => "https://cdnb.artstation.com/p/assets/images/images/017/510/539/large/damian-buzugbe-treetopvillage-06.jpg?1556268394",
            "Chateau de Kazan" => "https://cdna.artstation.com/p/assets/images/images/013/439/780/large/maxim-chenel-forhonor-f03-gatekeepers-01.jpg?1539620515",

            ];
            foreach ($images as $cle => $valeur){
            ?>
            <div id = "third" class="column-maps">
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
    <h3 class = "big" id = "heroes">Les héros Samouraïs :</h3>
    <h4><em>"Nous sommes tout ce qui reste d'un peuple ancien. C'est pourquoi chacun de nos guerriers doit être à la hauteur de dix de nos ennemis. Assassins intrépides et disciplinés d'un pays lointain, nous combattons et mourons au nom de nos ancêtres. Notre courage est inébranlable, notre compétence inégalée. Maîtres de la guerre, nos lames frappent rapidement, silencieusement, mortellement. Car il n'y a pas d'honneur dans la défaite.<br> Êtes-vous digne des samouraïs ?"</em></h4>
    <?php
        $images = [
        ["Le Kensei", "./images/myre/kensei.webp", "Le Kensei incarne – autant que faire se peut – le Bushidō, le code moral des Samouraïs. Maître de nombreux arts martiaux, il est conditionné dès son plus jeune âge à se battre et à mourir pour son empereur ou son frère d'armes. Le Kensei porte une armure lourde et manie le nodachi, une version longue du katana capable de trancher l'ennemi de quelques coups aussi élégants que mortels. Il passe sa vie à se battre et à s'entraîner pour atteindre un niveau de perfection que bien peu peuvent espérer égaler.", "kensei"],
        ["Le Shinobi", "./images/myre/shinobi.webp", "Les Shinobis sont des guerriers silencieux. Ils se déplacent avec la grâce des danseurs et tuent avec une terrible précision, héritée d'une vie d'entraînement rigoureux.", "shinobi"],
        ["L'Orochi","./images/myre/orochi.png", "Les Orochi sont les assassins impériaux des Samouraïs. Ils écument le champ de bataille comme des fantômes, répandant la terreur et la mort chez ceux qui ont le malheur de croiser leur chemin. Misant plus sur leur maîtrise de la furtivité et du subterfuge que sur leur armure, forcément légère, ils éliminent leurs ennemis à coups de katana, d'armes de jet ou encore de poison : l'Orochi connaît en effet d'innombrables moyens de tuer, car sa loyauté à toute épreuve en fait le dépositaire des plus sombres secrets de son clan.", "orochi"],
        ["Le Shugoki","./images/myre/shugoki.webp", "Ne vous laissez pas induire en erreur par son aspect lent et pesant : le Shugoki possède la force d'un démon et une volonté de fer. Ceux qui se veulent les gardiens de leur peuple doivent faire montre d'un courage exemplaire et savoir placer coûte que coûte les besoins d'autrui avant les leurs. Voilà qui n'a jamais posé problème aux Shugoki. Leur arme de prédilection paraît encombrante, mais ils savent lui imprimer la même précision qu'à la première lame venue.", "shugoki"],
        ["L'Hitokiri","./images/myre/hitokiri.webp", "Les Samouraïs ont un nom pour les anciens bourreaux : Hitokiri, les « tueurs d'hommes » sans cœur. Ces guerriers fantomatiques ont perdu toute foi en l'Humanité. Ils écument les terres armés de leur masakari, la puissante hache destinée à appliquer la sentence des criminels. Leur présence sur le champ de bataille répand un sinistre nuage de mort qui peut terrifier tous les ennemis.", "hitokiri"],
        ["L'Aramusha","./images/myre/aramusha.webp", "L'Aramusha est un Samouraï disgracié. Silence et grâce ne sont pas ses points forts, mais il se déplace avec une économie de mouvements consommée, précis comme un félin. Ses deux lames ne font qu'une bouchée de tous ceux qui s'opposent à lui. Aramushas et Shinobis sont tous deux membres du même ordre secret, mais leurs rôles diffèrent radicalement : alors que les Shinobis sont des assassins silencieux, les Aramushas sont les hommes de main ou les gardes du corps des maisons samouraïs les plus puissantes. Ils se battaient jadis pour une cause honorable, mais les circonstances (trahison, avidité, égoïsme) les en ont dévoyés. Nulle aura de mystère ne les entoure : ce sont simplement des guerriers d'élite qui manient deux katanas avec un redoutable savoir-faire.", "aramusha"],
        ["La Nobushi","./images/myre/nobushi.png", "Les villages à l'extérieur de nos remparts ont besoin d'être protégés. Mais comment défendre le peuple s'il reste si peu de Samouraïs dans nos armées ? Les Nobushi, combattantes élégantes et agressives équipées de l'armure la plus légère qui soit et de l'arme la plus incroyable : le naginata. Elles ne semblent pas être faites pour le combat. Mais, leur apparence est trompeuse.<br> Elles maintiennent nos terres en sécurité.<br><strong> Et nous ne savons même pas qui elles sont.</strong>", "nobushi"],
        ["Le Kyoshin","https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7Kc0HKee7b8n1Odnsm8WLG/9ca38e42efab66c2233fcc15c92cbdcc/Hero_Portrait_Kyoshin.jpg", "Les enfants dotés de caractéristiques insolites sont parfois pris pour des Yokai et traités en parias parmi les humains. L'une des rares perspectives de survie qui s'offrent à eux est de rejoindre les prêtres Kyoshin. Dans un temple isolé au plus profond du Bourbier, ces nouveau-nés abandonnés trouvent un nouveau foyer parmi des individus qui comprennent et encouragent leur potentiel. Devenus apprentis des Kyoshin plus âgés, ils suivent une ascèse pour renforcer leurs capacités physiques, mentales et spirituelles. À l'âge adulte, les apprentis Kyoshin effectuent un rituel nommé « révélation céleste » au cours duquel, dit-on, ils se laissent volontairement posséder par les divinités des Samouraïs. Après avoir voyagé entre les royaumes et appris les secrets du monde spirituel, ils jurent de servir l'harmonie naturelle et regagnent leur enveloppe mortelle doués de pouvoirs occultes. <br> Avant la grande sécheresse, les Kyoshin passaient pour des maîtres du déguisement, capables d'être partout et quiconque. Certains guerriers doutaient de leur existence même. Pourtant, les grandes catastrophes et les nouveaux conflits d'Heathmoor forcèrent les Kyoshin à quitter leur temple. Là où beaucoup de guerriers tentent de choisir entre bien et mal, eux cherchent avant tout à entretenir l'équilibre naturel. Ils peuvent rejoindre un camp comme l'autre pour y parvenir.", "kyoshin"],
        ];
        foreach ($images as list($v1, $v2, $v3, $v4)){
        ?>
            <h2 id=<?= $v4 ?>><?= $v1 ?></h2>
    <div class="row">
        <div id = "third" class="column-characters">
            <img id = "characters" src=<?= $v2 ?>>
        </div>
        <div id = "third" class="column-characters">
            <p><?= $v3 ?></p>
            <img id = "emblem" src="./images/samouraisemblem.webp" alt="Samourais's emblem">
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