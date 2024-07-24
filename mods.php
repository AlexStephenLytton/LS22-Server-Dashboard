<?php

function mods($icon,$title)
{
    $xml = $GLOBALS["xml"];
    $count = 1;
    echo '<div class="module_title"><h2><p style="display:inline-block;"><i class="'.$icon.'"></i>  '.$title.'</p></h2></div>';    
    echo '<div class="module_content">';    
    echo '<table border="0" cellspacing="7">';
    echo '<tr><th align="left">#</th><th align="left">Mod Name</th><th align="left">Mod Version</th></tr>';
    foreach ($xml->Mods->Mod as $mod) {
        echo "<tr><td>#".$count."</td><td>". $mod ."</td><td>". $mod["version"] ."</td></tr>";
        $count = $count + 1;
    }
    echo "</table></div>";
}