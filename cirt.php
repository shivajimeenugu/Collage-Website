<?php
$path = './path/temp.jpg';
$image = imagecreatefromjpeg($path);

$color = imagecolorallocate($image, 255, 0, 0);
$string = 'M SHIVADGKDGKJDJ GKJDGKJGD hhhhhh LLLL REDDY';
$string2 = 'COMPUTER ENGINEERING';
//$font = 6;
$font = imageloadfont('./path/Roboto/f1.gdf');
$x = 1159;
$y = 1400;

$x2= 1061;
$y2=1530;

// write on the image
imagestring($image, $font, $x, $y, $string, $color);
imagestring($image, $font, $x2, $y2, $string2, $color);
// save the image
//$i=imagepng($image,  $fileName = './path/img2.jpg', $quality = 100);
$i=imagepng($image,  $fileName = './path/img2.png');
if($i){
echo '<img width="800" height="800" src="./path/img2.png"></img>';
}


?>


