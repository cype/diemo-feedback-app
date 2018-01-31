<?php
  $stationid = htmlspecialchars($_GET["stationid"]);

  $PlugSmallPaddle = htmlspecialchars($_GET["PlugSmallPaddle"]);
  $PlugLargePaddle = htmlspecialchars($_GET["PlugLargePaddle"]);
  $PlugAVCON = htmlspecialchars($_GET["PlugAVCON"]);
  $PlugTesla = htmlspecialchars($_GET["PlugTesla"]);
  $PlugNema = htmlspecialchars($_GET["PlugNema"]);
  $PlugTypeE = htmlspecialchars($_GET["PlugTypeE"]);
  $PlugTypeF = htmlspecialchars($_GET["PlugTypeF"]);
  $PlugTypeG = htmlspecialchars($_GET["PlugTypeG"]);
  $PlugTypeJ = htmlspecialchars($_GET["PlugTypeJ"]);
  $PlugType1 = htmlspecialchars($_GET["PlugType1"]);
  $PlugType2Outlet = htmlspecialchars($_GET["PlugType2Outlet"]);
  $PlugType2Connector = htmlspecialchars($_GET["PlugType2Connector"]);
  $PlugType3 = htmlspecialchars($_GET["PlugType3"]);
  $PlugIECSingle = htmlspecialchars($_GET["PlugIECSingle"]);
  $PlugIECThree = htmlspecialchars($_GET["PlugIECThree"]);
  $PlugCCS2 = htmlspecialchars($_GET["PlugCCS2"]);
  $PlugCCS1 = htmlspecialchars($_GET["PlugCCS1"]);
  $PlugCHAdeMO = htmlspecialchars($_GET["PlugCHAdeMO"]);
  $PlugUnspecified = htmlspecialchars($_GET["PlugUnspecified"]);

  $AuthenticationModeNFCClassic = htmlspecialchars($_GET["AuthenticationModeNFCClassic"]);
  $AuthenticationModeNFCDESFire = htmlspecialchars($_GET["AuthenticationModeNFCDESFire"]);
  $AuthenticationModePnC = htmlspecialchars($_GET["AuthenticationModePnC"]);
  $AuthenticationModeRemote = htmlspecialchars($_GET["AuthenticationModeRemote"]);
  $AuthenticationModeDirect = htmlspecialchars($_GET["AuthenticationModeDirect"]);

  $AccessibilityPublic = htmlspecialchars($_GET["AccessibilityPublic"]);
  $AccessibilityRestriced = htmlspecialchars($_GET["AccessibilityRestriced"]);
  $AccessibilityPaying = htmlspecialchars($_GET["AccessibilityPaying"]);
  $AccessibilityUnspecified = htmlspecialchars($_GET["AccessibilityUnspecified"]);

  $AddressCity = htmlspecialchars($_GET["AddressCity"]);
  $AddressPostalCode = htmlspecialchars($_GET["AddressPostalCode"]);
  $AddressStreet = htmlspecialchars($_GET["AddressStreet"]);
  $AddressHouseNum = htmlspecialchars($_GET["AddressHouseNum"]);
  $AddressCountry = htmlspecialchars($_GET["AddressCountry"]);


  $HotlinePhoneNum = htmlspecialchars($_GET["HotlinePhoneNum"]);
  $IsOpen24Hours = htmlspecialchars($_GET["IsOpen24Hours"]);
  $IsHubjectCompatible = htmlspecialchars($_GET["IsHubjectCompatible"]);
  $DynamicInfoAvailable = htmlspecialchars($_GET["DynamicInfoAvailable"]);

  $plug_string = "";
  $auth_string = "";
  $acc_string = "";

  if($PlugSmallPaddle == "True") { $plug_string = $plug_string . "Small Paddle Inductive"; }
  if($PlugLargePaddle == "True") { $plug_string = $plug_string . " / Large Paddle Inductive"; }
  if($PlugAVCON == "True") { $plug_string = $plug_string . " / AVCON Connector"; }
  if($PlugTesla == "True") { $plug_string = $plug_string . " / Tesla Connector"; }
  if($PlugNema == "True") { $plug_string = $plug_string . " / NEMA 5-20"; }
  if($PlugTypeE == "True") { $plug_string = $plug_string . " / Type E French Standard"; }
  if($PlugTypeF == "True") { $plug_string = $plug_string . " / Type F Schuko"; }
  if($PlugTypeG == "True") { $plug_string = $plug_string . " / Type G British Standard"; }
  if($PlugTypeJ == "True") { $plug_string = $plug_string . " / Type J Swiss Standard"; }
  if($PlugType1 == "True") { $plug_string = $plug_string . " / Type 1 Connector (Cable Attached)"; }
  if($PlugType2Outlet == "True") { $plug_string = $plug_string . " / Type 2 Outlet"; }
  if($PlugType2Connector == "True") { $plug_string = $plug_string . " / Type 2 Connector (Cable Attached)"; }
  if($PlugType3 == "True") { $plug_string = $plug_string . " / Type 3 Outlet"; }
  if($PlugIECSingle == "True") { $plug_string = $plug_string . " / IEC 60309 Single Phase"; }
  if($PlugIECThree == "True") { $plug_string = $plug_string . " / IEC 60309 Three Phase"; }
  if($PlugCCS2 == "True") { $plug_string = $plug_string . " / CCS Combo 2 Plug (Cable Attached)"; }
  if($PlugCCS1 == "True") { $plug_string = $plug_string . " / CCS Combo 1 Plug (Cable Attached)"; }
  if($PlugCHAdeMO == "True") { $plug_string = $plug_string . " / CHAdeMO"; }
  if($PlugUnspecified == "True") { $plug_string = $plug_string . " / Unspecified"; }

  if($AuthenticationModeNFCClassic == "True") { $auth_string = $auth_string . "NFC RFID Classic"; }
  if($AuthenticationModeNFCDESFire == "True") { $auth_string = $auth_string . " / NFC RFID DESFire"; }
  if($AuthenticationModePnC == "True") { $auth_string = $auth_string . " / PnC"; }
  if($AuthenticationModeRemote == "True") { $auth_string = $auth_string . " / REMOTE"; }
  if($AuthenticationModeDirect == "True") { $auth_string = $auth_string . " / Direct Payment"; }

  if($AccessibilityPublic == "True") { $acc_string = $acc_string . " / Free publicly accessible"; }
  if($AccessibilityRestriced == "True") { $acc_string = $acc_string . " / Restricted access"; }
  if($AccessibilityPaying == "True") { $acc_string = $acc_string . " / Paying publicly accessible"; }
  if($AccessibilityUnspecified == "True") { $acc_string = $acc_string . " / Paying publicly accessible"; }  

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, minimal-ui"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="application-name" content="sonnendach"/>
    
    <!-- Application icons -->
    <meta name="msapplication-TileImage" content="images/touch-icon-bund-144x144.png"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-square70x70logo" content="images/touch-icon-bund-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="images/touch-icon-bund-150x150.png"/>
    <meta name="msapplication-square310x310logo" content="images/touch-icon-bund-310x310.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="images/touch-icon-bund-76x76.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="images/touch-icon-bund-120x120.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="images/touch-icon-bund-152x152.png"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <meta name="description" content="Der Windatlas Schweiz gibt Auskunft über Jahresmittel der modellierten Windgeschwindigkeit und Windrichtung auf fünf Höhenstufen über Grund: 50, 75, 100, 125 oder 150m.">
    <meta name="keywords" content="Windatlas, Windatlas Schweiz, Windgeschwindigkeit, Windrichtung, Windrose, Weibull, Weibullverteilung, Windatlas Switzerland, Energy, Geoinformation, Map, Karte, Erneuerbare Energie, Windenergie, Windenergy, renewable energy, BFE, GIS, Geodata">
    <meta name="news_keywords" content="Windatlas, Windatlas Schweiz, Windgeschwindigkeit, Windrichtung, Windrose, Weibull, Weibullverteilung, Windatlas Switzerland, Energy, Geoinformation, Map, Karte, Erneuerbare Energie, Windenergie, Windenergy, renewable energy, BFE, GIS, Geodata">
    <meta name="author" content="Bundesamt für Energie BFE">

    <meta property="og:site_name" content="Windatlas Schweiz">
    <meta property="og:title" content="Der Windatlas Schweiz gibt Auskunft über Jahresmittel der modellierten Windgeschwindigkeit und Windrichtung auf fünf Höhenstufen über Grund: 50, 75, 100, 125 oder 150m.">
    <meta property="og:description" content="Der Windatlas Schweiz gibt Auskunft über Jahresmittel der modellierten Windgeschwindigkeit und Windrichtung auf fünf Höhenstufen über Grund: 50, 75, 100, 125 oder 150m.">
    <meta property="og:type" content="WebApplication">
    <meta property="og:url" content="http://www.windatlas.ch">
    <meta property="og:image" content="http://www.bfe-gis.admin.ch/storymaps/EE_Windatlas/images/appSonnendachCH.png">
    <meta property="og:locale" content="de_CH" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@EnergieSchweiz">
		<meta name="twitter:creator" content="@EnergieSchweiz">
    <meta name="twitter:title" content="Windatlas.ch">
    <meta name="twitter:description" content="Der Windatlas Schweiz gibt Auskunft über Jahresmittel der modellierten Windgeschwindigkeit und Windrichtung auf fünf Höhenstufen über Grund: 50, 75, 100, 125 oder 150m.">
    <meta name="twitter:image" content="http://www.bfe-gis.admin.ch/storymaps/EE_Windatlas/images/appSonnendachCH.png">
    <meta name="twitter:url" content="http://www.windatlas.ch">


    <!-- CSS -->
    
    <link rel="stylesheet" href="assets/css/tooltip.css"/>
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link rel="stylesheet" href="assets/css/map.css"/>



	</head>

	<body>
	  
    <!-- Hidden links to navigate smoothly in the page using scrolly plugin -->
    <div style="display: none;">
      <a id="goToEig" href="#eig" class="scrolly"></a>
      <a id="goToHeader" href="#header" class="scrolly"></a>
      <a id="goToOne" href="#one" class="scrolly"></a>
      <a id="goToTwo" href="#two" class="scrolly"></a>
      <a id="goToThree" href="#three" class="scrolly"></a>
      <a id="goToFour" href="#four" class="scrolly"></a>
      <a id="goToFive" href="#five" class="scrolly"></a>
      <a id="goToSix" href="#six" class="scrolly"></a>
      <a id="goToSeven" href="#seven" class="scrolly"></a>
      <a id="goToEight" href="#eight" class="scrolly"></a>
      <a id="goToNine" href="#nine" class="scrolly"></a>
      <a id="goToTen" href="#ten" class="scrolly"></a>
      <a id="goToEleven" href="#eleven" class="scrolly"></a>
    </div>

	  <!-- eid -->
    <section id="eig" class="main style1 special" style="padding: 0 !important">
      <div class="container">
        <div class="100%">
          <div class="logo"></div>
          <div class="amts">
            <div class="amt trn">bfe</div>
            <div class="amt-abbr">
              <span class="trn">bfeAbbr</span>
            </div>
          </div>
          <div id="lang">
            <a href="?lang=de" class="langde">D</a>|<a href="?lang=fr" class="langfr">F</a>|<a href="?lang=it" class="langfr">I</a>|<a href="?lang=en" class="langfr">E</a>
          </div>
        </div>
      </div>
    </section>	
	
	  <!-- red -->
    <section id="red" style="background-color: red; height: 5px; line-height: 5px;">
      <div class="container">
        <div class="row 150%">
          <div class="12u 12u$(medium)">
          </div>
        </div>
      </div>
    </section>

    <!-- One: Graph -->
      <section id="one" class="main style1 special" style="padding-bottom: 0px;">
        <div class="container">
          <header class="major" id="titelHeader">
            <h2><span class="trn">storymapTitel</span></h2>
          </header>
          <!--<p style="padding-bottom: 0px;"><span class="trn">storymapText</span></p>-->
        </div>
      </section>

    <!-- Two: Map -->
      <section id="two" class="main style1 special" style="padding-top: 0px; padding-bottom: 0px;">

        <!--
              <ul class="buttons vertical">
                <a href="#main" class="button fit scrolly" onclick="getLocation()">Lokalisier mich!</a>
              </ul> 
            
              <p>&nbsp;</p>
        -->
          <p><strong>ID:</strong> <?php echo $stationid; ?></p>
          <p><strong>Adresse:</strong> <?php echo $AddressStreet . " " . $AddressHouseNum . " " . $AddressPostalCode . " " . $AddressCity . " " . $AddressCountry; ?></p>
          <p><strong>Plugs:</strong> <?php echo $plug_string; ?></p>
          <p><strong>Authentication:</strong> <?php echo $auth_string; ?></p>
          <p><strong>Accessibility:</strong> <?php echo $acc_string; ?></p>

          <p><strong>HotlinePhoneNum:</strong> <?php echo $HotlinePhoneNum; ?></p>
          <p><strong>IsOpen24Hours:</strong> <?php echo $IsOpen24Hours; ?></p>
          <p><strong>IsHubjectCompatible:</strong> <?php echo $IsHubjectCompatible; ?></p>
          <p><strong>DynamicInfoAvailable:</strong> <?php echo $DynamicInfoAvailable; ?></p>

          <br>

