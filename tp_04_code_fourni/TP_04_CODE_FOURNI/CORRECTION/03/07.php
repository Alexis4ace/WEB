<?php

// compléter le code : il y a 1 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 3.7, variables de variables', WIDTH_H1, 'left', '*', '*', '*');

echo EOLn;
echo encadre('quelle est la capitale ?', WIDTH_H2);
$capitale_france = 'Paris';
$capitale_italie = 'Rome';
$capitale_espagne = 'Madrid';
$choix = 'italie';

// TODO : afficher la capitale désignée par $choix
echo 'La capitale de ' . $choix . ' est ' . ${'capitale_' . $choix} . EOLn;


echo EOLn;
echo encadre('variable de variable vs. tableau', WIDTH_H2);
echo 'Un tableau associatif, indicé par les pays aurait été plus
intelligent, notamment les capitales seraient liées par le nom du tableau.' . EOLn;

$capitales = array(
        'france' => 'Paris',
        'italie' => 'Rome',
        'espagne' => 'Madrid',
    );
$choix = 'italie';

echo 'La capitale de ' . $choix . ' est ' . $capitales[$choix] . EOLn;

