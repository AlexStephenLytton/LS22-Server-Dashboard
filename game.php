<?php

function game($icon,$title)
{
    $xml = $GLOBALS["xml"];
        echo '<div class="module_title"><h2><p style="display:inline-block;"><i class="'.$icon.'"></i>  '.$title.'</p></h2></div>';
        echo '<div class="module_content">';
        echo "Game: " . $xml["game"] . "<br />\n";
        echo "Server: " . $xml["version"] . "<br />\n";
        echo "Name: " . $xml["name"] . "<br />\n";
        echo "Map: " . $xml["mapName"] . "<br />\n";
        echo "DayTime: " . $xml["dayTime"] . "<br />\n";
        echo '</div>';
}