<?php
function area_Calculator($type,$length,$width = null){
    $name='';
    $area='';
    switch($type){
        case $type=='r':
            if($width!=null){
                $name="Rectangle";
                $area=($length * $width);
            }
            else{
                echo "Please set the width value";
            }
            break;
            
        case $type=='s':
            $name="Square";
            $area=(3.1426 *($length * $length));
            break;
        case $type=='c':
            $name="circle";
            $area=($length *  $length);
            break;
        default:
           $name="invalid";
           $area="invalid";
           break;
    }
    if(!empty($name) and !empty($area)){
        echo "The area of {$type} is {$area}";

    }
}
area_Calculator('r',100);
?>