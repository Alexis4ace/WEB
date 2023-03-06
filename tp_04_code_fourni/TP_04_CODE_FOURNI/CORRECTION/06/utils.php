<?php
   function myprint_r_loc($expr, $decalage, $indent)
   {
      $result = "";

      if (is_bool($expr))
      {
         $result .= $expr ? "true" : "false";
      }
      elseif (! is_array($expr))
      {
         $result .= $expr;
      }
      else
      {
         $decalage_acc = str_repeat(" ", $decalage);
         $decalage_elt = str_repeat(" ", $decalage + $indent);
         $result .= "Array\n";
         $result .= $decalage_acc . "(\n";
         foreach($expr as $cle => $val)
         {
            $result .= $decalage_elt . '[' . $cle . '] => ';
            $result .= myprint_r_loc($val, $decalage + 2*$indent, $indent);
            $result .= "\n";
         }
         $result .= $decalage_acc . ")\n";
      }

      return $result;
   }

   function myprint_r($expr, $ret = false, $withPre = true, $indent = 4)
   {
      $result = "";

      if ($withPre)
         $result .= '<pre>';
      $result .= myprint_r_loc($expr, 0, $indent);
      if ($withPre)
         $result .= '</pre>';

      if ($ret)
         return $result;
      else
      {
         echo $result;
         return true;
      }
   }
?>
