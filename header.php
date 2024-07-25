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

    $content_1 = '<img class="ls_logo" src="https://www.ls-farmers.de/wp-content/uploads/2022/03/fs22.png">';
    $text_1 = '';
    
    $content_2 = '<h2><i class="fa-solid fa-volume-high"></i></h2>';
    $text_2 = '';
    
    $content_3 = '<h2><i class="fa-solid fa-signal"></i></h2>';
    $text_3 = '';
    
    $content_4 = '<h2><i class="fa-solid fa-file-zipper"></i></h2>';
    $text_4 = $modsCount;
    
    $content_5 = '<h2><i class="fa-solid fa-clock icon_clock"></i></h2>';
    $text_5 = (int)$xml2->settings->timeScale[0]."x";
    
    $content_6 = '<h2><i class="fa-solid fa-tractor icon_tractor"></i></h2>';
    $text_6 = $vehicleCount;
    
    $content_7 = '<h2><i class="fa-solid fa-users"></i></h2>';
    $text_7 = $playerCount . " / " . $xml->Slots["capacity"];
    
    $content_8 = '<h2><i class="fa-solid fa-map"></i></h2>';
    $text_8 = $fieldCount;
    
    $content_9 = '<div class="site_title">Farming Simulator 22 Dedicated Server</div>';
    $text_9 = '';
    
    $content_10 = '';
    $text_10 = '';
    
    $content_11 = '';
    $text_11 = '';
    
    $content_12 = '';
    $text_12 = '';
    
    $content_13 = '';
    $text_13 = '';
    
    $content_14 = '';
    $text_14 = '';
    
    $content_15 = '';
    $text_15 = '';
    
    $content_16 = '';
    $text_16 = '';
    
    $content_17 = '<h2><i class="fa-solid fa-bars"></i></h2>';
    $text_17 = 'MENU';

   
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