<?php
 function reverse($txt){
    for ($i=strlen($txt)-1;$i>=0;$i--){
        echo $txt[$i];
    }
}
reverse('1234567890');
 ?>