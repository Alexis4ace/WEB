<?php

// compléter le code : il y a 4 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 5.4, URL', WIDTH_H1, 'left', '*', '*', '*');

echo EOLn;
echo encadre('a) urlencode', WIDTH_H2);

$s = "bébé et\nbébête";
// TODO $r = utilisation du filtre urlencode
$r = '';//todo ligne à supprimer, présente pour la compilation
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;


echo EOLn;
echo encadre('b) rawurlencode', WIDTH_H2);

$s = "bébé et\nbébête";
// TODO $r = utilisation du filtre rawurlencode
$r = '';//todo ligne à supprimer, présente pour la compilation
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;


echo EOLn;
echo encadre('c) urldecode', WIDTH_H2);

$s = "b%C3%A9+a%0Ab%20d";
// TODO $r = utilisation du filtre urldecode
$r = '';//todo ligne à supprimer, présente pour la compilation
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;


echo EOLn;
echo encadre('d) rawurldecode', WIDTH_H2);

$s = "b%C3%A9+a%0Ab%20d";
// TODO $r = utilisation du filtre rawurldecode
$r = '';//todo ligne à supprimer, présente pour la compilation
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;

