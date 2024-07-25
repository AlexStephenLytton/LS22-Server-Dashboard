<?php
function top()
{
    $xml = $GLOBALS["xml"];
    $xml2 = $GLOBALS["xml2"];

    $slotCount = 1;

    $playerCount = 0;
    $vehicleCount = 0;
    $fieldCount = 0;
    $modsCount = 0;
    foreach ($xml->Slots->Player as $player) {
        if ($player["isUsed"] == "true") {
            $playerCount++;  
        }        
        $slotCount++;
    }
    foreach ($xml->Vehicles->Vehicle as $veh) {
        /*if($veh["category"] == "CARS" || str_contains($veh["category"],"TRACTOR")  || str_contains($veh["category"],"TRUCK")  || str_contains($veh["category"],"FORKLIFT")  || str_contains($veh["category"],"HARVESTER")) {*/
        if(isset($veh["isAIActive"])) {
            $vehicleCount++;
        }
            $slotCount++;
    }
    foreach ($xml->Fields->Field as $field) {                    
        if($field["isOwned"] == "true")
        {
            $fieldCount++;
        }        
        $slotCount++;
    }
    foreach ($xml->Mods->Mod as $mod) {                            
        $modsCount++;     
        $slotCount++;
    }

    $description_1 = "";
    $content_1 = '<img class="ls_logo" src="https://www.ls-farmers.de/wp-content/uploads/2022/03/fs22.png">';
    $text_1 = '';
    
    $description_2 = "";
    $content_2 = '<h2><a title="'.$description_2.'"><i class="fa-solid fa-volume-high"></i></a></h2>';
    $text_2 = '';
    
    $description_3 = "";
    $content_3 = '<h2><a title="'.$description_3.'"><i class="fa-solid fa-signal"></i></a></h2>';
    $text_3 = '';
    
    $description_4 = "Installed Mods on Server";
    $content_4 = '<h2><a title="'.$description_4.'"><i class="fa-solid fa-file-zipper"></i></a></h2>';
    $text_4 = $modsCount;
    
    $description_5 = "Time scale";
    $content_5 = '<h2><a title="'.$description_5.'"><i class="fa-solid fa-clock icon_clock"></i></a></h2>';
    $text_5 = (int)$xml2->settings->timeScale[0]."x";
    
    $description_6 = "Driveable Vehicles on Map";
    $content_6 = '<h2><a title="'.$description_6.'"><i class="fa-solid fa-tractor icon_tractor"></i></a></h2>';
    $text_6 = $vehicleCount;
    
    $description_7 = "Online Players / Max Players allowed on this Server";
    $content_7 = '<h2><a title="'.$description_7.'"><i class="fa-solid fa-users"></i></a></h2>';
    $text_7 = $playerCount . " / " . $xml->Slots["capacity"];
    
    $description_8 = "Fields not owned by NPCs";
    $content_8 = '<h2><a title="'.$description_8.'"><i class="fa-solid fa-map"></i></a></h2>';
    $text_8 = $fieldCount;
    
    $description_9 = "";
    $content_9 = '<div class="site_title"><a title="'.$description_9.'">Farming Simulator 22 Dedicated Server</a></div>';
    $text_9 = '';
    
    $description_10 = "not in use";
    $content_10 = '<h2><a title="'.$description_10.'"><i class=""></i></a></h2>';
    $text_10 = '';
    
    $description_11 = "not in use";
    $content_11 = '<h2><a title="'.$description_11.'"><i class=""></i></a></h2>';
    $text_11 = '';
    
    $description_12 = "not in use";
    $content_12 = '<h2><a title="'.$description_12.'"><i class=""></i></a></h2>';
    $text_12 = '';
    
    $description_13 = "not in use";
    $content_13 = '<h2><a title="'.$description_13.'"><i class=""></i></a></h2>';
    $text_13 = '';
    
    $description_14 = "not in use";
    $content_14 = '<h2><a title="'.$description_14.'"><i class=""></i></a></h2>';
    $text_14 = '';
    
    $description_15 = "not in use";
    $content_15 = '<h2><a title="'.$description_15.'"><i class=""></i></a></h2>';
    $text_15 = '';
    
    $description_16 = "not in use";
    $content_16 = '<h2><a title="'.$description_16.'"><i class=""></i></a></h2>';
    $text_16 = '';
    
    $description_17 = "Not a menu";
    $content_17 = '<h2><a title="'.$description_17.'"><i class="fa-solid fa-bars"></i></a></h2>';
    $text_17 = '';

   
    echo '<div id="gradbox2">';
    echo '<section class="bar_grid">';
    echo '  <div>'.$content_1.'<div class="grid_settings">'.$text_1.'</div></div>';
    echo '  <div>'.$content_2.'<div class="grid_settings">'.$text_2.'</div></div>';
    echo '  <div>'.$content_3.'<div class="grid_settings">'.$text_3.'</div></div>';
    echo '  <div>'.$content_4.'<div class="grid_settings">'.$text_4.'</div></div>';
    echo '  <div>'.$content_5.'<div class="grid_settings">'.$text_5.'</div></div>';
    echo '  <div>'.$content_6.'<div class="grid_settings">'.$text_6.'</div></div>';
    echo '  <div>'.$content_7.'<div class="grid_settings">'.$text_7.'</div></div>';
    echo '  <div>'.$content_8.'<div class="grid_settings">'.$text_8.'</div></div>';
    echo '  <div>'.$content_9.'<div class="grid_settings">'.$text_9.'</div></div>';
    echo '  <div>'.$content_10.'<div class="grid_settings">'.$text_10.'</div></div>';
    echo '  <div>'.$content_11.'<div class="grid_settings">'.$text_11.'</div></div>';
    echo '  <div>'.$content_12.'<div class="grid_settings">'.$text_12.'</div></div>';
    echo '  <div>'.$content_13.'<div class="grid_settings">'.$text_13.'</div></div>';
    echo '  <div>'.$content_14.'<div class="grid_settings">'.$text_14.'</div></div>';
    echo '  <div>'.$content_15.'<div class="grid_settings">'.$text_15.'</div></div>';
    echo '  <div>'.$content_16.'<div class="grid_settings">'.$text_16.'</div></div>';
    echo '  <div>'.$content_17.'<div class="grid_settings">'.$text_17.'</div></div>';
    echo '</section>';
    echo '</div>';
}