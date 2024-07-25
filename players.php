<?php

function players($icon,$title)
{
    $xml = $GLOBALS["xml"];
    echo '<div class="module_title"><h2><p style="display:inline-block;"><i class="'.$icon.'"></i>  '.$title.'</p></h2></div>';
    echo '<div class="module_content">';
    /*echo '<table border="0" cellspacing="7">';*/
    echo '<table class="t2">';
    echo "<tr><th align=\"left\">Slot</th><th align=\"left\">Name</th><th align=\"left\">Online seit</th><th align=\"left\">Status</th><th align=\"left\">Position</th></tr>";
    $slotCount = 1;
    foreach ($xml->Slots->Player as $player) {
        if(isset($player["isUsed"])){
            if ($player["isUsed"] == "true") {
                $hours = floor($player["uptime"]/60);
                $minutes = floor($player["uptime"]-($hours*60));

                // Position of the player, may not exist on certain occasions, e.g. when the player has entered a vehicle
                // In that case the entered vehicle has a "controller" field set to the name of this player
                $x = $player["x"];
                $y = $player["y"];
                $z = $player["z"];

                echo "<tr><td>#" . $slotCount . "</td><td>" . $player . "</td><td>" . $hours . ":" . sprintf("%02d", $minutes) . "h</td><td>" . (($player["isAdmin"] == "true")?"Admin":"");
                if (isset($x) && isset($y) && isset($z)) {
                    echo "</td><td>" . $x . " / " . $y . " / " . $z;
                }
                else {
                    echo "</td><td>- is in Vehicle -";
                }
                echo "</td></tr>";

                } 
                else {
                    echo "</td><td>#" . $slotCount . "</td><td>---Empty---</td><td></td><td></td><td></td></tr>";
                }
            $slotCount++;
        }
    }
    echo "</table></div>";
}