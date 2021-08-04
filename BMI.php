<?php  
function BMI($weight_in_pounds,$height_in_inchs){
    $bmi=number_format((float)(($weight_in_pounds/($height_in_inchs*$height_in_inchs))*703),2,'.','');
    if($bmi<18.5){
        $status='Underweight';
    }
    else if($bmi>=18.5 && $bmi<=24.9){
        $status='Normal weight';
    }
    else if($bmi>=25 && $bmi<=29.9){
        $status='Overweight';
    }
    else{
        $status='Obesity';
    }

   
    echo "your BMI is {$bmi}. you have {$status} ";
}
BMI(96.667,63);

?>