<!--
          <iframe id="mymap" src='https://mf-geoadmin3.int.bgdi.ch/teo_diemo/embed.html?lang=de&topic=ech&bgLayer=ch.swisstopo.pixelkarte-grau&layers=ch.swisstopo.zeitreihen,ch.bfs.gebaeude_wohnungs_register,ch.bav.haltestellen-oev,ch.swisstopo.swisstlm3d-wanderwege,ch.bfe.ladestellen-elektromobilitaet&layers_visibility=false,false,false,false,true&layers_timestamp=18641231,,,,&E=2612957.94&N=1226989.91&zoom=1' width='100%' height='300' frameborder='0' style='border:0'></iframe>
        -->

      </section>

    <!-- Four: Input -->
      <section id="four" class="main style1 special">
        <div class="container">
          <div class="row 150%">
            <div class="12u 12u$(medium)">
              <div>


                <form action="save_feedback.php" method="POST">
                <strong><span class="trn">Meldung</span></strong>
                <select name="reason">
                  <option>*** Bitte auswählen ***</option>
                  <option>Ortsangabe stimmt nicht</option>
                  <option>Steckerinformation stimmt nicht</option>
                  <option>Öffnungszeiten stimmen nicht</option>
                  <option>Bezahlungsinformationen stimmen nicht</option>
                  <option>Zugänglichkeitsinformationen stimmen nicht</option>
                  <option>Anderes</option>
                </select>
                <p>
                <strong><span class="trn">Bemerkung</span></strong>
                <textarea name="comment" type="text"></textarea>
                <p>
                <input type="hidden" name="action" value="save">
                <input type="hidden" name="stationid" value="<?php echo $stationid; ?>">
                <input type="submit" value="Senden">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

		<!-- Footer -->
    <section id="footer">
      <ul class="copyright">
        <li><span class="trn">copyrightMain</span></li>
        <li>v 0.1</li>
        <li><span class="trn">contact</span></li>
      </ul>
    </section>

		<!-- Scripts -->

    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/jquery.xdomainrequest.1.0.2.min.js"></script>
    <script src="assets/js/jquery.placeholder.2.0.7.min.js"></script>
    <!-- <script src="assets/js/typeahead.bundle.0.11.1.js"></script> -->
    <script src='assets/js/typeahead.bundle.0.10.4.js'></script>
    <script src="assets/js/jquery.translate.0.9.1.js"></script>
	  <script src="assets/js/jquery.scrolly.min.js"></script>

		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
    <script src="assets/js/translations.js"></script>
    <script src="assets/js/permalink.js"></script>
    <script src="assets/js/init.js"></script>
    <script src="assets/js/wgs84_ch1903.js"></script>
    <!-- <script src="assets/js/map.js"></script> -->

    <script>

      $(document).ready(function() {
        init(false);
      });

    </script>    

      <script>

