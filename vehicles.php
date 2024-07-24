<?php

function vehicles($icon,$title)
{
    $serverAddress = "http://37.157.248.189:10600/feed/dedicated-server-stats.xml?code=36e9a5b13cbdc0f41d688b4f32fd5e00";
    $xml = getServerStatsSimpleXML($serverAddress);
        echo '<div class="module_title"><h2><p style="display:inline-block;"><i class="'.$icon.'"></i>  '.$title.'</p></h2></div>';
        echo '<div class="module_content"><table border="0" cellspacing="7">';
        printf("<tr><th align=\"left\">#</th><th align=\"left\">Name</th><th align=\"left\">Controller</th></tr>");
        $count = 1;
        foreach ($xml->Vehicles->Vehicle as $veh) {            
            if($veh["category"] == "CARS" || str_contains($veh["category"],"TRACTOR")  || str_contains($veh["category"],"TRUCK")  || str_contains($veh["category"],"FORKLIFT")  || str_contains($veh["category"],"HARVESTER"))
            {
                printf("<tr><td>#%s</td><td>%s</td><td>%s</td></tr>", $count, $veh["name"], $veh["controller"] );
                $count = $count + 1;
            }
        }
        echo "</table></div>";
}