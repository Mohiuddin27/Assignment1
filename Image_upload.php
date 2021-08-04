<?php 
   function image($src,$alt,$width,$height){
       echo "<img src=\"{$src}\" alt=\"{$alt}\"  width=\"{$width}\"  height=\"{$height}\" >";
   }
   image('img.png','img',300,300);
?>
