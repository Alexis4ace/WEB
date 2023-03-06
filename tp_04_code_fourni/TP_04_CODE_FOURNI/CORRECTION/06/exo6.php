<?php
   include("utils.php");

   function test($titre, $expr, $withVerif = false)
   {
         echo "<h2>" . $titre . "</h2>\n";
         echo '<pre>' . print_r($expr, true) . '</pre>';
         echo "\n";
         myprint_r($expr, false, true, 4);
         echo "\n";

         if ($withVerif)
         {
            $a = myprint_r($expr, true, false, 4);
            $b = print_r($expr, true);
            if ($a != $b)
               echo "<p>PROBLEME</p>";
            else
               echo "<p>ok</p>";
         }
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <head>
      <title>exercice 5</title>
      <meta http-equiv="Content-Type"
            content="text/html; charset=utf-8" />
   </head>

   <body>

      <h1>Exo 5</h1>

      <?php

         test("variable inexistante", $e);

         $e = null;
         test("variable à null", $e);

         $e = true;
         test("variable à true", $e);

         $e = false;
         test("variable à false", $e);

         $e = 123;
         test("variable à 123", $e);

         $e = "miaou ouah";
         test("variable à \"miaou ouah\"", $e);

         $e = array(1, 123, 12, -4);
         test("variable à tableau numérique simple", $e);

         $e = array("aa" => 1, "azerty" => "coucou", 33 => true, "boubou" => 3+4);
         test("variable à tableau associatif simple", $e);

         $e = array (
               "nom" => "tartempion",
               "ville" => array (
                     "code"  => 86000,
                     "nom"   => "Poitiers",
                     "staff" => array (
                           "maire"    => "Terminator",
                           "adjoints" => array ("Bisounours", "Freddy"),
                           "associes" => "Dora",
                           "successeurs" => array("Batman", "Robin"),
                        ),
                  ),
               "metier" => "employé",
            );
         test("variable compliquée", $e);

      ?>

   </body>
</html>

