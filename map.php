<?php

function map($icon,$title)
{
            $xml = $GLOBALS["xml"];
            $serverAddress = $GLOBALS["serverAddress"];
            // map image with vehicles
            echo '<div class="module_title"><h2><p style="display:inline-block;"><i class="'.$icon.'"></i>  '.$title.'</p></h2></div>';
    
            $linkToServer = str_replace( "dedicated-server-stats.xml", "dedicated-server-stats-map.jpg", $serverAddress ); 
            $imageQuality = 90;     // 60, 75, 90
            $imageSize = 512;      // 256, 512, 1024, 2048
            $mapSize = floatval($xml["mapSize"])*2;
            $mapSizeHalf = $mapSize / 2.0;
            $linkToImage = sprintf("%s&quality=%s&size=%s", $linkToServer, $imageQuality, $imageSize);
    
            $machineIconSize = 10;

            echo '<div class="module_content">';
            echo "<div id=\"mapContainer\" style=\"position:relative; width:",$imageSize,"; height:",$imageSize,"; overflow:auto\"  >";
            echo "<img src=\"" . $linkToImage . "\"/>";
    
                echo "<div id=\"mapElementsContainer\" >";
    
                $i=0;
                foreach ($xml->Vehicles->Vehicle as $veh) {
                    $i++;
    
                    $x = ($veh["x"] + $mapSizeHalf) / ($mapSize / $imageSize);
                    $z = ($veh["z"] + $mapSizeHalf) / ($mapSize / $imageSize);
    
                    $x = $x - ($machineIconSize-1)/2;
                    $z = $z - ($machineIconSize-1)/2;
    
                    $vehicleGroup = getVehicleClass($veh["category"], $veh["type"]);
    
                    $icon = "icons/" . $vehicleGroup . ".png";
                    $iconHover = "icons/" . $vehicleGroup . "_selected.png";
                    $backgroundColor = "#4dafd7";
    
                    printf("<div id=\"vehicle%dContainer\" style=\"position:absolute; left: %dpx; top: %dpx;\" onmouseout=\"document.getElementById('vehicle%d').style.display='none'; document.getElementById('vehicle%dImage').src='%s'; document.getElementById('vehicle%dContainer').style.zIndex=1;\" onmouseover=\"document.getElementById('vehicle%d').style.display='block'; document.getElementById('vehicle%dImage').src='%s'; document.getElementById('vehicle%dContainer').style.zIndex=10; \" >
                            <image id=\"vehicle%dImage\" src=\"%s\" width=\"%d\" height=\"%d\" />
                            <div id=\"vehicle%d\" style=\"display:none; position:absolute; bottom:0px; left:%dpx; background:%s; padding-left:8px; padding-right:8px; color: #ffffff; \">
                            <nobr>%s</nobr>
                            </div>
                            </div>", $i,  $x, $z, $i, $i, $icon, $i, $i, $i, $iconHover, $i, $i, $icon, $machineIconSize, $machineIconSize, $i, $machineIconSize+1, $backgroundColor, $veh["name"]);
                }
    
                echo "</div>";
            echo "</div></div>";
}
