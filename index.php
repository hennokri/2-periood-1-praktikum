<!DOCTYPE HTML>
<html>
<head>
  <title>II periood I praktikum</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
  <h1>Esimene leht</h1>
    <?php
      $link_file = "second_page.php";
      $age = 25;
	  $name = 'kristi';
    ?>
   
   <a href="<?php echo "{$link_file}?age={$age}"; ?>">Teisele lehele</a><br>
    <?php 
      print_r($_GET); echo "<br>";
      echo $_GET["name"];
      $jada = array("kristi", "25"); echo "<br>";
    ?>
</a>
</body>
</html>