var result = document.getElementById("result");
var resulttitel = document.getElementById("resulttitel");
var restquery = '';
var restqueryNoES = '';
var xCoord = '';
var yCoord = '';

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
      resulttitel.innerHTML = "Ooops!";
        result.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {

    xCoord = Math.round(WGStoCHx(position.coords.latitude, position.coords.longitude));
    yCoord = Math.round(WGStoCHy(position.coords.latitude, position.coords.longitude));

    console.log(xCoord + "," + yCoord);

document.getElementById("mymap").src = 'https://mf-geoadmin3.int.bgdi.ch/teo_diemo/embed.html?lang=de&topic=ech&bgLayer=ch.swisstopo.pixelkarte-grau&layers=ch.bfe.ladestellen-elektromobilitaet&layers_visibility=true&E=' + yCoord + ' &N=' + xCoord + '&zoom=7';

} //end showPosition

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            document.getElementById("resulttitel").innerHTML = "Ooops!";
            document.getElementById("result").innerHTML = "Leider k&ouml;nnen wir dich nicht lokalisieren. Dein Browser meldet: User denied the request for Geolocation.<br><br>Eine Karte mit allen Energiest&auml;dten findest du <a target='_blank' href='http://www.bfe.admin.ch/geoinformation/05061/06358/06367/index.html?lang=de'>hier</a>."
            break;
        case error.POSITION_UNAVAILABLE:
            document.getElementById("resulttitel").innerHTML = "Ooops!";
            document.getElementById("result").innerHTML = "Leider k&ouml;nnen wir dich nicht lokalisieren. Dein Browser meldet: Location information is unavailable.<br><br>Eine Karte mit allen Energiest&auml;dten findest du <a target='_blank' href='http://www.bfe.admin.ch/geoinformation/05061/06358/06367/index.html?lang=de'>hier</a>."
            break;
        case error.TIMEOUT:
            document.getElementById("resulttitel").innerHTML = "Ooops!";
            document.getElementById("result").innerHTML = "Leider k&ouml;nnen wir dich nicht lokalisieren. Dein Browser meldet: The request to get user location timed out.<br><br>Eine Karte mit allen Energiest&auml;dten findest du <a target='_blank' href='http://www.bfe.admin.ch/geoinformation/05061/06358/06367/index.html?lang=de'>hier</a>."
            break;
        case error.UNKNOWN_ERROR:
            document.getElementById("resulttitel").innerHTML = "Ooops!";
            document.getElementById("result").innerHTML = "Leider k&ouml;nnen wir dich nicht lokalisieren. Dein Browser meldet: An unknown error occurred.<br><br>Eine Karte mit allen Energiest&auml;dten findest du <a target='_blank' href='http://www.bfe.admin.ch/geoinformation/05061/06358/06367/index.html?lang=de'>hier</a>."
            break;
    }
}
  </script>

	</body>
</html>
