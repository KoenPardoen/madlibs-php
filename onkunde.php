<?php
if (isset($_POST['word1_1'])) {
$word1_1=$_POST['word1_1'];
$word1_2=$_POST['word1_2'];
$word1_3=$_POST['word1_3'];
$word1_4=$_POST['word1_4'];
$word1_5=$_POST['word1_5'];
$word1_6=$_POST['word1_6'];
$word1_7=$_POST['word1_7'];
$content = '
<p>Er zijn veel mensen die niet kunnen'.$word1_1.'. Neem nou '.$word1_2.'. Zelf met de hulp
van een '.$word1_4.' of zelfs '.$word1_3.' kan '.$word1_2.' niet '.$word1_1.'. Dat heeft niet te maken met
een gebrek aan '.$word1_5.', maar met een te veel aan prefectionisme. Te veel '.$word1_6.'
leidt tot '.$word1_7.' en dat is niet goed als je wilt '.$word1_1.'. Helaas voor '.$word1_2.'.
</p>
<button type="button"><a href="index.php">Refresh</a></button>';
}
else {
  $content = '
  <form method="post">
    <label>Wat zou je graag willen kunnen?</label> <input type="text" name="word1_1" required><br>
    <label>Met welke persoon kan je goed opschieten?</label> <input type="text" name="word1_2" required><br>
    <label>Wat is je favoriete getal?</label> <input type="text" name="word1_3" required><br>
    <label>Wat heb je altijd bij je als je op vakantie gaat?</label> <input type="text" name="word1_4" required><br>
    <label>Wat is je beste persoonlijke eigenschap?</label> <input type="text" name="word1_5" required><br>
    <label>Wat is je slechtste persoonlijke eigenschap?</label> <input type="text" name="word1_6" required><br>
    <label>Wat is het ergste dat je kan overkomen?</label> <input type="text" name="word1_7" required><br>
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
      <h2>Onkunde</h2>
      <?php
       echo $content;
      ?>
    </div>
    <footer><p>Deze website is gemaakt door Koen Pardoen.</p></footer>


  </body>
</html>
