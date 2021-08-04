<?php
 function boyos($age){
    if($age>=0 && $age<=4){
        echo "you are Baby";
    }
    else if($age>=5 && $age<=12){
        echo "you are Boy ";
    }
    else if($age>=13 && $age<=20){
        echo "you are Teenager";
    }
    else if($age>21 && $age<=40){
        echo "you are Young man";
    }
    else if($age>=41 && $age<=55){
        echo "you are  middle-aged";
    }
    else if($age>=56 && $age<=60){
        echo "you are an older middle-aged";
    }
    else{
        echo "You are old person";
    }
}
boyos(3);
?>