<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, minimal-ui"/>
</head>
<body>

<?php
$stationid = htmlspecialchars($_POST["stationid"]);
$reason = htmlspecialchars($_POST["reason"]);
$comment = htmlspecialchars($_POST["comment"]);


function db_connect()
{
  // Zugangsdaten für die DB
  $dbhost = 'localhost';
  $dbuser = 'esfinder';
  $dbpass = 'esfinder2000';
  $dbname = 'esfinder';
  // Verbindung herstellen und Verbindungskennung zurück geben
  $conid = mysql_connect( $dbhost, $dbuser, $dbpass ) or die( 'Verbindungsfehler!' );
  if (is_resource( $conid ))
  {
    mysql_select_db( $dbname, $conid ) or die( 'Datenbankfehler!' );
  }
  return $conid;
}


// Datenbankverbindung öffnen
$conid = db_connect();

// Neues Datenbank-Objekt erzeugen
$db = @new mysqli( 'localhost', 'esfinder', 'esfinder2000', 'esfinder' );

// Pruefen ob die Datenbankverbindung hergestellt werden konnte
if (mysqli_connect_errno() == 0)
{
    /*
     * Hier wird Code ausgefuehrt, wenn die Datenbankverbindung
     * fehlerfrei hergestellt werden konnte.
     */

  // Eintragen speichern
  if (isset( $_POST['action'] ) AND $_POST['action'] == 'save')
  {
  
    $sql = 'INSERT INTO `diemo_feedback` (`stationid`, `reason`, `comment`) VALUES (?, ?, ?)';
    $eintrag = $db->prepare( $sql );
  
    // Variablen an die Anweisung binden
    $eintrag->bind_param( 'sss', $stationid, $reason, $comment);

    // Update ausfuehren
    $eintrag->execute();
    $eintrag->close();

    echo 'Feedback gespeichert';

  }   

}
else
{
    // Es konnte keine Datenbankverbindung aufgebaut werden
    echo 'Die Datenbank konnte nicht erreicht werden. Folgender Fehler trat auf: <span class="hinweis">' .mysqli_connect_errno(). ' : ' .mysqli_connect_error(). '</span>';
}

// Datenbankverbindung schliessen
$db->close();
?>

</body>
</html>