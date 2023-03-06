<?php
   include("../UTILS/utils.php");
   include("xml.php");
   include("tableau.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <head>
      <title>exercice 4</title>
      <meta http-equiv="Content-Type"
            content="text/html; charset=utf-8" />
   </head>

   <body>

      <h1>Exo 4</h1>

      <?php

         $tab = getTableau();
         if (toXML("tableau.xml", $tab))
            echo '<p>ok</p>';
         else
            echo '<p>PB !!</p>';
      ?>

   </body>
</html>
