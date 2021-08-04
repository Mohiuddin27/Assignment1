<?php  
function heading($tag,$txt,$align,$color,$ff,$size){
    echo "<$tag style=\" text-align:{$align};color:{$color};font-family:{$ff};font-size:{$size};\">{$txt}</$tag>";
    
}
heading('h1',"This is md mohiuddin",'center','red','subway','20px');

?>