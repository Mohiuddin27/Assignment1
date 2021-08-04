<?php 
function colors($color,$txt){
    if ($color =='লাল'){
        $c='red';
    }
    else if($color=='সবুজ'){
        $c='green';
    }
    else if($color =='নিল'){
        $c='blue';
    }
    else if($color =='হলুদ'){
        $c='yellow';
    }
    else if($color =='বেগুনি'){
        $c='purple';
    }
    else if($color=='কাল'){
        $c='black';
    }
    else{
        echo "invalid";
    }
    echo "<h1 style=color:{$c}>$txt</h1>";
    
}
colors('হলুদ','This is simple text.It has been wriiten only test purpose');
colors('বেগুনি','This is simple text.It has been wriiten only test purpose');
 ?>