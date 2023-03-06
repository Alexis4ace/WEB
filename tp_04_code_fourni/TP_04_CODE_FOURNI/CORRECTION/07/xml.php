<?php
   function myassert($b, $msg = "")
   {
      if (! $b)
      {
         echo "<p>erreur $msg</p>";
         exit();
      }
   }

   function skip_spaces(&$s, &$i)
   {
      while ($s[$i] == " ")
         $i ++;
   }

   function readBalise(&$doc, &$current)
   {
      $posdebut = $current;
      if ($doc[$posdebut] != "<")
      {
         // c'est une feuille "texte" qui s'étend jusqu'à la fin du fichier ou une balise ouvrante ou une balise fermante
         // comme on suppose qu'il n'y a pas de '<' dans du texte c'est plus facile
         $posfin = strpos($doc, "<", $posdebut);
         if ($posfin === false)
            $posfin = strlen($doc) - 1;
         else
            $posfin --;

         $current = $posfin + 1;
         return substr($doc, $posdebut, $posfin - $posdebut + 1);
      }
      elseif ($doc[$i+1] == "/")
      {
         // balise fermante => plus d'élément à lire dans la balise courante
         $posfin = strpos($doc, ">", $posdebut);
         myassert($posfin !== false, "pb balise fermante");
         $current = $posfin + 1;
         return false;
      }
      else // balise ouvrante
      {
         $balise = array();

         // nom balise
         myassert(preg_match("/[ >]/", $doc, $match, PREG_OFFSET_CAPTURE, $posdebut) !== false, "nom balise");
         $posfin = $match[0][1] - 1;
         $balise['name'] = substr($doc, $posdebut,$posfin - $posdebut + 1);
         $current = $posfin + 1;
         skip_spaces($doc, $current);
         $posdebut = $current;

         // attributs
         $balise['attributs'] = array();
         $i_attr = 0;
         while ($doc[$posdebut] != ">")
         {
         }

         // fils
      }
   }

   function fromXML($filename)
   {
      $doc = file_get_contents($filename);
      if ($doc === false)
         return false;

      if ($doc === "")
         return "";

      $i = 0;
      $result = readBalise($doc, $i);
   }


   function writeElement(&$file, &$elt)
   {
      if (! is_array($elt))
         fprintf($file, "%s", $elt);
      else
      {
         fprintf($file, "<");
         fprintf($file, "%s", $elt["name"]);
         foreach($elt["attributs"] as $attribut => $valeur)
            fprintf($file, " %s=\"%s\"", $attribut, $valeur);
         fprintf($file, ">");

         for ($i = 0; $i < count($elt) - 2; $i ++)
            writeElement($file, $elt[$i]);

         fprintf($file, "</%s>", $elt["name"]);
      }
   }

   function toXML($filename, &$tab)
   {
      $file = fopen($filename, "wb");
      if (! $file)
         return false;
      writeElement($file, $tab);
      fclose($file);
      return true;
   }
?>

