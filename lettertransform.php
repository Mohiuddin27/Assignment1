<?php
function sobhat($txt,$type){
    if($type=='c'){
        $hat='uppercase';
        echo "<span style=\"text-transform:{$hat}\">{$txt}</span><br>";
    }
    else if($type=='s'){
        $hat='lowercase';
        echo "<span style=\"text-transform:{$hat}\">{$txt}</span><br>";
    }
    else if($type=='cs'){
        $hat='uppercase';
        $hats='lowercase';
        echo "<span style=\"text-transform:{$hat}\">{$txt}</span><br>";
        echo "<span style=\"text-transform:{$hats}\">{$txt}</span><br>";
    }
    
}
$text="MY NAME is mohiuddin";
sobhat($text,'cs');
?>
