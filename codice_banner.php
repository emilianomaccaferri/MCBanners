<html>

    <head>
    
        <title>MCBanners &bull; Crea il tuo banner!</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
    <div class="header"><div class="margin">MCBanners</div></div>
        <div class="center" style="margin-top: 30px; text-align: center;">
        
            Il tuo banner &egrave; stato creato!<br>
            Seleziona il codice qui sotto per incorporarlo in un forum o in un sito web!<br>
        </div>
            <div class="center" style="margin-top: 25px;">
            <?php
            $logovalue = $_GET['logo'];
            $bannervalue = $_GET['banner'];
            $id = $_GET['server_id'];
if (preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $_GET['server_id']) || array_key_exists("error", $data) || preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $logovalue) || preg_match('/[^abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-]/', $bannervalue) || empty($id)){
 die("ID del server invalido");
}
 echo "<img src='http://mcbanners.it/banner.php?server_id=$id&logo=$logovalue&banner=$bannervalue'>";
?><br><br>
                <div style="background-color: white; box-shadow: inset 0px 1px 4px #ECECEC; border-radius: 4px; width: 500px; font-size: 20px; margin: 0 auto; border: 1px solid grey;">
                    HTML<br>
                &lt;img src="http://mcbanners.it/banner.php?server_id=<?php echo $id;?>&logo=<?php echo $logovalue;?>&banner=<?php echo $bannervalue;?>"><br>
                    <hr>
                    BBCode<br>
                    [img]http://mcbanners.it/banner.php?server_id=<?php echo $id;?>&logo=<?php echo $logovalue;?>&banner=<?php echo $bannervalue;?>[/img]
                    
                </div>
               <p style="font-size: 15px;">Made with &hearts; by <a style="color: grey;" href="https://www.minecraft-italia.it/forum/u-generalapathy" target="_blank">GeneralApathy</a> & <a href="https://www.minecraft-italia.it/forum/u-yowsky" target="_blank" style="color: grey;">Yowsky</a></p>
            </div>
    </body>
</html>