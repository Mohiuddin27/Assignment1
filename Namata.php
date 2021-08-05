<?php  
for($i=2;$i<=9;$i++){
    if($i<=10){
        echo " multiplication number={$i}<br>";
         
    }
    for($m=1;$m<=10;$m++){
        echo "{$i} x {$m}= ".($i *$m)."<br>";
    }

}
?>