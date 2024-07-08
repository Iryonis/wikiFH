<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Les Étrangers</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name = "author" content="Guilhem BONNEFOUS" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wiki page of the Outlanders's faction">
    <meta name="keywords" content="HTML5, CSS, JavaScript, PHP, For Honor">
    <link rel="stylesheet" href="./styles2.css">
    <link rel="stylesheet" href="./outlanders.css">
    <script type = "text/javascript" src ="./script.js"></script>
</head>
<body>
    <ul id = "navbar">
        <li class = "navbar"><a href="./index.html">Accueil</a></li>
        <li class = "navbar"><a href="./ashfeld.php">Ashfeld</a></li>
        <li class = "navbar"><a href="./valkenheim.php">Valkenheim</a></li>
        <li class = "navbar"><a href="./myre.php">Myre</a></li>
        <li class = "navbar"><a href="./wulin.php">Wu Lin</a></li>
        <li class = "navbar"><a class = "active" href="./outlanders.php">Les Étrangers</a></li>
        <li id = "right" class = "navbar"><a href="./about.html" OnClick="ouvrirliens()">À propos</a></li>
    </ul>
    <p id = "top"></p>
    <header>
        <h1>Faction des Étrangers</h1>
    </header>
    <main>
        <h3>La faction des Étrangers :</h3>
        <p> Contrairement à ceux des quatre autres factions, les héros Étrangers sont des aventuriers libres qui n'ont aucun lien culturel entre eux. Ils se battent pour ceux qui leur sont fidèles ou qui les paient bien. En tant qu'explorateurs et aventuriers, ils apportent des reliques et des trésors à Heathmoor depuis des terres mystérieuses.
        Bien que personne ne sache comment le grand Cataclysme a affecté ces vagabonds, certains d'entre eux peuvent avoir une histoire avec les factions existantes tandis que d'autres ne sont venus que maintenant en raison d'une nouvelle connexion.</p>  
    </main>
    <br>
    <section>
    <br>
    <hr>
    <h3 class = "big" id = "heroes">Les héros Étrangers :</h3>
    <?php
        $images = [
        ["La Pirate", "./images/outlanders/pirate.webp", "Après une série de changements climatiques radicaux, un nouveau territoire s'est ouvert aux Pirates. Depuis le temps qu'ils écument les sept mers, l'heure est venue de rallier Heathmoor. Armés d'un sabre et d'un pistolet reconnaissables entre mille, les Pirates ne connaissent qu'une langue : celle du combat et du chaos. Pas un navire, pas un port, pas un guerrier n'échappe à leur férocité.<br> La base des Pirates est une île près du continent Wu Lin qui fait office de territoire neutre, mais eux-mêmes sont issus de tous horizons : des parias et autres laissés-pour-compte qui ont uni leurs forces. Eux qui ont en commun d'avoir l'eau pour seul foyer, ils sont d'une indéfectible loyauté les uns envers les autres. Leur famille à eux, c'est celle qu'ils ont choisie. Pactes ? Factions ? Légions ? Tout cela, ils n'en ont cure. Seul leur importe de s'enrichir. Ils s'allient à tous ceux qui peuvent les aider et affrontent quiconque s'interpose entre leur butin et eux. Les Pirates ont développé un style de combat bien à eux en affrontant des ennemis du monde entier. Armés de leur sabre acéré et de leur pistolet emblématique, ils assènent une déferlante d'attaques qui ne laissent aucun répit à l'adversaire.", "pirate"],
        ["Le Medjaÿ", "./images/outlanders/medjay.webp", "À la veille d'un combat, un grand pharaon dont le nom s'est perdu dans le temps déclara :<br> <em>« Une douzaine de mes fidèles Medjaÿs face à une armée et la victoire est assurée. »</em><br> Le jour où le Cataclysme s'abattit sur le monde, le prospère royaume d'Égypte s'effondra. Ses monuments jadis imposants furent détruits, engloutis par la terre, l'eau et le sable. Ses hauts faits disparurent, sa prospérité fut reléguée au passé. Pour autant, tout n'était pas perdu.<br> Les Medjaÿs sont les derniers survivants de cette civilisation perdue. Guerriers jadis chargés de protéger leur contrée, ils sont désormais les dépositaires de leur culture. Face au nombre de richesses perdues qui jonchent leur foyer désertique, les Medjaÿs combattent régulièrement aventuriers, explorateurs et chasseurs de trésors autoproclamés. Faute d'un trône à défendre, les Medjaÿs ont évolué. Libérés de leurs responsabilités d'antan, ces guerriers ont développé un nouveau style de combat à deux mains privilégiant une approche plus offensive. Maintenant que la voie d'Heathmoor leur est ouverte, les Medjaÿs voient une nouvelle terre qui manque cruellement de gardiens. Mus par l'intégrité et l'honneur, ces guerriers au sens moral très développé ne connaissent pas la corruption ni la déloyauté. Ils sont prêts à tout sacrifier pour défendre ce qu'ils jugent juste, quel que soit le lieu ou ceux qu'ils choisissent de protéger.<br> Le Medjaÿ est un guerrier très polyvalent qui maîtrise deux styles de combat pour mieux dominer le champ de bataille. Maniant un bâton à deux éventails qui se sépare en haches doubles, il peut transformer instantanément son arme afin de parer à n'importe quelle situation. Il est résolu, indomptable et, par-dessus tout, puissant.", "medjay"],
        ];
        foreach ($images as list($v1, $v2, $v3, $v4)){
        ?>
            <h2 id=<?= $v4 ?>><?= $v1 ?></h2>
    <div class="row">
        <div id = "fifth" class="column-characters">
            <img id = "characters" src=<?= $v2 ?>>
        </div>
        <div id = "fifth" class="column-characters">
            <p><?= $v3 ?></p>
            <img id = "emblem" src="./images/outlandersemblem.png" alt="Outlanders's emblem">
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