<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/f625c19ac8.js" crossorigin="anonymous"></script>
    <title>LS22 Webserver Overview</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
<?php
    include("config.php");
    include("webStatsInclude.php");
    include("map.php");
    include("vehicles.php");
    include("mods.php");
    include("game.php");
    include("players.php");
    include("header.php");
    include("footer.php");	

    setlocale(LC_MONETARY,"de_DE");

    $xml    = getServerStatsSimpleXML($GLOBALS["serverAddress"]);
    $xml2   = getCareerStatsSimpleXML($GLOBALS["careerAddress"]);

    if ($xml) {

    top();
    
    $icon = "fa-solid fa-circle-info";
    $title = "Game Info";
    echo '<div class="container">';
    echo '<div id="gradbox" class="Modul-1 module">';
    game($icon,$title);
    echo'</div>';
    
    $icon = "fa-solid fa-user-group";
    $title = "Online Players";
    echo '<div id="gradbox" class="Modul-2 module">';
    players($icon,$title);
    echo'</div>';
    
    $icon = "fa-solid fa-tractor";
    $title = "Vehicles";
    echo '<div id="gradbox" class="Modul-3 module">';
    vehicles($icon,$title);
    echo'</div>';
    
    $icon = "fa-solid fa-map";
    $title = "Map Overview";
    echo '<div id="gradbox" class="Modul-4 module">';
    map($icon,$title);
    echo '</div>';
    
    $icon = "fa-solid fa-file-zipper";
    $title = "Mods";
    echo '<div id="gradbox" class="Modul-5 module">';
    mods($icon,$title);
    echo '</div>';
    
    $icon = "fa-solid fa-file-zipper";
    $title = "Mods";
    echo '<div id="gradbox" class="Modul-6 module">';
    echo '</div>';

    echo '</div>';
    } else {
    echo "<p>Server stats feed unavailable</p>\n";
    }
    echo '<div class="footer">';
    footer();
    echo '</div>';
?>
</body>
</html>