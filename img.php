<?php
$img_array = glob("img/*.{gif,jpg,png}",GLOB_BRACE); 
$img = array_rand($img_array); 
$dz = $img_array[$img];
header("content-type: image/png");
echo file_get_contents($dz);