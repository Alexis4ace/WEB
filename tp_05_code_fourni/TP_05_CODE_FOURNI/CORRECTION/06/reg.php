<?php
    // fichier de test sur les expression régulières

    $pattern = "/[ab]/";
    //$s = "azertyabbzzz";
    $s = '<bb a="aa" b="bb" >mot';
    //if (preg_match($pattern, $s, $m, PREG_OFFSET_CAPTURE, 5))
    if (preg_match($pattern, $s, $m, 0, 5))
    //if (preg_match($pattern, $s, $m, PREG_OFFSET_CAPTURE))
    {
        echo "trouvé\n";
        print_r($m);
    } 
    else
        echo "pas trouvé\n";


?>
