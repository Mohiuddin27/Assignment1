<?php  
function taka_convert($taka,$currency){
    if($currency=='us_dollar'){
        $dollar= number_format((float)$taka/84.77,2,'.','');
        
        echo "Bangladeshi taka :{$taka} :Dollar :$ {$dollar} ";
    }
    else if($currency=='canadian_dollar'){
        $dollar=number_format((float)$taka/66.36,2,'.','');
        echo "Bangladeshi taka :{$taka} :canadian dollar: $ {$dollar}";

    }
    else if($currency=='pound'){
        $pound=number_format((float)$taka/116.19,2,'.','');
        echo "Bangladeshi taka :{$taka} : pound :£{$pound}";
    }
    else{
        echo "invalid";
    }
}
taka_convert(500,'pound');
?>