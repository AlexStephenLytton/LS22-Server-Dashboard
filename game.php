<?php

function game($icon,$title)
{
    $xml = $GLOBALS["xml"];
    $xml2 = $GLOBALS["xml2"];
    $money = $xml2->statistics->money[0];
    $fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
    
    echo '<div class="module_title"><h2><p style="display:inline-block;"><i class="'.$icon.'"></i>  '.$title.'</p></h2></div>';
    echo '<div class="module_content">';    
    
    /*echo "<h4>Game Info</h4>";*/
    echo '<table class="t1">';
    echo "<tr><td>Game</td><td>" . $xml["game"] . "</td></tr>";
    echo "<tr><td>Server Version</td><td>" . $xml["version"] . "</td></tr>";
    echo "<tr><td>Maximum Players</td><td>" . $xml->Slots["capacity"] . "</td></tr>";
    echo "<tr><td>Server Name</td><td>" . $xml["name"] . "</td></tr>";
    echo "<tr><td>Map Name</td><td>" . $xml["mapName"] . "</td></tr>";
    echo "<tr><td>DayTime</td><td>" . $xml["dayTime"] . "</td></tr>";
    echo "<tr><td>Money</td><td>" . $money . " €</td></tr>";
    echo '</table>';

    echo "<h4>Settings</h4>";    
    echo '<table class="t1">';
    echo "<tr><td>AutoSave Interval</td><td>" . (int)$xml2->settings->autoSaveInterval[0] . " min</td></tr>";
    echo "<tr><td>Time Scale</td><td>" . (int)$xml2->settings->timeScale[0] . "x</td></tr>";
    echo "<tr><td>Traffic Enabled</td><td>" . $xml2->settings->trafficEnabled[0] . "</td></tr>";
    echo "<tr><td>Days per Period</td><td>" . $xml2->settings->plannedDaysPerPeriod[0] . " Day(s)</td></tr>";
    echo "<tr><td>Fruit Destruction enabled</td><td>" . $xml2->settings->fruitDestruction[0] . "</td></tr>";
    echo "<tr><td>Plowing enabled</td><td>" . $xml2->settings->plowingRequiredEnabled[0] . "</td></tr>";
    echo "<tr><td>Stones enabled</td><td>" . $xml2->settings->stonesEnabled[0] . "</td></tr>";
    echo "<tr><td>Weeds enabled</td><td>" . $xml2->settings->weedsEnabled[0] . "</td></tr>";
    echo "<tr><td>Snow enabled</td><td>" . $xml2->settings->isSnowEnabled[0] . "</td></tr>";
    echo "<tr><td>Lime required</td><td>" . $xml2->settings->limeRequired[0] . "</td></tr>";
    echo '</table>';
    echo '</div>';
}