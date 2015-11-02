<?php

class MaterialImage{

  public function createMaterialImage($im, $title, $ip, $position){

    imagettftext ( $im, 12, 0, 145, 31, 0, '/home/dirtmc/www/mcbanners.it/public_html/assets/imgcreation/fonts/roboto.ttf' , $title);
    imagettftext ( $im, 12, 0, 145, 71, 0, '/home/dirtmc/www/mcbanners.it/public_html/assets/imgcreation/fonts/roboto.ttf' , $ip);
    imagettftext ( $im, 12, 0, 145, 120, 0, '/home/dirtmc/www/mcbanners.it/public_html/assets/imgcreation/fonts/roboto.ttf' , "Posizione: $position");
    imagepng($im);
    imagepng($im, $path);
    imagedestroy($im);

  }

}

?>
