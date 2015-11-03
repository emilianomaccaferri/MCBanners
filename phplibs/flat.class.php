<?php

class FlatImage{

  public function createFlatImage($im, $title, $ip, $position){

    imagettftext ( $im, 12, 0, 190, 88, 0, '/home/macca/www/mcbanners.it/public_html/assets/imgcreation/fonts/roboto.ttf' , $ip);
    imagettftext ( $im, 12, 0, 190, 130, 0, '/home/macca/www/mcbanners.it/public_html/assets/imgcreation/fonts/roboto.ttf' , "Posizione: $position" );
    imagettftext ( $im, 12, 0, 210, 42, 0, '/home/macca/www/mcbanners.it/public_html/assets/imgcreation/fonts/roboto.ttf' , $title);
    imagepng($im);
                imagepng($im, $path);
    imagedestroy($im);

  }

}

?>
