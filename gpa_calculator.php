<?php 
function result($sub,$marks){
    if($marks>=0 && $marks<=32){
        $gpa=0;
        $grade='F';
    }
    else if($marks>=33 && $marks<=39){
        $gpa=1;
        $grade='D';
    }
    else if($marks>=40 && $marks<=49){
        $gpa=2;
        $grade='C';
    }
    else if($marks>=50 && $marks<=59){
        $gpa=3;
        $grade='B';
    }
    else if($marks>=60 && $marks<=69){
        $gpa=3.50;
        $grade='A-';
    }
    else if($marks>=70 && $marks<=79){
        $gpa=4;
        $grade='A';
    }
    else if($marks>=80 && $marks<=100){
        $gpa=5;
        $grade='A+';
    }
    else{
        $gpa='invalid';
        $grade='invalid';
    }

    echo "subject:{$sub}. Gpa:{$gpa} and Grade:{$grade}<br>";

}
result('Bangla',80);

result('English',34);
?>