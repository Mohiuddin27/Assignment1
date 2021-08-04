<?php 
function age_calculator($year){
    $current_year=date('Y');
    $boyos=$current_year-$year;
    echo "You are  {$boyos}  years old";
}
age_calculator(1996);
?>