<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Ashfeld</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name = "author" content="Guilhem BONNEFOUS" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wiki page of Ashfeld">
    <meta name="keywords" content="HTML5, CSS, JavaScript, PHP, For Honor">
    <link rel="stylesheet" href="./styles2.css">
    <link rel="stylesheet" href="./chevalier.css">
    <script type = "text/javascript" src ="./script.js"></script>
</head>
<body>
    <ul id = "navbar">
        <li class = "navbar"><a href="./index.html">Accueil</a></li>
        <li class = "navbar"><a class = "active" href="./ashfeld.php">Ashfeld</a></li>
        <li class = "navbar"><a href="./valkenheim.php">Valkenheim</a></li>
        <li class = "navbar"><a href="./myre.php">Myre</a></li>
        <li class = "navbar"><a href="./wulin.php">Wu Lin</a></li>
        <li class = "navbar"><a href="./outlanders.php">Les Étrangers</a></li>
        <li id = "right" class = "navbar"><a href="./about.html" OnClick="ouvrirliens()">À propos</a></li>
    </ul>
    <p id = "top"></p>
    <header>
        <h1>Ashfeld</h1>
        <h2>Terre des Chevaliers</h2>
        <h4><em>"Nous sommes les gardiens de notre peuple. Nous tenons bon contre même le plus puissant des envahisseurs. Le devoir est notre bouclier, l'ordre : notre arme. Lorsque nous défendons les faibles, nous sommes... immortels."</em></h4>
    </header>
    <main>
        <h3>La faction des Chevaliers :</h3>
        <p>Bien qu'ils soient considérés comme un seul groupe, les Chevaliers ne sont guère unifiés. Il existe de nombreuses légions à Ashfeld, la plus importante étant la Légion de fer. Chaque légion est une armée indépendante qui sert à protéger et à régner sur une zone spécifique, généralement autour de sa plus grande forteresse, ou de son sanctuaire. Chaque légion a son propre cercle - un groupe d'individus de haut rang qui servent de conseillers pour la légion et leurs seigneurs de guerre.
        Pour les Chevaliers, l'honneur et le devoir vont de pair. Les serments ne sont pas rompus à la légère et de nombreux chevaliers servent ainsi des seigneurs de guerre qu'ils n'apprécient pas.</p>
        <h3> Géographie :</h3>
        <p>Ashfeld : domicile des Chevaliers.<br> Avec son climat tempéré et ses forêts verdoyantes, cette terre semble sans dangers pour ceux qui ne la connaissent pas.
           Bien que plus indulgente que les deux autres terres, Ashfeld reste dangereuse. Le volcan, le mont Ignis, a créé des lacs et des rivières d'acide, forçant les Chevaliers qui occupent la terre à surveiller attentivement les sources d'eau pour identifier celles qui sont sûres et celles qui ne le sont pas.
           Des gouffres de lave et des geysers menacent tous ceux qui ne s'en méfient pas. Plus vous êtes au nord, moins la terre devient stable. De temps en temps, la terre tremblera et une nouvelle fosse de lave émergera, rappelant aux habitants d'Ashfeld le Cataclysme.<br>
           Des ruines antiques d'un temps oublié parsèment le paysage. Beaucoup de ces ruines se sont effondrées en décombres, mais quelques-unes tiennent encore debout. Les Chevaliers pensent que ces ruines ont été construites par le Grand Empire, le précurseur de la Légion de Fer.<br>
           La vie végétale est florissante et incroyablement variée, allant de forêts de feuillus à des arbres à feuilles persistantes dans les montagnes.</p>    
        <h3> Histoire : </h3>
        <p>Après le Cataclysme, Ashfeld a été consumée par la guerre avec les Vikings. Ceux-ci avaient presque gagné la guerre, lorsque la Légion d'Obsidienne a stoppé leur avance et a commencé une contre-attaque. Puis, du jour au lendemain, les Vikings ont disparu.<br>
        Des années après, alors que les guerriers du Nord n'étaient plus que des mythes, les Chevaliers d'Ashfeld tentèrent de s'étendre en Valkenheim : le territoire ancestrale des Vikings. Mais ceux-ci revinrent, renouvelant la guerre entre les deux factions. Les Chevaliers ont alors tenté de s'étendre dans le marais marécageux de Myre mais ce sont heurtés à ses nouveaux habitants, les Samouraïs, qui ont riposté.<br>
        Après des années de guerre, les Chevaliers ont finalement repoussé les Vikings et les Samouraïs hors d'Ashfeld, et la paix tomba enfin sur cette terre meurtrie.
        Sans ennemi commun pour les unifier, les Chevaliers tombèrent dans le désarroi. Différentes légions se formèrent, dont notamment la Légion de Fer, mais beaucoup de chevaliers déclarèrent leur allégeance à des seigneurs de guerre et à des groupes de mercenaires.<br>
        Lorsque les Vikings revinrent, ils rencontrèrent peu de résistance, dû à la dissension entre les Chevaliers, et purent revendiquer plusieurs avant-postes le long de la frontière, avant de commencer à pousser vers l'intérieur des terre. Néanmoins, la Légion d'Obsidienne les repoussa encore une fois.<br>
        Avec le renouvellement de la Grande Guerre, Ashfeld est sous la menace constante d'une invasion de ses voisins Vikings et Samouraïs.</p>
    </main>
    <br>
    <section>
        <hr>
        <br>
        <h3 class = "big">Les cartes jouables en Ashfeld :</h3>
        <div class="row">
            <?php
            $images = [
            "L'anneau" => "https://cdnb.artstation.com/p/assets/images/images/010/926/941/large/damian-buzugbe-arena-kn-stonecircle-01.jpg",
            "Porte de la Citadelle" => "./images/ashfeld/citadelgate.webp",
            "Cathédrale" => "https://cdna.artstation.com/p/assets/images/images/005/847/704/large/jay-paul-singh-mann-chaput-cathedral-ashfeld-01.jpg?1494216480",
            "L'Aiguille" => "./images/ashfeld/TheShard.webp",
            "Moulin en cendres" => "./images/ashfeld/cindermill.webp",
            "Forge" => "https://cdna.artstation.com/p/assets/images/images/013/439/982/large/maxim-chenel-forhonor-s11-forge-02.jpg?1539621035",
            "Sentinelle" => "https://www.gamereactor.fr/media/grtv/99/329993_w926.jpg",
            "Vigie" => "https://cdna.artstation.com/p/assets/images/images/013/480/620/large/james-charlick-secludedkeep-artstation-01-0005-f.jpg?1539790259",
            "Le Port" => "https://cdna.artstation.com/p/assets/images/images/016/243/002/large/james-charlick-03.jpg?1551437984",
            "Cité murée" => "https://cdna.artstation.com/p/assets/images/images/013/387/934/large/laurie-durand-face1.jpg?1539358214",

            ];
            foreach ($images as $cle => $valeur){
            ?>
            <div id = "first" class="column-maps">
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
    <h3 class = "big" id = "heroes">Les héros Chevaliers :</h3>
    <h4><em>"Liés par un serment inviolable, nous avons juré de défendre notre patrie jusqu'à la mort. Ceux qui osent tenter de s'en emparer seront pacifiés par l'acier. Nous sommes les Justes, voués à protéger les faibles des dangers et du malin.<br> Où l'anarchie et l'oppression règne, nous rendons une justice rapide et sans compromis. Nous sommes les nobles chevaliers de la Légion de Fer.<br> Restez avec nous, ou soyez jugés par nos lames.</em></h4>
    <?php
        $images = [
        ["La Sentinelle", "./images/ashfeld/warden.webp", "La Sentinelle est une guerrière noble et puissante qui a voué sa vie à défendre sa terre et son peuple. Redoutable en attaque comme en défense, elle porte une armure de plates partielle avec cotte de mailles et cuir. La Sentinelle manie une lourde épée longue à deux mains qui lui permet à la fois d'attaquer et de parer. Non contente d'être une combattante redoutable, c'est aussi une diplomate consommée qui incarne l'idéal chevaleresque.<br> Les candidats sont nombreux, mais bien peu y parviennent.", "warden"],
        ["La Spadassin", "./images/ashfeld/spadassin.webp", "Vives et mortelles, les Spadassins peuvent gagner une bataille sans que l'ennemi ne soupçonne même leur présence. Rares sont les guerriers capables de se fondre ainsi dans l'ombre pour frapper en silence. Ceux-là n'ont que faire de la gloire : ils sont les instruments de la mort, qu'elle manie pour infléchir le cours des guerres. Même ceux qui ne croiseront jamais leur route auront vent de leurs exploits macabres.", "peacekeeper"],
        ["Le Gladiateur","./images/ashfeld/gladiator.webp", "Le Gladiateur est un professionnel du combat. S'il est l'un des meilleurs de sa catégorie, c'est à force d'innombrables batailles sanglantes dans l'arène. Il se bat pour des motifs qui lui sont propres : certains pour la gloire, d'autre pour la richesse. Mais tous se battent. Son armure est réduite au minimum pour mieux manier son bouclier et son trident, mais aussi en témoignage de sa maîtrise. Il emporte l'adulation de la foule à chacun de ses combats, mais ses talents et son entraînement pourront-ils prévaloir dans une guerre ouverte ? <br>Pour le Gladiateur, l'heure est venue de combattre pour une cause qui le dépasse.", "gladiator"],
        ["Le Fléau","./images/ashfeld/conqueror.webp", "Les Fléaux sont d'anciens prisonniers et autres conscrits qui ont atteint le rang de soldat d'élite. Ceux qui survivent à leur service d'ost au titre de chair à canon sont promus et reçoivent une intense formation d'infanterie. Ce sont des guerriers en armure lourde qui privilégient la défense et manient un fléau pesant pour éliminer leurs ennemis à l'usure. Partis du tout-venant pour atteindre ce rôle prestigieux dans les forces des Chevaliers, les Fléaux ont gagné le respect de leurs frères à force de détermination et de vaillance.", "conqueror"],
        ["Le Victimaire","https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7IumdC4a34X6c6mJylpXFQ/83a06b6e18ef279443f63210c0e5e86b/FH_Knight_BlackPrior-M_2021.jpg", "Les Victimaires sont des héros lourds équipés d'un imposant pavois et d'une épée longue. Ces sinistres guerriers se battent aux côtés des Chevaliers, mais ne s'encombrent pas du code de la chevalerie. Quel que soit le prix de la victoire, les Victimaires sont prêts à le payer. Menés par l'imposant Vortiger, ces guerriers jadis fidèles à Apollyon réinventent leur légende et sèment un chaos inédit sur le champ de bataille.", "vortiger"],
        ["L'Émissaire","./images/ashfeld/lawbringer.webp", "Là où l'ordre s'effondre. Là où la cruauté et l'anarchie règnent. Les Émissaires représentent la justice.<br> Ils sont envoyés là où règne la désolation. Et ils sont entraînés. Il n’y a pas meilleure armure que la leur. Sa fabrication est gardée secrète par leur ordre. Et leur hache de guerre est une des armes les plus polyvalentes de l’Histoire.<br> Priez pour ne pas avoir besoin d'eux.<br><strong> Et quand ils arrivent, priez pour ne pas avoir fauté.</strong>", "lawbringer"],
        ["Le Centurion","./images/ashfeld/centurion.webp", "À ses yeux, le champ de bataille est un échiquier : chaque guerrier doit y jouer son rôle, quitte à se sacrifier pour le bien commun. Telle est la nature de la guerre et telle est la voie du Centurion !", "centurion"],
        ["Le Griffon","./images/ashfeld/gryphon.webp", "Il est des vieux singes qui peuvent encore apprendre à faire des grimaces.<br> Celui qui se faisait autrefois appeler Holden Cross en est la preuve vivante. Le célèbre vétéran partit pour un voyage initiatique à travers Heathmoor après avoir quitté les Émissaires. Durant sa carrière de mercenaire, il rencontra des guerriers de toutes les factions, qui mirent de côté leurs différends pour lui enseigner plus qu'il n'aurait jamais espéré. Ils lui offrirent même un nouveau nom : Griffon, le guerrier au cœur de lion et au regard perçant d'aigle.", "gryphon"],
        ["La Belliciste","./images/ashfeld/warmonger.webp", "La Belliciste est une combattante grandiose qui fait forte impression sur le champ de bataille. Son arme de prédilection est la flamberge, une épée à deux mains aussi élégante que mortelle. Les Bellicistes croient avoir reçu un pouvoir obscur nommé Corruption pour éliminer tous les menteurs et imposteurs ici-bas. Elles semblent avoir rallié à leur cause d'anciens membres de la Légion d'Obsidienne, mais leurs ambitions vont bien au-delà. À la tête de l'Ordre d'Horkos, une société secrète rassemblant des émules de toutes les factions, elles veulent rassembler des guerriers disposés à rejeter leurs anciens dieux pour fonder une nouvelle ère.", "warmonger"],
        ];
        foreach ($images as list($v1, $v2, $v3, $v4)){
        ?>
            <h2 id=<?= $v4 ?>><?= $v1 ?></h2>
    <div class="row">
        <div id = "first" class="column-characters">
            <img id = "characters" src=<?= $v2 ?>>
        </div>
        <div id = "first" class="column-characters">
            <p><?= $v3 ?></p>
            <img id = "emblem" src="./images/knightemblem.webp" alt="Knights's emblem">
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