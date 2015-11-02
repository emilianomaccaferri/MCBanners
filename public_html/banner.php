<?php
ini_set('display_errors', 1);

$logovalue = $_GET['logo'];
$bannervalue = $_GET['banner'];
$url = "https://api.minecraft-italia.it/server-info/" . $_GET['server_id'];

require('phplibs/infos.class.php');
require('phplibs/flat.class.php');
require('phplibs/material.class.php');

$flat = new FlatImage();
$material = new MaterialImage();
$getInfos = new getInfos();

$getInfos->serverInfos($url);

$data = json_decode($getInfos->serverInfos($url), true);
$title = $data['title'];
$ip = $data['address'];
$position = $data['position'];

if (preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $_GET['server_id']) ||
array_key_exists("error", $data) ||
preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $logovalue) ||
preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $bannervalue)){
die("ID del server invalido");
}


$path = "cache/".$_GET['server_id']."-cached-".$logovalue."-".$bannervalue.".png";
$timeout = 180;
if($logovalue === '1' && $bannervalue === '2'){
    header("Content-type: image/png");
    if(file_exists($path)){
        readfile($path);
        if(time() - filectime($path) >= $timeout){
            unlink($path);
        }
    }else{
    header("Content-type: image/png");
$im     = imagecreatefrompng("assets/imgcreation/material/pickaxe.png");

  $material->createMaterialImage($im, $title, $ip, $position);

}
}
if($logovalue === '2' && $bannervalue === '2'){

    if(file_exists($path)){
        header("Content-type: image/png");
        readfile($path);
        if(time() - filectime($path) >= $timeout){
            unlink($path);
        }
    }else{
    header("Content-type: image/png");
$im     = imagecreatefrompng("assets/imgcreation/material/diamond.png");
    $material->createMaterialImage($im, $title, $ip, $position);
}
}
if($logovalue === '3' && $bannervalue === '2'){
        if(file_exists($path)){
            header("Content-type: image/png");
        readfile($path);
        if(time() - filectime($path) >= $timeout){
            unlink($path);
        }
    }else{
    header("Content-type: image/png");
$im     = imagecreatefrompng("assets/imgcreation/material/ironsword.png");
    $material->createMaterialImage($im, $title, $ip, $position);
}
}
if($logovalue === '1' && $bannervalue === '1'){
            if(file_exists($path)){
                header("Content-type: image/png");
        readfile($path);
        if(time() - filectime($path) >= $timeout){
            unlink($path);
        }
    }else{
    header("Content-type: image/png");
$im  = imagecreatefrompng("assets/imgcreation/flat/pickaxe.png");
      $flat->createFlatImage($im, $title, $ip, $position);
            }
}
if($logovalue === '2' && $bannervalue === '1'){
            if(file_exists($path)){
                header("Content-type: image/png");
        readfile($path);
        if(time() - filectime($path) >= $timeout){
            unlink($path);
        }
    }else{
    header("Content-type: image/png");
$im     = imagecreatefrompng("assets/imgcreation/flat/diamond.png");
    $flat->createFlatImage($im, $title, $ip, $position);

  }
}
?>
