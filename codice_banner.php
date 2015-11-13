<!DOCTYPE html>
<html>

    <head>

        <title>MCBanners &bull; Banner creato!</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <style>
        body{
          animation: 2s fadeint ease-in-out;
          -o-animation: 2s fadeint ease-in-out;
          -ms-animation: 2s fadeint ease-in-out;
          -webkit-animation: 2s fadeint ease-in-out;
          -moz-animation: 2s fadeint ease-in-out;
        }
        </style>
    </head>

    <body>
      <a href="index.php" style="text-decoration: none;"><div class="home"><div class="hometext">Torna alla home</div></div></a>
      <div class="text" style="text-align: center; margin-top: 100px;">
          <?php
          require('phplibs/infos.class.php');
          $getInfos = new getInfos();
          $logovalue = $_GET['logo'];
          $bannervalue = $_GET['banner'];
          $id = $_GET['server_id'];
          $url = "https://api.minecraft-italia.it/server-info/$id";

          $infos = json_decode($getInfos->serverInfos($url), true);
if (preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $_GET['server_id']) || array_key_exists("error", $data) || preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $logovalue) || preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $bannervalue) || empty($id)){
die("ID del server invalido");
}
if($logovalue>3 || $bannervalue>2){

  die("Stile o banner non disponibile.");

}
if(array_key_exists("error", $infos)){

  die("Il server che hai inserito non esiste.");

}

if($bannervalue === "" || $logovalue === ""){

  die("Richiesta invalida.");

}
            echo "Il tuo banner &egrave; stato creato!<br>
            Seleziona il codice qui sotto per incorporarlo in un forum o in un sito web!<br>
            <br>
            <b>Non vedi il banner?</b><br>
              Il problema pu&ograve; essere causato da un'estensione che blocca gli annunci.<br>
              Aggiungi alle eccezioni il nostro sito, puoi stare tranquillo, non ci sar&agrave; mai traccia di annunci qui.";
            ?>

            <div class="center" style="margin-top: 25px;">
            <?php
 echo "<img src='http://mcbanners.it/banner.php?server_id=$id&logo=$logovalue&banner=$bannervalue'>";
?><br><br>
                <div class="codicebanner">
                    HTML<br>
                &lt;img src="http://mcbanners.it/banner.php?server_id=<?php echo $id;?>&logo=<?php echo $logovalue;?>&banner=<?php echo $bannervalue;?>"><br>
                    <hr>
                    BBCode<br>
                    [img]http://mcbanners.it/banner.php?server_id=<?php echo $id;?>&logo=<?php echo $logovalue;?>&banner=<?php echo $bannervalue;?>[/img]

                </div>
               <p style="font-size: 15px;">Made with &hearts; by <a style="color: grey;" href="https://www.minecraft-italia.it/forum/u-generalapathy" target="_blank">GeneralApathy</a> & <a href="https://www.minecraft-italia.it/forum/u-yowsky" target="_blank" style="color: grey;">Yowsky</a></p>
            </div>
            </div>
    </body>
</html>
