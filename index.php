<?php
if (isset($_POST['word0_1'])) {
$word0_1=$_POST['word0_1'];
$word0_2=$_POST['word0_2'];
$word0_3=$_POST['word0_3'];
$word0_4=$_POST['word0_4'];
$word0_5=$_POST['word0_5'];
$word0_6=$_POST['word0_6'];
$word0_7=$_POST['word0_7'];
$word0_8=$_POST['word0_8'];
$content = '
<p> er heerst paniek in koninkrijk '.$word0_1.'. koning '.$word0_6.' is ten einde raad en als koning '.$word0_6.' ten einde raadis, dan roept hij zijn ten-einde-raadsheer '.$word0_2.'.</p>
<p>"'.$word0_2.'! het is een ramp! Het is ene schande!"</p>
<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
<p>"Mijn '.$word0_1.'is verdwenen! Zo maar, zonder waarschuwing. En ik had net'.$word0_5.' voor hem Gekocht"</p>
<p>"Majesteit, uw '.$word0_1.'komt vast vanzelf weer terug?"</p>
<p>"ja da\'s leuk en aardig, maar hoe moet ik in de tussentijd '.$word0_8.' leren"</p>
<p>"Maar Sire, daar kunt u toch uw '.$word0_7.' voor gebruiken"</p>
<p>"'.$word0_2.', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
<p>"'.$word0_4.',Sire"</p>
<button type="button"><a href="index.php">Refresh</a></button>';
}
else {
  $content = '
  <form method="post">
    <label>Welk dier zou jij nooit als je huisdier willen hebben?</label> <input type="text" name="word0_1" required><br>
    <label>Wie is de belangerijkste persoon in je leven?</label> <input type="text" name="word0_2" required><br>
    <label>In welk land zou je graag willen wonen?</label> <input type="text" name="word0_3" required><br>
    <label>Wat doe je als jij je verveelt?</label> <input type="text" name="word0_4" required><br>
    <label>Met welk speelgoed speelde je als kind het meest?</label> <input type="text" name="word0_5" required><br>
    <label>Bij welke docent spijbel je het liefst?</label> <input type="text" name="word0_6" required><br>
    <label>Als je €100.000 had, wat zou je dan doen?</label> <input type="text" name="word0_7" required><br>
    <label>Wat is je favoriete bezigheid?</label> <input type="text" name="word0_8" required><br>
    <input type="submit">
  </form>
  ';
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Madlibs</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Risque" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>Mad Libs</h1>
    </header>
    <nav>
      <a href="index.php"><span>Er heerst paniek...</span></a>
      <a href="onkunde.php"><span>Onkunde</span></a>
    </nav>
    <div class="content">
      <h2>Er heerst paniek...</h2>
      <?php
       echo $content;
      ?>
    </div>
    <footer><p>Deze website is gemaakt door Koen Pardoen.</p></footer>
  </body>
</html>
