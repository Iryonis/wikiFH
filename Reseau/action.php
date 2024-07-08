<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Qui es-tu ?</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name = "author" content="Guilhem BONNEFOUS" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bonus page">
    <meta name="keywords" content="HTML5, CSS, JavaScript, PHP, For Honor">
    <link rel="stylesheet" href="./styles.css">
    <script type = "text/javascript" src ="./script.js"></script>
</head>
<body onload="addCss(<?php $valeur ?>)">
<?php
$man = [
    "Gladiateur" => "chevalier",
    "Fléau" => "chevalier",
    "Victimaire" => "chevalier",
    "Émissaire" => "chevalier",
    "Centurion" => "chevalier",
    "Griffon" => "chevalier",
    "Hersir" => "viking",
    "Berserker" => "viking",
    "Jarl" => "viking",
    "Highlander" => "viking",
    "Kensei" => "samourai",
    "Shinobi" => "samourai",
    "Orochi" => "samourai",
    "Shugoki" => "samourai",
    "Hitokiri" => "samourai",
    "Aramusha" => "samourai",
    "Kyoshin" => "samourai",
    "Tiandi" => "wulin",
    "Jiang Jun" => "wulin",
    "Shaolin" => "wulin",
    "Zhanhu" => "wulin",
    "Medjaÿ" => "outlanders",
];
$woman = [
    "Sentinelle" => "chevalier",
    "Spadassin" => "chevalier",
    "Belliciste" => "chevalier",
    "Shaman" => "viking",
    "Jörmungand" => "viking",
    "Valkyrie" => "viking",
    "Nobushi" => "samourai",
    "Nuxia" => "wulin",
    "Pirate" => "outlanders",
]; ?>

<h2>Tu es...</h2>
<p>
<?php 
$sexe = htmlspecialchars($_POST['sexe']);
$name = htmlspecialchars($_POST['nom']);
if (($name == 'rick') or ($name == 'rick astley') or ($name == 'astley') or ($name == 'rick roll') or ($name == 'rickroll') or ($name == 'rickastley')) {
    echo "<h3>...Rick Astley !!</h3>";
    echo "<pre>
    We're no strangers to love
    You know the rules and so do I (do I)
    A full commitment's what I'm thinking of
    You wouldn't get this from any other guy

    I just wanna tell you how I'm feeling
    Gotta make you understand

    Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you

    We've known each other for so long
    Your heart's been aching, but you're too shy to say it (say it)
    Inside, we both know what's been going on (going on)
    We know the game and we're gonna play it

    And if you ask me how I'm feeling
    Don't tell me you're too blind to see

    Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you

    Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you

    We've known each other for so long
    Your heart's been aching, but you're too shy to say it (to say it)
    Inside, we both know what's been going on (going on)
    We know the game and we're gonna play it

    I just wanna tell you how I'm feeling
    Gotta make you understand

    Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you

    Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you

    Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you </pre>";
} elseif (($name == 'claire') or ($name == 'claire hilaire') or ($name == 'hilaire') or ($name == 'hilaire')) {
    echo "<h3>... la chargée de TD du groupe A4 !</h3>";
    echo "<p> Bonjour Madame ! J'espère que ce site vous plaît ! :D<br>N'oubliez pas d'essayer avec un autre prénom !</p>";
} elseif (($name == 'guilhem') or ($name == 'GUILHEM') or ($name == 'Guilhem')) {
    echo "<h3>... un Concepteur !</h3><br>";
    echo "<img id = 'characters' src='./images/samflynn.webp' alt='concepteur'>";
} else {
    echo "<h3>... ";
    echo $name;
    echo " !</h3>";
    echo "<p>";
    if (($sexe == 'homme') or ($sexe == 'Homme')) {
        $key = array_rand($man, 1);
        echo "Un ";
        echo $key;
        $g = 0;
    } elseif (($sexe == 'femme') or ($sexe == 'Femme')) {
        $key = array_rand($woman, 1);
        echo "Une ";
        echo $key;
        $g = 1;
    }
    echo " de ";
    echo (int)$_POST['age'];
    echo " ans.</p>";
    echo "<p> Bats toi pour ta faction avec force et honneur, ";
    echo $key;
    echo ", et surtout n'oublie pas";
    if ($g == 0) {
        $faction = $man[$key];
    } else {
        $faction = $woman[$key];
    }
    if($faction == "chevalier"){
        echo " que les verdoyantes forêts d'Ashfeld abritent bien des dangers pour ceux qui n'y font pas attention. <br>Ne te perds pas dans la rage de la guerre et ne sombre pas dans le tourbillon de haine qu'elle provoque, car les vertus que tu défends sont l'ordre, la bonté et l'espoir. <br>Tu es le bouclier de ceux qui ne peuvent se défendre, et la lame de la Justice !<br> <strong> For Honor !</strong>";
    } elseif($faction == "viking"){
        echo " que tu ne peux pas survivre dans l'enfer gelé de Valkenheim sans ton clan. <br>À chaque instant de ta vie guerrière, tu as connu le danger ; les terres gelées de ton peuple t'ont forgé/e en une véritable arme que rien ne peut arrêter. Lorsque tu croiseras le fer avec tes ennemis ancestraux, laisse libre cours à ta rage et apprends-leur qu'il ne faut pas menacer ceux qui te sont chers.<br> Car si les Vikings ont la passion du combat, la sécurité de leur clan et la liberté sont leurs raisons de se battre.<br><strong>For Honor !</strong>";
    } elseif($faction == "samourai"){
        echo " que si Myre ne peut te tuer, alors il te rendra plus fort. Et toi et ton peuple en avez besoin, car les ennemis sont partout, et vous n'êtes plus très nombreux... <br> Maîtrise, survie, sérénité et contrôle sont tes maîtres-mots. Mais assez de bavardages ! Ton Empereur a besoin de toi, Samouraï.<br><strong>For Honor !</strong>";
    } elseif($faction == "wulin"){
        echo " ce qui t'a poussé à venir en Heathmoor. Durant le Cataslyme, le monde s'est déchiré, et ton monde s'est effondré.<br> Mais lors de la guerre civile qui a suivi, tu as trouvé une nouvelle famille, les Wu Lin. Tu as combattu de nombreuses batailles à leurs côtés, et comme eux, tu as finalement compris que l'ancien Empire chinois ne se relèverait plus.<br> En ces lointaines terres à l'ouest, ta famille est prise dans une nouvelle guerre, mais cette fois, pas question de fuir ; il n'y a plus nulle part où aller.<br> Alors montre à ces Occidentaux la sagesse, la richesse et la noblesse de ton peuple disparu, et protège ta famille adoptive.<br><strong>For Honor !</strong>";
    } else {
        echo " que le plus important, c'est toi. Toi et tes compagnons avez voyagé par-delà les mers, par-delà les déserts pour arriver en ces riches terres. Il va te falloir te battre et piller, car tu n'es le/a bienvenu/e nulle part ailleurs qu'autour de ton feu de camp.<br> Le voyage est terminé, mais l'aventure ne fait que commencer !<br><strong>For Honor !</strong>";
    }
    echo "</p>";
}?>

<hr>
<br>
    <div class="footer">
        <a href='./about.html' class = "button"> Retour à la page précédente</a>
        <p class = "footer">Site créé par Guilhem BONNEFOUS, dans le cadre de sa deuxième année de licence en informatique à l'Université de Bordeaux, France.</p>
        <p class = "footer">2022, <a class = "bonus" href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' target="_blank"> libre de droits.</a></p>
      </div>  
</body>

