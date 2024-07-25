<?php
function vehicles($icon,$title)
{
    $xml = $GLOBALS["xml"];
    $xml2 = $GLOBALS["xml2"];
    echo '<div class="module_title"><h2><p style="display:inline-block;"><i class="'.$icon.'"></i>  '.$title.'</p></h2></div>';
    echo '<div class="module_content tableFixHead"><table class="t2">';
    $count = 1;
    foreach ($xml->Vehicles->Vehicle as $veh) {
        /*if($veh["category"] == "CARS" || str_contains($veh["category"],"TRACTOR")  || str_contains($veh["category"],"TRUCK")  || str_contains($veh["category"],"FORKLIFT")  || str_contains($veh["category"],"HARVESTER"))*/
        if(isset($veh["isAIActive"]))
        {
            printf("<tr><td>#%s</td><td>%s</td><td>%s</td></tr>", $count, $veh["name"], $veh["controller"] );
            $count = $count + 1;
        }
    }
    echo "</table></div>";
}
?>