<?php

  require_once("globals.php");

?>
<!DOCTYPE html>
<link href="styles.css" rel="stylesheet">
<html>
  <head>
    <meta charset="UTF-8">
    <title>Perhekalenteri</title>
  </head>
  <body >
    <header>
      <h1>Perhekalenteri</h1>
    </header>
    <section>

      <form  action="kalenteri.php" method="GET" target="_blank">

        Vuosi: <input type="number" name="year" value="<?php echo date("Y"); ?>"><br>

        Kuukausi:
        <select class="kk" name="month">
        <?php
          foreach($months as $key => $value) {
            echo "<option value='$key'>$value</option>\n";
          }
        ?>
        </select><br>

        Otsikkofontti:
        <select class="of" name="header">
        <?php
          foreach($headerfonts as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select><br>

        Kuva:
        <select class="kuva" name="bgimage">
        <?php
          foreach ($bgimages as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select><br>

       
                Perheenjäsenet:<br>
        <textarea name="names" rows="5"><?= $defaultnames ?></textarea><br>
        <input class="nappi" type="submit" value="Avaa kalenterisivu">

      </form>
    </section>
    <footer>
      <hr>
      <div>perhekalenteri by Maria</div>
    </footer>
  </body>
</html>
