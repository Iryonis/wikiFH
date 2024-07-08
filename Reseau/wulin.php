<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Wu Lin</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name = "author" content="Guilhem BONNEFOUS" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wiki page of the Wu Lin's faction">
    <meta name="keywords" content="HTML5, CSS, JavaScript, PHP, For Honor">
    <link rel="stylesheet" href="./styles2.css">
    <link rel="stylesheet" href="./wulin.css">
    <script type = "text/javascript" src ="./script.js"></script>
</head>
<body>
    <ul id = "navbar">
        <li class = "navbar"><a href="./index.html">Accueil</a></li>
        <li class = "navbar"><a href="./ashfeld.php">Ashfeld</a></li>
        <li class = "navbar"><a href="./valkenheim.php">Valkenheim</a></li>
        <li class = "navbar"><a href="./myre.php">Myre</a></li>
        <li class = "navbar"><a class = "active" href="./wulin.php">Wu Lin</a></li>
        <li class = "navbar"><a href="./outlanders.php">Les Étrangers</a></li>
        <li id = "right" class = "navbar"><a href="./about.html" OnClick="ouvrirliens()">À propos</a></li>
    </ul>
    <p id = "top"></p>
    <header>
        <h1>Faction Wu Lin</h1>
    </header>
    <main>
        <h3>La faction des Wu Lin :</h3>
        <p>Après le Cataclysme, la Chine a sombré dans des centaines d'années de guerre civile. De toutes les factions participant à la guerre civile, les Wu Lin ont commencé à monter au sommet. Mais même eurent des dissensions après tant d'années de conflit. Beaucoup de leurs guerriers ont commencé à voyager vers l'ouest, chacun avec sa propre raison allant de l'honneur et de la gloire à l'exil et à la disgrâce.</p>  
        <h3> Histoire : </h3>
        <p>Lorsque le Cataclysme a frappé, la Chine n'était pas préparée à la guerre civile qui allait éclater. Même lorsqu'un héritier d'une dynastie prestigieuse montait sur le trône, les royaumes tombaient à cause des troubles et des rébellions. À la suite de tout ces conflit et de cette misère, un certain nombre de guerriers ont choisi de s'aventurer vers l'Ouest, se retrouvant à Heathmoore. On peut se demander s'ils trouveront ou non la paix, ou même une solution dans ce nouveau pays, mais ils ont choisi de rejoindre la Grande Guerre des factions en tant que quatrième groupe étranger de guerriers divers.</p>
    </main>
    <br>
    <section>
        <hr>
        <br>
        <h3 class = "big">Les cartes jouables de la faction Wu Lin :</h3>
        <div class="row">
            <?php
            $images = [
            "Le Belvédère" => "https://cdna.artstation.com/p/assets/images/images/030/505/060/large/wei-wei-wei-wei-forhonor-belvedere-weiwei-2019-02.jpg?1600804470",
            "Qiang Pass" => "https://cdna.artstation.com/p/assets/images/images/022/127/816/large/jessyca-lemire-bertrand-006.jpg?1574207796",
            ];
            foreach ($images as $cle => $valeur){
            ?>
            <div id = "forth" class="column-maps">
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
    <h3 class = "big" id = "heroes">Les héros Wu Lin :</h3>
    <?php
        $images = [
        ["Le Tiandi", "./images/wulin/tiandi.webp", "Le terme Tiandi (« ciel et terre ») représente la vie de dévouement qui est la sienne. Le Tiandi est l'indéfectible protecteur des rois, des reines et des empereurs. Il maîtrise à la perfection l'arme de prédilection des gardes royaux : le dao. Les Tiandi prêtent serment de loyauté à leur souverain, auquel ils sont alors assujettis toute leur vie durant. Ils sont réputés pour leur courage et leur dignité au combat. Quand le souverain d'un Tiandi perd la vie, celui-ci devient un guerrier terrifiant, libéré de ses chaînes.<br> Son dévouement reste intact, mais sa cause n'est plus connue que de lui-même.", "tiandi"],
        ["La Nuxia", "./images/wulin/nuxia.webp", "« Nuxia », ainsi appelait-on les femmes gardes du corps pendant la guerre civile. Ces tueuses de talent écument généralement seules le champ de bataille en éventrant leurs proies grâce à leurs crochets du tigre.", "nuxia"],
        ["Le Jiang Jun","./images/wulin/jiangjun.webp", "Seuls les chefs Wu Lin les plus expérimentés, forts d'une loyauté et d'un sens de l'honneur inégalés, deviennent Jiang Jun : généraux de l'Empire. Ils inculquent d'âpres leçons à leurs ennemis en maniant le guandao, la hallebarde courbe. Incarnations vivantes de l'art de la guerre, ils suscitent un immense respect pour leur sens stratégique sans pareil. Des milliers de soldats sont prêts à combattre et mourir pour eux dans les batailles les plus désespérées.", "jiangjun"],
        ["Le Shaolin","./images/wulin/shaolin.webp", "Le Shaolin est un redoutable moine guerrier célèbre pour la fluidité de son style et son adresse au bâton. L'Ordre de Shaolin fut formé bien avant le Cataclysme, quand les premiers moines établirent un monastère pour trouver des disciples à qui transmettre leurs talents martiaux. Après le Cataclysme, la guerre civile s'abattit sur l'Empire et les moines s'entraînèrent plus assidument encore pour préserver une spiritualité en passe de disparaître. S'il fallait pour cela choisir le poing serré plutôt que la main tendue, ces moines guerriers y étaient prêts. Aujourd'hui, le Shaolin passe son quotidien à prier, s'entraîner et combattre. Il ne se sépare jamais de ses prières manuscrites et assène son message avec une force spirituelle inégalée.", "shaolin"],
        ["Le Zhanhu","./images/wulin/zhanhu.webp", "Toujours très respectés et puissants, les Zhanhu étaient jadis le bras droit de puissants souverains. Représentants des empereurs Wu Lin, ils avaient rejeté toute vie personnelle pour servir la volonté de leurs maîtres. Ils avaient juré d'exécuter les décrets impériaux par tous les moyens. Toute autre considération était secondaire. Les Zhanhu du présent sont de grands maîtres de l'artillerie. Rares sont ceux qui peuvent apprendre à dompter le feu, à manier le redoutable changdao et à décrocher le titre de Zhanhu. Il convient de craindre ces guerriers imprévisibles, car ils ont élaboré mille manières de pourfendre et de réduire en cendres leurs ennemis.", "zhanhu"],
        ];
        foreach ($images as list($v1, $v2, $v3, $v4)){
        ?>
            <h2 id=<?= $v4 ?>><?= $v1 ?></h2>
    <div class="row">
        <div id = "forth" class="column-characters">
            <img id = "characters" src=<?= $v2 ?>>
        </div>
        <div id = "forth" class="column-characters">
            <p><?= $v3 ?></p>
            <img id = "emblem" src="./images/wulinemblem.webp" alt="Wu Lin's emblem">
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