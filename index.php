<!DOCTYPE html>

<html>
<head>
  <title>MCBanners &bull; Crea il tuo banner!</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Noto+Sans:200' rel='stylesheet' type='text/css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script>
  $(function() {
$(".codice").click(function() {
var textcontent = $("#id").val();
if(textcontent=='')
{
alert("Inserisci l'id di un server!");
$("#id").focus();
}
else
{
$("#loading").show();
$("#loading").html('<p style="font-size: 1.2em; font-weight: bold; margin-top: 40px;">Il tuo banner sta per essere generato!<br><img src="9.gif"></p>');
$.ajax({
type: "GET",
url: "codice_banner.php",
data: dataString,
cache: true,
success: function(html){
$("#loading").hide();
}
});
}
return false;
});
});
</script>

</head>

<body>
  <span id="forkongithub"><a href="https://github.com/GeneralApathy/MCBanners">Fork me on GitHub</a></span>
  <div class="headerimg">
    <img src="../assets/header.png">
  </div>

    <div class="text">

      Benvenuto! Qui puoi iniziare a creare il tuo banner personalizzato per MC-ITA.<br>
            Questo tool sfrutta le API di Minecraft-Italia per creare banner vari stili, per un senso di modernit&agrave; al proprio server.<br>
            Inserisci qui sotto l'id del server (https://minecraft-italia.it/lista-server-italiani/<b>id</b>) e crea il tuo banner!<br>
            Puoi trovare il source su <a href="https://github.com/GeneralApathy/MCBanners/" target="_blank" style="text-shadow: 1px 2px 4px 1px; color: grey;">GitHub</a>
            <br>
            <div style="margin: 0 auto; text-align: center;">
            <form action="codice_banner.php" method="get">
            <br>
            ID<br>
            <input type="text" name="server_id" class="id" id="id" placeholder="Inserisci l'id del server"><br><br>
            Scegli il logo da applicare<br>
            <select name="logo" id="sel" class="sel">
                <option value="1">Piccone di diamante</option>
                <option value="2">Diamante</option>
                <option value="3">Spada di ferro</option>
            </select>
            <br><br>
            Scegli lo stile del banner<br>
            <select name="banner" id="sel" class="sel">
                <option value="1">Flat</option>
                <option value="2">Material Design</option>

            </select>

            <br><br>

            <button class="codice" type="submit">Ottieni codice banner</button>
        </form>

        <div id="select"></div>
               <p style="font-size: 15px;">Made with &hearts; by <a style="color: grey;" href="https://www.minecraft-italia.it/forum/u-generalapathy" target="_blank">GeneralApathy</a> & <a href="https://www.minecraft-italia.it/forum/u-yowsky" target="_blank" style="color: grey;">Yowsky</a></p><br><br>
                Vuoi aiutarci a sostenere le spese dell'host?
                <div class="center" style="text-align:center;">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZEMFAXBMYYN8Q">
<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal Ã¨ il metodo rapido e sicuro per pagare e farsi pagare online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

                </div>
              </div>



    </div>
  </body>
</html>
